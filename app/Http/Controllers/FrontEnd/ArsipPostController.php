<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArsipPostController extends Controller
{
    public function index()
    {
        return view('landing.arsip.index');
    }
}
