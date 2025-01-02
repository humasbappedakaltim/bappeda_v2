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

    public function show($slug)
    {
        // $category = CategoryDataCenter::where('slug', $slug)->first();
        // if (!$category) {
        //     abort(404);
        // }

        // $datas = DataCenter::where('category_data_center_id', $category->id)->get();
        $datas = DataCenter::where('name', 'like', '%'. $slug .'%')->get();
        // if($name != ''){
        //     $datas = DataCenter::where('name', 'like', '%'. $name .'%')->get();
        //     $category = $datas->category_data_center()->name;
        // }else{
        //     dd($slug);
        //     $category = CategoryDataCenter::where('slug', $slug)->first();
        //     if (!$category) {
        //         abort(404);
        //     }

        //     $datas = DataCenter::where('category_data_center_id', $category->id)->get();
        // }

        if($datas == null){
            abort(404);
        }
        // return view('landing.ppid.category-data', compact('category','datas'));
        return view('landing.ppid.category-data', compact('datas'));
    }

    public function download($slug)
    {
        $data = DataCenter::where('slug',$slug)->firstOrFail();

        return response()->download(public_path('storage/file/data-center/' . $data->file));
    }
}
