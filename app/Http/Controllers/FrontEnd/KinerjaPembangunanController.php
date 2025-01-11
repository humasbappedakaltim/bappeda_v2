<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\PostNew;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontEnd\SideDataController;

class KinerjaPembangunanController extends Controller
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
        $kinerja_id = PostCategory::where('name', 'Kinerja Pembangunan Kaltim')->first()->id;

        // berita with views
        $posts = $this->datas->datas();
        // posts arsip
        $arsip = $this->arsip->arsip();

        $kinerja = PostNew::where('category_id', $kinerja_id)->where('status', '!=', 0)->orderBy('created_at', 'desc')->paginate($limit);

        $categorys = PostCategory::orderBy('name')->get();

        if($request->has('search')) {
            $kinerja = PostNew::where('category_id', $kinerja_id)
                ->where('title', 'like', '%'.$request->input('search').'%')
                ->where('status', '!=', 0)
                ->orderBy('created_at', 'desc')
                ->paginate($limit);
        }
        return view('landing.kinerja.index', compact('kinerja','categorys','posts','arsip'));
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
            abort(404, 'Kinerja Pembangunan Kaltim tidak ditemukan');
        }

        $posts = $this->datas->datas();
        $arsip = $this->datas->arsip();

        return view('landing.kinerja.show', compact('postNew','arsip','posts'));
    }
}
