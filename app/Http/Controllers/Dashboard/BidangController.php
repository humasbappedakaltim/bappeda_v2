<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class BidangController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('permission:bidang-view|bidang-manage'),
            new Middleware('permission:bidang-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:bidang-manage', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]),
        ];
    }

    public function index()
    {
        return view('dashboard.bidang.index');
    }

    public function data_table()
    {
        $category = Bidang::orderBy('name','desc');

        return DataTables::of($category)
            ->addColumn('action', function ($row) {
            $actions = "";

            if (auth()->user()->can('bidang-manage')) {
                $actions .= '<a href="' . route('dashboard.bidang.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
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
        return view('dashboard.bidang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $bidang = Bidang::create([
            'name' => $request->name,
        ]);

        return redirect()->route('dashboard.bidang.index')->with('success', 'Bidang berhasil ditambahkan');
    }

    public function edit(Bidang $bidang)
    {
        return view('dashboard.bidang.edit', compact('bidang'));
    }

    public function update(Request $request, Bidang $bidang)
    {
        $request->validate([
            'name' => 'required|string|unique:bidangs,name,'.$bidang->id.',id',
        ]);

        $bidang->update([
            'name' => $request->name,
        ]);

        return redirect()->route('dashboard.bidang.index')->with('success', 'Bidang berhasil diperbarui');
    }

    public function destroy(Bidang $bidang)
    {
        $action = $bidang->delete();

        if ($action) {
            return response()->json(['status' => 'success', 'message' => 'Berhasil Menghapus Bidang']); // Return JSON reponse
        } else {
            return response()->json(['status' => 'error', 'message' => 'Gagal Menghapus Bidang']);
        }
    }
}
