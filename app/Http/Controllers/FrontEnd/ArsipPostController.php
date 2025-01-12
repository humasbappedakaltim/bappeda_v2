<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\PostNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArsipPostController extends Controller
{
    public function index($tahun)
    {
        $postArsip = PostNew::where('status', '!=', 0)->whereYear('created_at', $tahun)->paginate(10);

        return view('landing.arsip.index', compact('postArsip', 'tahun'));
    }
}
