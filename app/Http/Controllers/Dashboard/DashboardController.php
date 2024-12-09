<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Berita;
use App\Models\PostNew;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $category_berita = PostCategory::where('name', 'Berita')->first();
        $category_artikel = PostCategory::where('name', 'Artikel')->first();
        $category_informasi = PostCategory::where('name', 'Informasi')->first();
        $category_kinerja = PostCategory::where('name', 'Kinerja Pembangunan Kaltim')->first();
        $category_berita_nasional = PostCategory::where('name', 'Berita Nasional')->first();

        $beritas_count = PostNew::where('category_id', $category_berita->id)->where('status','published')->count();
        $artikel_count = PostNew::where('category_id', $category_artikel->id)->where('status','published')->count();
        $informasi_count = PostNew::where('category_id', $category_informasi->id)->where('status','published')->count();
        $kinerja_count = PostNew::where('category_id', $category_kinerja->id)->where('status','published')->count();
        $berita_nasional_count = PostNew::where('category_id', $category_berita_nasional->id)->where('status','published')->count();


        return view('dashboard.index', compact('beritas_count', 'artikel_count', 'informasi_count', 'kinerja_count', 'berita_nasional_count'));
    }
}
