<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Bidang;
use App\Models\Pejabat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsnController extends Controller
{
    public function index()
    {
        $kepala = Pejabat::where('urutan_jabatan', 1)->first();
        return view('landing.asn.index', compact('kepala'));
    }

    public function sekretariat()
    {
        $bidang = Bidang::where('name', 'Sekretariat')->first();

        $pejabat = Pejabat::where('bidang_id', $bidang->id)->where('urutan_jabatan', 2)->first();
        // dd($pejabat);
        return view('landing.asn.sekretariat', compact('bidang','pejabat'));
    }


}
