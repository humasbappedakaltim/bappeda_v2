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

}
