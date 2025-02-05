<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pio;
use App\Models\Penghargaan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;


class PioController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('role:superadmin'),
            // new Middleware('permission:pio-view|pio-manage'),
            new Middleware('permission:pio-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:pio-manage', ['only'=> ['edit', 'update','destroy']]),
        ];
    }

    public function index()
    {
        return view('dashboard.pio.index');
    }

    public function data_table()
    {
        $pios = Pio::orderBy('created_at', 'desc');

        return DataTables::of($pios)
            ->addColumn('action', function ($pio) {
                $actions = '';

                $actions .= '<a href="' . route('dashboard.pio.show', $pio->slug) . '" class="btn btn-sm btn-warning me-2 "><i class="bx bxs-show"></i></a>';
                $actions .= '<a href="' . route('dashboard.pio.edit', $pio->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                $actions .= '<button data-id="'.$pio['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';

                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('dashboard.pio.create');
    }


    public function show($slug)
    {
        $pio = Pio::where('slug', $slug)->first();
        return view('dashboard.pio.show', compact('pio'));
    }

    public function edit($slug)
    {
        $pio = Pio::where('slug', $slug)->first();
        return view('dashboard.pio.edit', compact('pio'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'status' => 'required|in:0,1',
        ]);

        $pio = Pio::where('slug', $slug)->first();
        $pio->update([
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.pio.index')->with('success','Berhasil Mengubah Permohonan');
    }

    public function destroy($slug)
    {
        $pio = Pio::where('slug', $slug)->first();
        $action = $pio->delete();

        if ($action) {
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil Menghapus Permohonan Online'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal Menghapus Permohonan Online'
            ]);
        }

    }
}
