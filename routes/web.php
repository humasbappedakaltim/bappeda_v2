<?php

use Illuminate\Support\Facades\Route;


// front-end
use App\Http\Controllers\PioController;

use App\Http\Controllers\FrontEnd\AsnController;
use App\Http\Controllers\FrontEnd\PpidController;
use App\Http\Controllers\Dashboard\MapsController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\DataCenterPpidController;
use App\Http\Controllers\FrontEnd\AgendaController;
use App\Http\Controllers\FrontEnd\BeritaController;
use App\Http\Controllers\FrontEnd\SurveiController;
use App\Http\Controllers\Dashboard\BidangController;
use App\Http\Controllers\FrontEnd\ArtikelController;
use App\Http\Controllers\FrontEnd\LandingController;
use App\Http\Controllers\Dashboard\PejabatController;

// Dashboard
use App\Http\Controllers\Dashboard\VisitorController;
use App\Http\Controllers\FrontEnd\SideDataController;
use App\Http\Controllers\FrontEnd\ArsipPostController;
use App\Http\Controllers\FrontEnd\InformasiController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SubBidangController;
use App\Http\Controllers\FrontEnd\DataCenterController;
use App\Http\Controllers\Dashboard\AppBappedaController;
use App\Http\Controllers\FrontEnd\SurveiRPJMDController;
use App\Http\Controllers\Dashboard\PenghargaanController;
use App\Http\Controllers\Dashboard\ExportSurveiController;
use App\Http\Controllers\FrontEnd\MateriPaparanController;
use App\Http\Controllers\Dashboard\Post\PostNewsController;
use App\Http\Controllers\Dashboard\WelcomeSliderController;
use App\Http\Controllers\FrontEnd\BeritaNasionalController;
use App\Http\Controllers\Dashboard\Post\CategoryPostController;
use App\Http\Controllers\FrontEnd\KinerjaPembangunanController;
use App\Http\Controllers\Dashboard\CategoryDataCenterController;
use App\Http\Controllers\Dashboard\KategoriMateriPaparanController;
use App\Http\Controllers\Dashboard\PioController as DashboardPioController;
use App\Http\Controllers\Dashboard\AgendaController as DashboardAgendaController;
use App\Http\Controllers\Dashboard\SurveiController as DashboardSurveiController;
use App\Http\Controllers\Dashboard\DataCenterController as DashboardDataCenterController;
use App\Http\Controllers\Dashboard\SurveiRPJMDController as DashboardSurveiRPJMDController;
use App\Http\Controllers\Dashboard\MateriPaparanController as DashboardMateriPaparanController;

// Route::get('/', function () {
//     return view('landing.index');
// });


// Route::get('locale/{locale}', function ($locale) {
//     app()->setLocale($locale);
//     session(['locale' => $locale]);
//     // dd(app()->getLocale());
//     return redirect()->back();
// })->name('set.locale');


