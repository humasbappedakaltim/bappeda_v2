<?php

namespace App\Http\Controllers;

use App\Models\CategoryDataCenter;
use App\Models\DataCenter;
use App\Models\Pio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DataCenterPpidController extends Controller
{
    public function maklumat(Request $request)
    {
        $categorys = CategoryDataCenter::orderBy('order', 'asc')->where('name', 'Maklumat Pelayanan')->paginate(20);
        return view('landing.ppid.data', compact('categorys', 'name'));
    }

    public function prosedur_permohonan_informasi(Request $request)
    {
        $categorys = CategoryDataCenter::orderBy('order', 'asc')->where('name', 'Prosedur Permohonan Informasi')->paginate(20);
        $name = 'Prosedur Permohonan Informasi';
        return view('landing.ppid.data', compact('categorys', 'name'));
    }

    public function dasar_hukum($category_infomation)
    {

        $categroy = CategoryDataCenter::where('name', $category_infomation)->first();

        $dataCenter = DataCenter::where('category_data_center_id', $categroy->id)->paginate(10);

        if($dataCenter == null){
            abort(404);
        }

        return view('landing.ppid.dasar_hukum', compact('dataCenter'));
    }

    public function dasar_hukum_show($slug)
    {
        $data = DataCenter::where('slug', $slug)->first();

        if($data == null){
            abort(404);
        }

        return view('landing.ppid.dasar_hukum_show', compact('data'));
    }

    public function show($slug)
    {
        if ($slug == null) {
            abort(404);
        }

        // Mapping slug ke teks yang rapi
        $slugMap = [
            'infoberkala' => 'Info Berkala',
            'infosertamerta' => 'Info Serta Merta',
            'infotersediasetiapsaat' => 'Info Tersedia Setiap Saat',
            'maklumat' => 'Maklumat',
            'prosedurpermohonaninformasi' => 'Prosedur Permohonan Informasi',
            'prosedurpengajuankeberatan' => 'Prosedur Pengajuan Keberatan',
            'prosedursengketainformasi' => 'Prosedur Sengketa Informasi',
            'jalurwaktudanbiayalayanan' => 'Jalur, Waktu dan Biaya Layanan',
            'daftar_informasi_publik' => 'Daftar Informasi Publik',
            'laporanaksesinformasipublik' => 'Laporan Akses Informasi Publik',
            'laporanlayananinformasipublik' => 'Laporan Layanan Informasi Publik',
            'laporansurveilayananinformasi' => 'Laporan Survei Layanan Informasi',
            'laporanrealisasianggaran' => 'Laporan Realisasi Anggaran',
        ];

        // Ambil teks berdasarkan mapping, fallback jika tidak ada di mapping
        $slugText = $slugMap[$slug] ?? ucwords(str_replace('_', ' ', $slug));

        // Ambil data berdasarkan category_information
        $datas = DataCenter::where('category_information', 'like', '%' . $slug . '%')->get();

        if($slug === 'daftar_informasi_publik') {
            return view('landing.ppid.catgeory-data-daftar_informasi_publik', compact('datas', 'slugText'));
        }

        // Return view dengan slug yang sudah diformat rapi
        return view('landing.ppid.category-data', compact('datas', 'slugText'));
    }



    public function download($slug)
    {
        $data = DataCenter::where('slug',$slug)->firstOrFail();

        return response()->download(public_path('storage/file/data-center/' . $data->file));
    }
}
