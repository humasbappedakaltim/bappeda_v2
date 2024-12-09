<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\DataCenter;
use Illuminate\Http\Request;
use App\Models\CategoryDataCenter;
use App\Http\Controllers\Controller;

class DataCenterController extends Controller
{
    public function index()
    {
        $categorys = CategoryDataCenter::orderBy('order', 'asc')->get();
        return view('landing.data-center.index', compact('categorys'));
    }

    public function show($slug)
    {
        $category = CategoryDataCenter::where('slug', $slug)->first();
        if (!$category) {
            abort(404);
        }

        $datas = DataCenter::where('category_data_center_id', $category->id)->get();

        if($datas == null){
            abort(404);
        }
        return view('landing.data-center.category-show', compact('category','datas'));
    }

    public function download($slug)
    {
        $data = DataCenter::where('slug',$slug)->firstOrFail();

        return response()->download(public_path('storage/file/data-center/' . $data->file));
    }
}
