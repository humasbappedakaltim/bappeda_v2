<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\PostNew;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontEnd\SideDataController;

class ArtikelController extends Controller
{
    protected $sideDataController;

    public function __construct(SideDataController   $sideDataController)
    {
        $this->datas = $sideDataController;
        $this->arsip = $sideDataController;
    }

    public function index(Request $request)
    {
        $limit = 15;
        $artikel_id = PostCategory::where('name', 'Artikel')->first()->id;

        // berita with views
        $posts = $this->datas->datas();
        // posts arsip
        $arsip = $this->arsip->arsip();

        $artikels = PostNew::where('category_id', $artikel_id)->where('status', '!=', 0)->orderBy('created_at', 'desc')->paginate($limit);

        $categorys = PostCategory::orderBy('name')->get();

        if($request->has('search')) {
            $artikels = PostNew::where('category_id', $artikel_id)
                ->where('title', 'like', '%'.$request->input('search').'%')
                ->where('status', '!=', 0)
                ->orderBy('created_at', 'desc')
                ->paginate($limit);
        }
        return view('landing.artikel.index', compact('artikels','categorys','posts','arsip'));
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


        $view = PostNew::findBySlugAndIncrementViews($realSlug);

        $postNew = PostNew::where('slug', $realSlug)->first();

        if (!$postNew) {
            abort(404, 'Artikel tidak ditemukan');
        }

        $posts = $this->datas->datas();
        $arsip = $this->datas->arsip();

        return view('landing.artikel.show', compact('postNew','arsip','posts'));
    }
}
