<?php

namespace App\Http\Controllers\Dashboard\Post;

use App\Models\User;
use App\Models\PostNew;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PostNewsController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('role:superadmin'),
            // new Middleware('permission:post-news-view|post-news-manage'),
            new Middleware('permission:post-news-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:post-news-manage', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]),
        ];
    }

    public function index()
    {
        $categorys = PostCategory::orderBy('created_at', 'desc')->where('status', '!=' , 0)->get();
        return view('dashboard.post.index', compact('categorys'));
    }

    public function data_table(Request $request)
    {

        $posts = PostNew::with('category', 'user')->orderBy('created_at', 'desc');

        if ($request->category_id) {
            $posts = $posts->where('category_id', $request->category_id);
        }

           // Filter by status
            if ($request->status !== null && $request->status !== '') {
                $posts = $posts->where('status', $request->status);
            }




        return DataTables::of($posts)
            ->addColumn('category', function ($row) {
                return $row->category->name;
            })
            ->addColumn('user', function ($row) {
                return $row->user->name ?? '';
            })
            ->addColumn('date', function ($row) {
                return date('d-M-Y', strtotime($row->created_at));
            })
            ->addColumn('action', function ($row) {
                $actions = '';
                $actions .= '<a href="' . route('dashboard.post.news.show', $row->slug) . '" class="btn btn-sm btn-secondary me-2 "><i class="bx bxs-show"></i></a>';
                $actions .= '<a href="' . route('dashboard.post.news.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                $actions .= '<button data-id="'.$row['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $categorys = PostCategory::orderBy('name')->where('status', '!=' , 0)->get();
        $users = User::orderBy('name')->get();
        return view('dashboard.post.create', compact('categorys','users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required',
            'category_id' => 'required',
            'keywords' => 'required|string|max:255',
            'tags' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'required',
        ]);

        $file_name = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $upload_path = public_path('storage/post/');
            $file_name = 'Post_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }

        $saved_files = [];
        if ($request->hasFile('extra_photo')) {
            $files = $request->file('extra_photo');
            $upload_path = public_path('storage/post/extra/');

            foreach ($files as $file) {
                $file_name_extra = 'Post_Extra_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($upload_path, $file_name_extra);
                $saved_files[] = $file_name_extra;
            }
        }


        if (!$saved_files) {
            $saved_files = [];
        }

        $post = PostNew::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'keywords' => $request->keywords,
            'tags' => $request->tags,
            'image' => $file_name,
            'status' => $request->status,
            'extra_photo' => implode(',', $saved_files),
        ]);

        return redirect()->route('dashboard.post.news.index')->with('success', 'Postingan Berhasil Dibuat');
    }


    public function show($slug)
    {
        $post = PostNew::where('slug', $slug)->first();
        return view('dashboard.post.show', compact('post'));
    }

    public function edit($slug)
    {
        $post = PostNew::where('slug', $slug)->first();
        $categorys = PostCategory::orderBy('name')->where('status', '!=' , 0)->get();
        $users = User::orderBy('name')->get();
        return view('dashboard.post.edit', compact('post', 'categorys', 'users'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required',
            'category_id' => 'required',
            'keywords' => 'required|string|max:255',
            'tags' => 'required|string|max:255',
            'status' => 'required',
        ]);

        $post = PostNew::where('slug', $slug)->first();

        if (!$post) {
            abort(404, 'Berita tidak ditemukan');
        }

        // Handle image file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $upload_path = public_path('storage/post/');
            $file_name = 'Post_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        } else {
            $file_name = $post->image;
        }

        // Handle extra photo uploads
        $saved_files = [];
        if ($request->hasFile('extra_photo')) {
            $files = $request->file('extra_photo');
            $upload_path = public_path('storage/post/extra/');

            foreach ($files as $file) {
                $file_name_extra = 'Post_Extra_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($upload_path, $file_name_extra);
                $saved_files[] = $file_name_extra;
            }

            $saved_files = implode(',', $saved_files);

        } else {

            $saved_files = $post->extra_photo;
        }

        // Update the record
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'keywords' => $request->keywords,
            'tags' => $request->tags,
            'image' => $file_name,
            'status' => $request->status,
            'extra_photo' => $saved_files,
        ]);

        return redirect()->route('dashboard.post.news.index')->with('success', 'Postingan Berhasil Diperbarui');
    }


    public function destroy($slug)
    {
        $post = PostNew::where('slug', $slug)->first();
        $action = $post->delete();

        if ($action) {
            return response()->json(['status' => 'success', 'message' => 'Postingan Berhasil Dihapus']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Postingan Gagal Dihapus']);
        }
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('gambar_upload')) {
            $file = $request->file('gambar_upload');
            $ext = $file->getClientOriginalExtension();

            $upload_path = public_path('storage/post/');
            $filename = 'Post_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $ext;

            $file->move($upload_path, $filename);

            // Berikan URL file yang dapat digunakan
            $fileUrl = url('storage/post/' . $filename);

            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil Mengupload Gambar',
                'url' => $fileUrl,
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Gagal mengunggah gambar',
        ], 400);
    }

}
