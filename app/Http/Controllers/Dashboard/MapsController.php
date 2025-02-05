<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Maps;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class MapsController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('permission:maps-view|maps-manage'),
            new Middleware('permission:maps-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:maps-manage', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]),
        ];
    }

    public function index()
    {
        return view('dashboard.maps.index');
    }

    public function data_table(Request $request)
    {
        $maps = Maps::orderBy('name');

        return DataTables::of($maps)
            ->addColumn('file', function ($row) {
                return '<a href="' . asset('storage/maps/' . $row->file) . '" target="_blank">' . $row->file . '</a>';
            })
            ->addColumn('action', function ($row) {
                $actions = '';
                $actions .= '<a href="' . route('dashboard.maps.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                $actions .= '<button data-id="'.$row['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';

                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['file','action'])
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.maps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'file'=> 'required|mimes:png,jpg,jpeg,svg,gif,webp',
        ]);

        $file_name = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $upload_path = public_path('storage/maps/');
            $file_name = 'Peta_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }

        $maps = Maps::create([
            'name' => $request->name,
            'file' => $file_name,
        ]);

        return redirect()->route('dashboard.maps.index')->with('success','Berhasil Menambahkan Peta');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $map = Maps::where('slug', $slug)->first();
        return view('dashboard.maps.edit', compact('map'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|string',
            'file'=> 'mimes:png,jpg,jpeg,svg,gif,webp',
        ]);

        $map = Maps::where('slug', $slug)->first();

        $file_name = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $upload_path = public_path('storage/maps/');
            $file_name = 'Peta_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        } else {
            $file_name = $map->file;
        }

        $map->update([
            'name' => $request->name,
            'file' => $file_name
        ]);

        return redirect()->route('dashboard.maps.index')->with('success','Berhasil Mengubah Peta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $map = Maps::where('slug', $slug)->first();
        $action = $map->delete();

        if($action) {
            return response()->json(['status' => 'success','message'=> 'Berhasil Menghapus Peta']);
        } else {
            return response()->json(['status' => 'error','message'=> 'Gagal Menghapus Peta']);
        }
    }
}
