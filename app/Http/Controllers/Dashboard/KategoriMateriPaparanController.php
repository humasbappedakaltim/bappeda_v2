<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\KategoriPaparan;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class KategoriMateriPaparanController extends Controller
{
    public function index()
    {
        return view('dashboard.kategori-materi-paparan.index');
    }

    public function data_table(Request $request)
    {
        $category = KategoriPaparan::orderBy('order', 'asc');

        return DataTables::of($category)
            ->addColumn('action', function ($row) {
                $actions = '';
                $actions .= '<a href="' . route('dashboard.category.materi_paparan.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                $actions .= '<button data-id="'.$row['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';

                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('dashboard.kategori-materi-paparan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'order' => 'required|integer',
        ]);

        $kategori = KategoriPaparan::create([
            'name' => $request->name,
            'order' => $request->order,
        ]);

    return redirect()->route('dashboard.category.materi_paparan.index')->with('success', 'Kategori Materi Paparan Berhasil Ditambahkan');
    }

    public function edit($slug)
    {
        $category = KategoriPaparan::where('slug', $slug)->first();
        return view('dashboard.kategori-materi-paparan.edit', compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|string',
            'order' => 'required|integer',
        ]);

        $category = KategoriPaparan::where('slug', $slug)->first();
        $category->update([
            'name' => $request->name,
            'order' => $request->order,
        ]);

        return redirect()->route('dashboard.category.materi_paparan.index')->with('success', 'Kategori Materi Paparan Berhasil Di Update');
    }

     public function destroy($slug)
    {
        $category = KategoriPaparan::where('slug', $slug)->first();
        $action = $category->delete();

        if($action) {
            return response()->json(['status' => 'success','message'=> 'Berhasil Menghapus Kategori Data Center']);
        } else {
            return response()->json(['status' => 'error','message'=> 'Gagal Menghapus Kategori Data Center']);
        }
    }
}
