<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\PostNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArsipPostController extends Controller
{
    public function index(Request $request, $tahun)
    {
        $order = $request->get('order', 'asc');

        $postArsip = PostNew::where('status', '!=', 0)
            ->whereYear('created_at', $tahun)
            ->orderBy('created_at', $order)
            ->get();
            
        if ($postArsip->isEmpty()) {
            abort(404);
        }

        return view('landing.arsip.index', compact('postArsip', 'tahun'));
    }
}
