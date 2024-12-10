<?php

use Illuminate\Support\Facades\Route;


// front-end
use App\Http\Controllers\PioController;

use App\Http\Controllers\FrontEnd\AsnController;
use App\Http\Controllers\FrontEnd\PpidController;
use App\Http\Controllers\Dashboard\MapsController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\FrontEnd\AgendaController;
use App\Http\Controllers\FrontEnd\BeritaController;
use App\Http\Controllers\Dashboard\BidangController;
use App\Http\Controllers\FrontEnd\ArtikelController;
use App\Http\Controllers\FrontEnd\LandingController;
use App\Http\Controllers\Dashboard\PejabatController;
use App\Http\Controllers\FrontEnd\SideDataController;
use App\Http\Controllers\FrontEnd\InformasiController;
use App\Http\Controllers\Dashboard\DashboardController;

// Dashboard
use App\Http\Controllers\Dashboard\SubBidangController;
use App\Http\Controllers\FrontEnd\DataCenterController;
use App\Http\Controllers\Dashboard\AppBappedaController;
use App\Http\Controllers\Dashboard\PenghargaanController;
use App\Http\Controllers\Dashboard\Post\PostNewsController;
use App\Http\Controllers\Dashboard\WelcomeSliderController;
use App\Http\Controllers\FrontEnd\BeritaNasionalController;
use App\Http\Controllers\Dashboard\Post\CategoryPostController;
use App\Http\Controllers\FrontEnd\KinerjaPembangunanController;
use App\Http\Controllers\Dashboard\CategoryDataCenterController;
use App\Http\Controllers\Dashboard\PioController as DashboardPioController;
use App\Http\Controllers\Dashboard\AgendaController as DashboardAgendaController;
use App\Http\Controllers\Dashboard\DataCenterController as DashboardDataCenterController;


// Route::get('/', function () {
//     return view('landing.index');
// });


Route::middleware(['setlocale'])->group(function () {

    Route::group(['prefix' => '/'], function () {
        Route::get('/', [LandingController::class, 'index'])->name('landing.index');

        Route::group(['prefix' => 'profil'], function () {
            Route::get('/profile', [LandingController::class, 'profil'])->name('landing.profile');
            Route::get('/tupoksi', [LandingController::class, 'tupoksi'])->name('landing.tupoksi');
            Route::get('/struktur-organisasi', [LandingController::class, 'struktur'])->name('landing.struktur');

        Route::group(['prefix' => 'profil'], function () {

                Route::get('/asn', [AsnController::class, 'index'])->name('landing.asn');
                Route::get('/asn/sekretariat', [AsnController::class, 'sekretariat'])->name('landing.asn.sekretariat');
            });
        });
        Route::get('/peta', [LandingController::class, 'peta'])->name('landing.peta');
        Route::get('/penghargaan', [LandingController::class, 'penghargaan'])->name('landing.penghargaan');
        Route::get('/kepala-bappeda', [LandingController::class, 'kepala_bappeda'])->name('landing.kepala_bappeda');
        Route::get('/sekretaris', [LandingController::class, 'sekretaris'])->name('landing.sekretaris');
        Route::get('/bidang-perencanaan', [LandingController::class, 'bidang_perencanaan'])->name('landing.bidang_perencanaan');
        Route::get('/bidang-pemerintahan', [LandingController::class, 'bidang_pemerintahan'])->name('landing.bidang_pemerintahan');
        Route::get('/bidang-perekonomian', [LandingController::class, 'bidang_perekonomian'])->name('landing.bidang_perekonomian');
        Route::get('/bidang-infrastruktur', [LandingController::class, 'bidang_infrastruktur'])->name('landing.bidang_infrastruktur');

        // berita
        Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
        Route::get('/berita/{slug}/detail', [BeritaController::class, 'show'])->name('berita.show');

        Route::get('/berita-nasional', [BeritaNasionalController::class, 'index'])->name('berita_nasional.index');
        Route::get('/berita-nasional/{slug}/detail', [BeritaNasionalController::class, 'show'])->name('berita_nasional.show');

        Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
        Route::get('/artikel/{slug}/detail', [ArtikelController::class, 'show'])->name('artikel.show');

        Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
        Route::get('/informasi/{slug}/detail', [InformasiController::class, 'show'])->name('informasi.show');

        Route::get('/kinerja-pembangunan-kaltim', [KinerjaPembangunanController::class, 'index'])->name('pembangunan_kaltim.index');
        Route::get('/kinerja-pembangunan-kaltim/{slug}/detail', [KinerjaPembangunanController::class, 'show'])->name('pembangunan_kaltim.show');

        // Route::get('/lainnya/{slug}/detail', [SideDataController::class, 'show'])->name('lainnya.show');

        Route::get('data-center', [DataCenterController::class, 'index'])->name('data-center.index');
        // Route::get('data-center', [DataCenterController::class, 'index'])->name('data-center.index');
        Route::get('data-center/category/{slug}', [DataCenterController::class, 'show'])->name('data-center.category.show');
        Route::get('data-center/category/download/{slug}', [DataCenterController::class, 'download'])->name('data-center.category.download');

        // Agenda
        Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
        Route::get('/agenda/umum/', [AgendaController::class, 'index'])->name('agenda.umum');
        Route::get('/agenda/bidang perencanaan/', [AgendaController::class, 'index'])->name('agenda.perencanaan');
        Route::get('/agenda/bidang pemerintahan/', [AgendaController::class, 'index'])->name('agenda.pemerintahan');
        Route::get('/agenda/bidang perekonomian/', [AgendaController::class, 'index'])->name('agenda.perekonomian');
        Route::get('/agenda/bidang infrastruktur/', [AgendaController::class, 'index'])->name('agenda.infrastruktur');

        Route::get('agendas/data', [LandingController::class, 'listAgenda'])->name('agendas.data');
        // PPID
        Route::group(['prefix' => 'ppid'], function () {
            Route::get('/', [PpidController::class, 'index'])->name('ppid.index');

            // permhohonan Informasi Online
            Route::get('permohonan-informasi-online', [PpidController::class, 'pio'])->name('ppid.pio');
            Route::post('permohonan-informasi-online/store', [PioController::class, 'store'])->name('ppid.pio.store');

        });
    });
});


