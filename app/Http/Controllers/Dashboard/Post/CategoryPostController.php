<?php

namespace App\Http\Controllers\Dashboard\Post;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class CategoryPostController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('role:superadmin'),
            new Middleware('permission:post-category-view|post-category-manage'),
            new Middleware('permission:post-category-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:post-category-manage', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]),
        ];
    }


    public function index()
    {
        return view('dashboard.post.category.index');
    }

    public function data_table()
    {
        $categories = PostCategory::all();
        return DataTables::of($categories)
            ->addColumn('action', function ($categories) {
                $actions = '';

                $actions .= '<a href="' . route('dashboard.post.category.edit', $categories->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                $actions .= '<button data-id="'.$categories['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('dashboard.post.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'status' => 'required|boolean',
        ]);

        $category = PostCategory::create([
            'name'  => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.post.category.index')->with('success','Berhasil Menambahkan Kategori Postingan');
    }

    public function edit($slug)
    {
        $category = PostCategory::where('slug', $slug)->first();
        return view('dashboard.post.category.edit',compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name'  => 'required|string',
            'status' => 'required|boolean',
        ]);

        $category = PostCategory::where('slug', $slug)->first();

        $category->update([
            'name'  => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.post.category.index')->with('success','Berhasil Mengubah Kategori Postingan');
    }

    public function destroy($slug)
    {
        $category = PostCategory::where('slug', $slug)->first();
        $action = $category->delete();

        if ($action) {
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil Menghapus Kategori Postingan'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal Menghapus Kategori Postingan'
            ]);
        }
    }
}
