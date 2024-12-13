<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\AppBappeda;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class AppBappedaController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('role:superadmin'),
            new Middleware('permission:app-bappeda-view|app-bappeda-manage'),
            new Middleware('permission:app-bappeda-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:app-bappeda-manage', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]),
        ];
    }
    public function index()
    {
        return view('dashboard.app-bappeda.index');
    }

    public function data_table(Request $request)
    {
        $apps = AppBappeda::orderBy('orders');

        return DataTables::of($apps)
            ->addColumn('link' , function ($app) {
                return '<a href="' . $app->link . '" target="_blank">' . $app->link . '</a>';
            })
            ->addColumn('foto', function ($row) {
                return '<a href="' . asset('storage/img/app-bappeda/' . $row->foto) . '" target="_blank">' . $row->file . '</a>';
            })
            ->addColumn('action', function ($row) {
                $actions = '';
                $actions .= '<a href="' . route('dashboard.app-bappeda.show', $row->slug) . '" class="btn btn-sm btn-secondary me-2 "><i class="bx bxs-show"></i></a>';
                if (auth()->user()->can('app-bappeda-manage')) {
                    $actions .= '<a href="' . route('dashboard.app-bappeda.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                    $actions .= '<button data-id="'.$row['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
                }
                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['link','foto','action'])
            ->make(true);
    }

    public function create()
    {
        return view('dashboard.app-bappeda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'status' => 'required|in:1,0',
            'orders' => 'required|integer',
            'active' => 'required|boolean',

        ]);

        $file_name = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $upload_path = public_path('storage/img/app-bappeda/');
            $file_name = 'AppBappeda_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }

        $app_bappeda = AppBappeda::create([
            'name' => $request->name,
            'link' => $request->link,
            'foto' => $file_name,
            'description' => $request->description,
            'status' => $request->status,
            'orders' => $request->orders,
        ]);

        return redirect()->route('dashboard.app-bappeda.index')->with('success', 'Data Aplikasi Bappeda berhasil ditambahkan');
    }

    public function show($slug)
    {
        $appBappeda = AppBappeda::where('slug', $slug)->first();
        return view('dashboard.app-bappeda.show', compact('appBappeda'));

    }

    public function edit($slug)
    {
        $appBappeda = AppBappeda::where('slug', $slug)->first();
        return view('dashboard.app-bappeda.edit', compact('appBappeda'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'status' => 'required|in:1,0',
            'orders' => 'required|integer',
        ]);

        $app_bappeda = AppBappeda::where('slug', $slug)->first();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $upload_path = public_path('storage/img/app-bappeda/');
            $file_name = 'AppBappeda_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
            $app_bappeda->foto = $file_name;
        }

        $app_bappeda->name = $request->name;
        $app_bappeda->link = $request->link;
        $app_bappeda->description = $request->description;
        $app_bappeda->status = $request->status;
        $app_bappeda->orders = $request->orders;

        $app_bappeda->save();

        return redirect()->route('dashboard.app-bappeda.index')->with('success', 'Data Aplikasi Bappeda berhasil diperbarui');
    }

    public function destroy($slug)
    {
        $app_bappeda = AppBappeda::where('slug', $slug)->first();
        $action = $app_bappeda->delete();

        if ($action) {
            return response()->json(['status' => 'success', 'message' => 'Berhasil Menghapus Data Aplikasi Bappeda']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Gagal Menghapus Data Aplikasi Bappeda']);
        }
    }
}
