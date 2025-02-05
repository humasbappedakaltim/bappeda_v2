<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Bidang;
use App\Models\SubBidang;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class SubBidangController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('permission:sub-bidang-view|sub-bidang-manage'),
            new Middleware('permission:sub-bidang-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:sub-bidang-manage', ['only'=> ['create', 'store', 'edit', 'update']]),
        ];
    }

    public function index()
    {
        return view('dashboard.sub-bidang.index');
    }

    public function data_table()
    {
        $category = SubBidang::orderBy('name','desc');

        return DataTables::of($category)
            ->addColumn('bidang', function ($row) {
                return $row->bidang->name ?? '-';
            })
            ->addColumn('action', function ($row) {
            $actions = "";

            if (auth()->user()->can('sub-bidang-manage')) {
                $actions .= '<a href="' . route('dashboard.sub.bidang.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
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
        $bidangs = Bidang::all();
        return view('dashboard.sub-bidang.create', compact('bidangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:sub_bidangs,name',
            'bidang_id' => 'required|exists:bidangs,id',
        ]);

        $bidang = SubBidang::create([
            'name' => $request->name,
            'bidang_id' => $request->bidang_id,
        ]);

        return redirect()->route('dashboard.sub.bidang.index')->with('success', 'Sub Bidang berhasil ditambahkan');
    }

    public function edit(SubBidang $subBidang)
    {
        $bidangs = Bidang::all();
        return view('dashboard.sub-bidang.edit', compact('subBidang','bidangs'));
    }

    public function update(Request $request, SubBidang $subBidang)
    {
        $request->validate([
            'name' => 'required|string|unique:sub_bidangs,name,'.$subBidang->id.',id',
            'bidang_id' => 'required|exists:bidangs,id',
        ]);

        $subBidang->update([
            'name' => $request->name,
            'bidang_id' => $request->bidang_id,
        ]);

        return redirect()->route('dashboard.sub.bidang.index')->with('success', 'Sub Bidang berhasil diperbarui');
    }

    public function destroy(SubBidang $subBidang)
    {
        $action = $subBidang->delete();

        if ($action) {
            return response()->json(['status' => 'success', 'message' => 'Berhasil Menghapus Sub Bidang']); // Return JSON reponse
        } else {
            return response()->json(['status' => 'error', 'message' => 'Gagal Menghapus Sub Bidang']);
        }
    }
}

