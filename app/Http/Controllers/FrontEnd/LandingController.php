<?php

namespace App\Http\Controllers\FrontEnd;

use Carbon\Carbon;
use App\Models\Maps;
use App\Models\Agenda;
use App\Models\PostNew;
use App\Models\AppBappeda;
use App\Models\Penghargaan;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Models\WelcomeSlider;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        // posts
        $news_category = PostCategory::where('name', 'Berita')->first();
        $news_international = PostCategory::where('name', 'Berita Nasional')->first();
        $information_category = PostCategory::where('name', 'Informasi')->first();
        $sliders = WelcomeSlider::where('active', 1)->orderBy('orders', 'asc')->take(5)->get();
        // dd($sliders);
        $news = PostNew::whereIn('category_id', [$news_category->id, $news_international->id])->where('status', 'published')->orderBy('created_at', 'desc')->limit(3)->get();
        $informations = PostNew::where('category_id', $information_category->id)->where('status', 'published')->orderBy('created_at', 'desc')->limit(5)->get();
        // dd($informations);
        if ($news_category && $news_international && $information_category) {
            $news = PostNew::whereIn('category_id', [$news_category->id, $news_international->id])
                           ->where('status', 'published')
                           ->orderBy('created_at', 'desc')
                           ->limit(3)
                           ->get();

            $informations = PostNew::where('category_id', $information_category->id)
                                   ->where('status', 'published')
                                   ->orderBy('created_at', 'desc')
                                   ->limit(5)
                                   ->get();
        } else {
            $news = collect();
            $informations = collect();
        }

        $agendas = Agenda::orderBy('created_at', 'desc')->get();
        // views posts
        $posts_list_by_views = PostNew::orderBy('views', 'desc')->take(10)->get();

        // app bappeda
        $apps = AppBappeda::orderBy('orders', 'desc')->get();
        // rewards
        $awards = Penghargaan::orderBy('created_at', 'asc')->limit(5)->get();
        // maps / peta
        $maps = Maps::orderBy('name', 'asc')->limit(5)->get();

        $news = PostNew::where('status', 'published')->orderBy('created_at', 'desc')->limit(10)->get();

        return view('landing.index', compact('sliders','news','informations','apps','awards','maps','agendas','posts_list_by_views'));
    }

    public function listAgenda(Request $request)
    {
        $date = $request->date;
        $date = Carbon::parse($date)->format('Y-m-d');

        $agendas = Agenda::select('schedule', 'caption','description','location','times','dihadiri')->whereDate('schedule', $date)->orderBy('schedule', 'desc')->get();

        if ($agendas->count() > 0) {
            return response()->json([
                'status' => 'success',
                'date' => $date,
                'data' => $agendas
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'date' => $date,
                'message' => 'Agenda Tidak Ditemukan'
            ]);
        }
    }


    public function berita()
    {
        return view('landing.berita');
    }

    public function profil()
    {
        return view('landing.profile');
    }

    public function tupoksi()
    {
        return view('landing.tupoksi');
    }

    public function struktur()
    {
        return view('landing.struktur');
    }

    public function peta()
    {
        return view('landing.peta');
    }

    public function penghargaan()
    {
        return view('landing.penghargaan');
    }

    // Unit Kerja
    public function kepala_bappeda()
    {
        return view('landing.unit-kerja.kepala_bappeda');
    }

    public function sekretaris()
    {
        return view('landing.unit-kerja.sekre');
    }

    public function bidang_perencanaan()
    {
        return view('landing.unit-kerja.bidang_perencanaan');
    }

    public function bidang_pemerintahan()
    {
        return view('landing.unit-kerja.bidang_pemerintahan');
    }

    public function bidang_perekonomian()
    {
        return view('landing.unit-kerja.bidang_perekonomian');
    }

    public function bidang_infrastruktur()
    {
        return view('landing.unit-kerja.bidang_infrastruktur');
    }

}
