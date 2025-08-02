<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\DataCenter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoryDataCenter;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class DataCenterController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('permission:data-center-view|data-center-manage'),
            new Middleware('permission:data-center-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:data-center-manage', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]),
        ];
    }

    public function index()
    {
        $categorys = CategoryDataCenter::orderBy('name', 'desc')->get();
        return view('dashboard.data-center.index', compact('categorys'));
    }

    public function data_table(Request $request)
    {
        $data_center = DataCenter::with('category')->orderBy('name', 'asc')->get();

        if($request->category_data_center_id){
            $data_center = $data_center->where('category_data_center_id', $request->category_data_center_id);
        }

        return DataTables::of($data_center)
            ->addColumn('category', function ($row) {
                return $row->category->name ?? '-';
            })
            ->addColumn('file', function ($row) {
                return '<a href="' . asset('storage/file/data-center/' . $row->file) . '" target="_blank">' . $row->file . '</a>';
            })
            ->addColumn('action', function ($row) {
                $actions = '';

                if (auth()->user()->can('data-center-manage')) {
                    $actions .= '<a href="' . route('dashboard.data.center.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                    $actions .= '<button data-id="'.$row['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
                }

                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action','file'])
            ->make(true);
    }

    public function create()
    {
        $categorys = CategoryDataCenter::orderBy('name', 'desc')->get();
        return view('dashboard.data-center.create', compact('categorys'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_data_center_id' => 'required',
            'file' => 'required',
        ]);

        $file_name = null;
        $file_name_cover = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $upload_path = public_path('storage/file/data-center/');
            $file_name = 'DataCenter_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }

        if ($request->hasFile('file_cover')) {
            $file = $request->file('file_cover');
            $upload_path = public_path('storage/data-center/cover/');
            $file_name_cover = 'Cover_DataCenter_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name_cover);
        }


        $data_center = DataCenter::create([
            'name' => $request->name,
            'order' => $request->order ?? 0,
            'file' => $file_name,
            'cover' => $file_name_cover,
            'category_information' => $request->category_information,
            'category_data_center_id' => $request->category_data_center_id,
            'penanggung_jawab' => $request->penanggung_jawab,
            'waktu_tempat_pembuatan' => $request->waktu_tempat_pembuatan,
            'bentuk_informasi' => $request->bentuk_informasi,
            'wajib_berkala' => $request->wajib_berkala,
            'wajib_serta_merta' => $request->wajib_serta_merta,
            'wajib_disediakan' => $request->wajib_disediakan,
            'di_kecualikan' => $request->di_kecualikan,
            'jangka_waktu' => $request->jangka_waktu,

        ]);

        return redirect()->route('dashboard.data.center.index')->with('success', 'Data Center berhasil ditambahkan');

    }

    public function edit($slug)
    {
        $dataCenter = DataCenter::with('category')->where('slug', $slug)->first();
        $categorys = CategoryDataCenter::orderBy('name', 'desc')->get();
        return view('dashboard.data-center.edit', compact('dataCenter', 'categorys'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required',
            'category_data_center_id' => 'required',
            // 'file' => 're',
        ]);

        $data_center = DataCenter::where('slug', $slug)->first();
        $file_name = null;
        $file_name_cover = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $upload_path = public_path('storage/file/data-center/');
            $file_name = 'DataCenter_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }else{
            $file_name = $data_center->file;
        }

        if ($request->hasFile('file_cover')) {
            $file = $request->file('file_cover');
            $upload_path = public_path('storage/data-center/cover/');
            $file_name_cover = 'Cover_DataCenter_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name_cover);
        }else{
            $file_name_cover = $data_center->cover;
        }



        $data_center->update([
            'name'=> $request->name,
            'order'=> $request->order ?? 0,
            'category_data_center_id'=> $request->category_data_center_id,
            'file' => $file_name,
            'category_information' => $request->category_information,
            'cover' => $file_name_cover,
            'penanggung_jawab' => $request->penanggung_jawab,
            'waktu_tempat_pembuatan' => $request->waktu_tempat_pembuatan,
            'bentuk_informasi' => $request->bentuk_informasi,
            'wajib_berkala' => $request->wajib_berkala,
            'wajib_serta_merta' => $request->wajib_serta_merta,
            'wajib_disediakan' => $request->wajib_disediakan,
            'di_kecualikan' => $request->di_kecualikan,
            'jangka_waktu' => $request->jangka_waktu,
        ]);

        return redirect()->route('dashboard.data.center.index')->with('success', 'Data Center berhasil diupdate');
    }

    public function destroy($slug)
    {
        $data_center = DataCenter::where('slug', $slug)->first();
        $action = $data_center->delete();

        if($action) {
            return response()->json(['status' => 'success','message'=> 'Berhasil Menghapus Data Center']);
        } else {
            return response()->json(['status' => 'error','message'=> 'Gagal Menghapus Data Center']);
        }
    }
}
