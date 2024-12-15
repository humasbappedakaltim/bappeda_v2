<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PpidController extends Controller
{
    public function index()
    {
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



}
