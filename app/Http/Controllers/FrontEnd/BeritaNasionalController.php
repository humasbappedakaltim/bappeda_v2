<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\PostNew;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontEnd\SideDataController;

class BeritaNasionalController extends Controller
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
        $berita_nasional = PostCategory::where('name', 'Berita Nasional')->first()->id;

        // berita with views
        $posts = $this->datas->datas();
        // posts arsip
        $arsip = $this->arsip->arsip();

        $postNew = PostNew::where('category_id', $berita_nasional)->where('status', '!=', 0)->orderBy('created_at', 'desc')->paginate($limit);

        $categorys = PostCategory::orderBy('name')->get();

        if($request->has('search')) {
            $postNew = PostNew::where('category_id', $berita_nasional)
                ->where('title', 'like', '%'.$request->input('search').'%')
                ->where('status', 'published')
                ->orderBy('created_at', 'desc')
                ->paginate($limit);
        }
        return view('landing.berita-nasional.index', compact('postNew','categorys','posts','arsip'));
    }

    public function show($slug)
    {
        $view = PostNew::findBySlugAndIncrementViews($slug);
        
        // Pisahkan slug dan random string
        $parts = explode('.', $slug, 2);
        $realSlug = $parts[0] ?? null;
        $random = $parts[1] ?? null;


        if (!$realSlug) {
            abort(404);
        }

        $postNew = PostNew::where('slug', $realSlug)->first();

        if (!$postNew) {
            abort(404, 'Informasi tidak ditemukan');
        }

        $posts = $this->datas->datas();
        $arsip = $this->datas->arsip();

        return view('landing.berita-nasional.show', compact('postNew','arsip','posts'));
    }
}
