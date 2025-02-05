<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Penghargaan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PenghargaanController extends Controller
{
    public static function middleware(): array
    {
        return [
            // new Middleware('permission:penghargaan-view|penghargaan-manage'),
            new Middleware('permission:penghargaan-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:penghargaan-manage', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]),
        ];
    }

    public function index()
    {
        return view('dashboard.penghargaan.index');
    }

    public function data_table()
    {
        $penghargaans = Penghargaan::orderBy('created_at', 'desc')->get();
        return DataTables::of($penghargaans)
            ->addColumn('foto', function ($row) {
                return '<a href="' . asset('storage/penghargaan/' . $row->foto) . '" target="_blank">' . $row->foto . '</a>';
            })
            ->addColumn('action', function ($penghargaan) {
                $actions = '';

                $actions .= '<a href="' . route('dashboard.penghargaan.show', $penghargaan->slug) . '" class="btn btn-sm btn-warning me-2 "><i class="bx bxs-show"></i></a>';
                $actions .= '<a href="' . route('dashboard.penghargaan.edit', $penghargaan->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                $actions .= '<button data-id="'.$penghargaan['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';

                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action','foto'])
            ->make(true);
    }

    public function create()
    {
        return view('dashboard.penghargaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png',
        ]);

        $file_name = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $upload_path = public_path('storage/penghargaan/');
            $file_name = 'Penghargaan_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }


        $penghargaan = Penghargaan::create([
            'title' => $request->title,
            'description' => $request->description,
            'foto' => $file_name
        ]);

        return redirect()->route('dashboard.penghargaan.index')->with('success','Berhasil Menambahkan Penghargaan');
    }

    public function show(Penghargaan $penghargaan)
    {
        return view('dashboard.penghargaan.show', compact('penghargaan'));
    }

    public function edit(Penghargaan $penghargaan)
    {
        return view('dashboard.penghargaan.edit', compact('penghargaan'));
    }

    public function update(Request $request, Penghargaan $penghargaan)
    {
        $request->validate([
            'title' => 'required',
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $file_name = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $upload_path = public_path('storage/penghargaan/');
            $file_name = 'Penghargaan_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        } else {
            $file_name = $penghargaan->foto;
        }

        $penghargaan->update([
            'title' => $request->title,
            'description' => $request->description,
            'foto' => $file_name
        ]);

        return redirect()->route('dashboard.penghargaan.index')->with('success','Berhasil Mengubah Penghargaan');
    }

    public function destroy(Penghargaan $penghargaan)
    {
        $action = $penghargaan->delete();

        if ($action) {
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil Menghapus Penghargaan'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal Menghapus Penghargaan'
            ]);
        }

    }
}
