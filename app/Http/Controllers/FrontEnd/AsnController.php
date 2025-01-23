<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Bidang;
use App\Models\Pejabat;
use App\Models\SubBidang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsnController extends Controller
{
    public function index()
    {
        $kepala = Pejabat::where('urutan_jabatan', 1)->first();
        $bidangs = Bidang::where('name', '!=', 'Kepala')->get();

        return view('landing.asn.index', compact('kepala', 'bidangs'));
    }

    public function bidang($bidang)
    {
        // Retrieve the bidang from the database
        $bidang = Bidang::where('name', $bidang)->first();
        $pejabat = collect();
        $subBidangs = collect();

        // Check if the bidang exists
        if (!$bidang) {
            abort(404, 'Bidang not found');
        }

        if ($bidang->name == 'Sekretariat') {
            // Fetch pejabat for "Sekretariat" with urutan_jabatan 2
            $pejabat = Pejabat::where('bidang_id', $bidang->id)
                ->where('urutan_jabatan', 2)
                ->first();

            // Fetch related subBidangs for "Sekretariat"
            $subBidangs = SubBidang::where('bidang_id', $bidang->id)->get();
        } else {
            // Fetch all related subBidangs
            $keywords = explode(' ', $bidang->name);
            $subBidangs = SubBidang::where('bidang_id', $bidang->id)->get();

            $pejabat = Pejabat::where('bidang_id', $bidang->id)
            ->orWhere(function ($query) use ($keywords) {
                foreach ($keywords as $keyword) {
                    $query->orWhere('jabatan_lainnya', 'like', "%{$keyword}%");
                }
            })
            ->orderBy('urutan_jabatan')->get();

        }

        return view('landing.asn.show', compact('bidang', 'pejabat', 'subBidangs'));
    }




    public function subBidang($bidang, $subBidang)
    {
        $subBidang = SubBidang::where('name', $subBidang)->first();
        $bidang = Bidang::where('name', $bidang)->first();

        $pejabat = Pejabat::where('sub_bidang_id', $subBidang->id)->get();

        return view('landing.asn.detail', compact('bidang','subBidang','pejabat'));
    }

}