Route::middleware(['setlocale'])->group(function () {

    Route::get('/', function () {
        return view('landing.portal');
    });



    Route::get('/survei-kepuasan-masyarakat', [SurveiController::class, 'index'])->name('landing.survei');
    Route::get('/survei/berhasil', [SurveiController::class, 'success'])->name('landing.survei.success');
    Route::get('/survei-publik-rpjmd', [SurveiRPJMDController::class, 'index'])->name('landing.survei-publik-rpjmd');
    Route::get('/survei-publik-rpjmd/berhasil', [SurveiRPJMDController::class, 'success'])->name('landing.survei-publik-rpjmd.success');


    Route::group(['prefix' => '/beranda'], function () {
        Route::get('/', [LandingController::class, 'index'])->name('landing.index');

        Route::group(['prefix' => 'profil'], function () {
            Route::get('/profile', [LandingController::class, 'profil'])->name('landing.profile');
            Route::get('/tupoksi', [LandingController::class, 'tupoksi'])->name('landing.tupoksi');
            Route::get('/struktur-organisasi', [LandingController::class, 'struktur'])->name('landing.struktur');

        Route::group(['prefix' => '/profil'], function () {

                Route::get('/asn', [AsnController::class, 'index'])->name('landing.asn');
                Route::get('/asn/{bidang}', [AsnController::class, 'bidang'])->name('landing.asn.bidang');
                Route::get('/asn/{bidang}/{subBidang}', [AsnController::class, 'subBidang'])->name('landing.asn.bidang.subBidang');

            });
        });

        Route::get('get/youtube', [LandingController::class, 'getYoutube'])->name('getYoutube');

        Route::get('/informasi-prioritas', [LandingController::class, 'informasi_prioritas'])->name('landing.informasi_prioritas');

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

        Route::get('/arsip/{tahun}', [ArsipPostController::class, 'index'])->name('arsip.show');
        // Route::get('/lainnya/{slug}/detail', [SideDataController::class, 'show'])->name('lainnya.show');

        Route::group(['prefix' => 'data-center'], function () {
            Route::get('data-center', [DataCenterController::class, 'index'])->name('data-center.index');
            Route::get('materi-paparan', [MateriPaparanController::class , 'index'])->name('materi_paparan.index');
            Route::get('materi-paparan/{bidang}', [MateriPaparanController::class , 'show'])->name('materi_paparan.show');
            Route::get('materi-paparan/{bidang}/{category}', [MateriPaparanController::class , 'category'])->name('materi_paparan.category');
            Route::get('materi-paparan/download/{bidang}', [MateriPaparanController::class , 'download'])->name('materi_paparan.download');

        });
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

        // Ruang Publik

        Route::get('/ruang-publik', [LandingController::class, 'ruang_publik'])->name('landing.ruang_publik');

        Route::post('/survei/store', [SurveiController::class, 'store'])->name('landing.survei.store');
        Route::post('/survei-publik-rpjmd/store', [SurveiRPJMDController::class, 'store'])->name('landing.survei-publik-rpjmd.store');


        Route::get('agendas/data', [LandingController::class, 'listAgenda'])->name('agendas.data');
        // PPID
        Route::group(['prefix' => 'ppid'], function () {
            Route::get('/', [PpidController::class, 'index'])->name('ppid.index');

            // Profile
            Route::get('/profile', [PpidController::class, 'profile'])->name('ppid.profil');
            // permhohonan Informasi Online
            Route::get('permohonan-informasi-online', [PpidController::class, 'pio'])->name('ppid.pio');
            Route::post('permohonan-informasi-online/store', [PioController::class, 'store'])->name('ppid.pio.store');
            Route::get('struktur-organisasi', [PpidController::class, 'struktur'])->name('ppid.struktur');
            Route::get('tugas-dan-fungsi', [PpidController::class, 'tugas_fungsi'])->name('ppid.tugas_fungsi');
            Route::get('maklumat-pelayanan', [PpidController::class, 'maklumat_pelayanan'])->name('ppid.maklumat_pelayanan');
            Route::get('visi-misi', [PpidController::class, 'visi_misi'])->name('ppid.visi_misi');
            Route::get('tata-cara', [PpidController::class, 'tata_cara'])->name('ppid.tata_cara');

            Route::get('dasar-hukum/{category_infomation}',[DataCenterPpidController::class, 'dasar_hukum'])->name('ppid.dasar_hukum');
            Route::get('dasar-hukum/show/{slug}', [DataCenterPpidController::class, 'dasar_hukum_show'])->name('ppid.dasar_hukum_show');
            // Route::get('maklumat', [DataCenterPpidController::class, 'maklumat'])->name('ppid.maklumat');
            // Route::get('prosedur-permohonan-informasi', [DataCenterPpidController::class, 'prosedur_permohonan_informasi'])->name('ppid.prosedur_permohonan_informasi');
            // Data PPID
            Route::get('category/{slug}', [DataCenterPpidController::class, 'show'])->name('ppid.category.show');
            Route::get('category/download/{slug}', [DataCenterPpidController::class, 'download'])->name('ppid.category.download');
        });
    });
});