// front-end
// Route::resource('permohonan-informasi-online', PioController::class, ['names' => 'pio']);


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::resource('agenda', DashboardAgendaController::class, ['names' => 'dashboard.agenda']);
    Route::resource('slider', WelcomeSliderController::class, ['names'=> 'dashboard.sliders']);
    Route::resource('penghargaan', PenghargaanController::class, ['names' => 'dashboard.penghargaan']);
    Route::resource('category-data-center', CategoryDataCenterController::class, ['names' => 'dashboard.category.data.center']);
    Route::resource('data-center', DashboardDataCenterController::class, ['names'=> 'dashboard.data.center'])->except('show');
    Route::resource('maps', MapsController::class, ['names' => 'dashboard.maps'])->except('show');
    Route::resource('app', AppBappedaController::class, ['names' => 'dashboard.app-bappeda']);
    Route::resource('permohonan-informasi-online', DashboardPioController::class, ['names' => 'dashboard.pio']);

    Route::resource('bidang', BidangController::class, ['names' => 'dashboard.bidang']);
    Route::resource('sub-bidang', SubBidangController::class, ['names' => 'dashboard.sub.bidang']);
    Route::resource('pegawai', PejabatController::class, ['names' => 'dashboard.pejabat']);

    Route::group(['prefix' => 'post'], function () {
        Route::resource('category-post', CategoryPostController::class, ['names' => 'dashboard.post.category']);
        Route::resource('post-news', PostNewsController::class, ['names' => 'dashboard.post.news']);
    });


    // Prefix for Datatable
    Route::group(['prefix' => 'datas'], function () {
        Route::get('sliders', [WelcomeSliderController::class, 'data_table'])->name('dashboard.sliders.data_table');
        Route::get('agendas', [DashboardAgendaController::class, 'data_table'])->name('dashboard.agenda.data_table');
        Route::get('penghargaan', [PenghargaanController::class, 'data_table'])->name('dashboard.penghargaan.data_table');
        Route::get('category-data-center', [CategoryDataCenterController::class, 'data_table'])->name('dashboard.category.data.center.data_table');
        Route::get('data-center', [DashboardDataCenterController::class, 'data_table'])->name('dashboard.data.center.data_table');
        Route::get('posts', [PostNewsController::class, 'data_table'])->name('dashboard.post.news.data_table');
        Route::get('category-post', [CategoryPostController::class, 'data_table'])->name('dashboard.post.category.data_table');
        Route::get('maps-data', [MapsController::class, 'data_table'])->name('dashboard.maps.data_table');
        Route::get('roles-data', [RoleController::class, 'data_table'])->name('dashboard.settings.roles.data_table');
        Route::get('app-datas', [AppBappedaController::class, 'data_table'])->name('dashboard.app-bappeda.data_table');
        Route::get('bidang-datas', [BidangController::class, 'data_table'])->name('dashboard.bidang.data_table');
        Route::get('sub-bidang-datas', [SubBidangController::class, 'data_table'])->name('dashboard.sub.bidang.data_table');
        Route::get('pejabats-datas', [PejabatController::class, 'data_table'])->name('dashboard.pejabat.data_table');
        Route::get('pios-datas', [DashboardPioController::class, 'data_table'])->name('dashboard.pio.data_table');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::resource('roles', RoleController::class, ['names' => 'dashboard.settings.roles']);
        Route::resource('users', UserController::class, ['names' => 'dashboard.settings.users']);
    });
});


// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


//
