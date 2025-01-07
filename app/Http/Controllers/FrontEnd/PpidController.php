<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PpidController extends Controller
{
    public function index()
    {
        // save visitor
        $visitor = new Visitor();
        $visitor->save();

        return view('landing.ppid.index');
    }

    public function pio()
    {
        return view('landing.ppid.pio');
    }

    public function profile()
    {
        return view('landing.ppid.profil');
    }

    public function struktur()
    {
        return view('landing.ppid.struktur');
    }

    public function tugas_fungsi()
    {
        return view('landing.ppid.tugas_fungsi');
    }

    public function maklumat_pelayanan()
    {
        return view('landing.ppid.maklumat_pelayanan');
    }

    public function visi_misi()
    {
        return view('landing.ppid.visi_misi');
    }

    public function tata_cara()
    {
        return view('landing.ppid.tata_cara');
    }


}
