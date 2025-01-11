<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\PostNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SideDataController extends Controller
{
    public function datas()
    {
        // show all post with order by created_at
        $posts = PostNew::orderBy('created_at', 'desc')->take(10)->get();

        return $posts;
    }

    public function arsip()
    {
        $posts_arsip = PostNew::selectRaw('YEAR(created_at) as year, COUNT(*) as total')
        ->where('status', '!=', 0)
        ->groupBy('year')
        ->orderBy('year', 'desc')
        ->get();

        return $posts_arsip;
    }

    public function show($slug)
    {
        // Pisahkan slug dan random string
        $parts = explode('.', $slug, 2);
        $realSlug = $parts[0] ?? null;
        $random = $parts[1] ?? null;

        if (!$realSlug) {
            abort(404);
        }

        $view = PostNew::findBySlugAndIncrementViews($slug);


        $postNew = PostNew::where('slug', $realSlug)->first();

        if (!$postNew) {
            abort(404, 'Berita tidak ditemukan');
        }

        $posts = $this->datas();

        $arsip = $this->arsip();


        return view('landing.side.show', compact('postNew','posts','arsip'));

    }
}
