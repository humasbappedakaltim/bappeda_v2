<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\CategoryDataCenter;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class CategoryDataCenterController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('permission:category-data-center-view|category-data-center-manage'),
            new Middleware('permission:category-data-center-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:category-data-center-manage', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]),
        ];
    }

    public function index()
    {
        return view('dashboard.category-data-center.index');
    }

    public function data_table()
    {
        $category = CategoryDataCenter::orderBy('order','desc');

        return DataTables::of($category)
            ->addColumn('action', function ($row) {
            $actions = "";

            if (auth()->user()->can('category-data-center-manage')) {
                $actions .= '<a href="' . route('dashboard.category.data.center.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                $actions .= '<button data-id="'.$row['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
            }

                return $actions;
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }

    public function create()
    {
        return view('dashboard.category-data-center.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'order' => 'required|integer',
        ]);

        $category = CategoryDataCenter::create([
            'name'  => $request->name,
            'order' => $request->order,
        ]);

        return redirect()->route('dashboard.category.data.center.index')->with('success', 'Kategori Data Center Berhasil Di Tambahkan');
    }

    public function edit($slug)
    {
        $category = CategoryDataCenter::where('slug', $slug)->first();
        return view('dashboard.category-data-center.edit', compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name'  => 'required|string',
            'order' => 'required|integer',
        ]);

        $category = CategoryDataCenter::where('slug', $slug)->first();
        $category->update([
            'name'  => $request->name,
            'order' => $request->order,
        ]);

        return redirect()->route('dashboard.category.data.center.index')->with('success', 'Kategori Data Center Berhasil Di Update');
    }

    public function destroy($slug)
    {
        $category = CategoryDataCenter::where('slug', $slug)->first();
        $action = $category->delete();

        if($action) {
            return response()->json(['status' => 'success','message'=> 'Berhasil Menghapus Kategori Data Center']);
        } else {
            return response()->json(['status' => 'error','message'=> 'Gagal Menghapus Kategori Data Center']);
        }
    }
}