// front-end
// Route::resource('permohonan-informasi-online', PioController::class, ['names' => 'pio']);


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::get('/visitors/data', [VisitorController::class, 'getVisitorData'])->name('visitors.data');


    Route::resource('agenda', DashboardAgendaController::class, ['names' => 'dashboard.agenda']);
    Route::resource('slider', WelcomeSliderController::class, ['names'=> 'dashboard.sliders']);
    Route::resource('penghargaan', PenghargaanController::class, ['names' => 'dashboard.penghargaan']);
    Route::resource('category-data-center', CategoryDataCenterController::class, ['names' => 'dashboard.category.data.center']);
    Route::resource('data-center', DashboardDataCenterController::class, ['names'=> 'dashboard.data.center'])->except('show');
    Route::resource('category-materi-paparan', KategoriMateriPaparanController::class, ['names' => 'dashboard.category.materi_paparan']);
    Route::resource('materi-paparan', DashboardMateriPaparanController::class, ['names' => 'dashboard.data.materi_paparan']);

    Route::resource('maps', MapsController::class, ['names' => 'dashboard.maps'])->except('show');
    Route::resource('app', AppBappedaController::class, ['names' => 'dashboard.app-bappeda']);
    Route::resource('permohonan-informasi-online', DashboardPioController::class, ['names' => 'dashboard.pio']);

    Route::resource('bidang', BidangController::class, ['names' => 'dashboard.bidang']);
    Route::resource('sub-bidang', SubBidangController::class, ['names' => 'dashboard.sub.bidang']);
    Route::resource('pegawai', PejabatController::class, ['names' => 'dashboard.pejabat']);

    Route::resource('survei/', DashboardSurveiController::class, ['names' => 'dashboard.survei']);
    // Route::post('surveis/export', [DashboardSurveiController::class, 'export'])->name('dashboard.survei.export.index');
    Route::get('survei-kepuasan-masyarakat', [ExportSurveiController::class, 'index'])->name('dashboard.survei.masyarakat');
    Route::get('surveis/export', [ExportSurveiController::class, 'export'])->name('dashboard.survei.export');
    Route::resource('survei-rpjmd', DashboardSurveiRPJMDController::class, ['names' => 'dashboard.survei-rpjmd']);
    Route::get('download-survei-rpjmd', [DashboardSurveiRPJMDController::class, 'downloadSurveiRpjmd'])->name('dashboard.survei-rpjmd.download');

    Route::group(['prefix' => 'post'], function () {
        Route::resource('category-post', CategoryPostController::class, ['names' => 'dashboard.post.category']);

        Route::resource('post-news', PostNewsController::class, ['names' => 'dashboard.post.news']);
        Route::post('post-upload-image', [PostNewsController::class, 'uploadImage'])->name('dashboard.post.upload.image');
    });


    // Prefix for Datatable
    Route::group(['prefix' => 'datas'], function () {
        Route::get('sliders', [WelcomeSliderController::class, 'data_table'])->name('dashboard.sliders.data_table');
        Route::get('agendas', [DashboardAgendaController::class, 'data_table'])->name('dashboard.agenda.data_table');
        Route::get('penghargaan', [PenghargaanController::class, 'data_table'])->name('dashboard.penghargaan.data_table');
        Route::get('category-data-center', [CategoryDataCenterController::class, 'data_table'])->name('dashboard.category.data.center.data_table');
        Route::get('category-data-paparan', [KategoriMateriPaparanController::class, 'data_table'])->name('dashboard.category.materi_paparan.data_table');
        Route::get('data-center', [DashboardDataCenterController::class, 'data_table'])->name('dashboard.data.center.data_table');
        Route::get('data-paparan', [DashboardMateriPaparanController::class, 'data_table'])->name('dashboard.data.materi_paparan.data_table');
        Route::get('posts', [PostNewsController::class, 'data_table'])->name('dashboard.post.news.data_table');
        Route::get('category-post', [CategoryPostController::class, 'data_table'])->name('dashboard.post.category.data_table');
        Route::get('maps-data', [MapsController::class, 'data_table'])->name('dashboard.maps.data_table');
        Route::get('roles-data', [RoleController::class, 'data_table'])->name('dashboard.settings.roles.data_table');
        Route::get('app-datas', [AppBappedaController::class, 'data_table'])->name('dashboard.app-bappeda.data_table');
        Route::get('bidang-datas', [BidangController::class, 'data_table'])->name('dashboard.bidang.data_table');
        Route::get('sub-bidang-datas', [SubBidangController::class, 'data_table'])->name('dashboard.sub.bidang.data_table');
        Route::get('pejabats-datas', [PejabatController::class, 'data_table'])->name('dashboard.pejabat.data_table');
        Route::get('pios-datas', [DashboardPioController::class, 'data_table'])->name('dashboard.pio.data_table');
        Route::get('survei', [DashboardSurveiController::class, 'data_table'])->name('dashboard.survei.data_table');
        Route::get('survei-rpjmd', [DashboardSurveiRPJMDController::class, 'data_table'])->name('dashboard.survei-rpjmd.data_table');
        Route::get('users', [UserController::class, 'data_table'])->name('dashboard.settings.users.data_table');
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
