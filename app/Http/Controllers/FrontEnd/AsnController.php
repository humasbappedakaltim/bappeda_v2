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

        $ketuaTim = collect();
        $struktural = collect();
        $fungsional = collect();
        $pelaksana = collect();
        $pppk = collect();
        $nonAsn = collect();

        // Check if the bidang exists
        if (!$bidang) {
            abort(404, 'Bidang not found');
        }

        if ($bidang->name == 'Sekretariat') {
            // Fetch pejabat for "Sekretariat" with urutan_jabatan 2
            // $pejabat = Pejabat::whereHas('bidangs', function ($query) use ($bidang) {
            //     $query->where('bidang_id', $bidang->id);
            // });
            // dd($pejabat->get());
            $pejabat = Pejabat::whereHas('bidangs', function ($query) use ($bidang) {
                $query->where('bidang_id', $bidang->id);
            })->get();

            $subBidangs = SubBidang::where('bidang_id', $bidang->id)->get();
        } else {
            // Fetch pejabat for the bidang
            $pejabat = Pejabat::whereHas('bidangs', function ($query) use ($bidang) {
                $query->where('bidang_id', $bidang->id);
            })->get();


            $pejabatPejabat = $pejabat->where('status_jabatan', 'pajabat'); // Adjust to the correct status value
            $nonPejabat = $pejabat->where('status_jabatan', '!=', 'pajabat'); // Non-pejabat;



            $ketuaTim = $pejabat->filter(fn($pejab) => str_contains($pejab->ketua_tim, $bidang->name))->first();


            $struktural = $pejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                    ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'struktural');

            $fungsional = $pejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                    ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'fungsional');

            // Filters for non-pejabat
            $pelaksana = $nonPejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                    ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'pelaksana');

            $pppk = $nonPejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                    ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'pppk');

            $nonAsn = $nonPejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                    ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'non-asn');

        }



        return view('landing.asn.show', compact('bidang', 'pejabat', 'subBidangs', 'ketuaTim', 'struktural', 'fungsional', 'pelaksana', 'pppk', 'nonAsn'));

    }




    public function subBidang($bidang, $subBidang)
    {
        $bidang = Bidang::where('name', $bidang)->firstOrFail();
        $subBidang = SubBidang::where('name', $subBidang)->firstOrFail();

        $pejabat = Pejabat::whereHas('sub_bidangs', function ($query) use ($subBidang) {
            $query->where('sub_bidang_id', $subBidang->id);
        })->get();


       // Directly filter using where method
        $pejabatPejabat = $pejabat->where('status_jabatan', 'pajabat'); // Adjust to the correct status value
        $nonPejabat = $pejabat->where('status_jabatan', '!=', 'pajabat'); // Non-pejabat
        // dd($pejabatPejabat);

        // $pejabat = $pejabat->filter(fn($pejab) => $pejab->status_jabatan === 'pajabat');
        // $nonPejabat = $pejabat->filter(fn($pejab) => $pejab->status_jabatan != 'pajabat');

        $ketuaTim = $pejabatPejabat->filter(fn($pejab) => str_contains($pejab->ketua_tim, $subBidang->name))->first();


        $struktural = $pejabatPejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'struktural');

        $fungsional = $pejabatPejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'fungsional');

        // Filters for non-pejabat
        $pelaksana = $nonPejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'pelaksana');

        $pppk = $nonPejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'pppk');

        $nonAsn = $nonPejabat->reject(fn($pejab) => $pejab->id === $ketuaTim?->id)
                                ->filter(fn($pejab) => $pejab->status_jabatan_penjabat === 'non-asn' );
        
        return view('landing.asn.detail', compact(
            'bidang',
            'subBidang',
            'pejabat',
            'ketuaTim',
            'struktural',
            'fungsional',
            'pelaksana',
            'pppk',
            'nonAsn'
        ));
    }

}
