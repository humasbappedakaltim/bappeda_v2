<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Bidang;
use App\Models\Pejabat;
use App\Models\SubBidang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PejabatController extends Controller
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:pegawai-view|pegawai-manage'),
            new Middleware('permission:pegawai-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:pegawai-manage', ['only'=> ['create', 'store', 'edit', 'update']]),
        ];
    }

    public function index()
    {
        $bidangs = Bidang::all();
        $subBidangs = SubBidang::all();
        return view('dashboard.pejabat.index', compact('bidangs', 'subBidangs'));
    }

    public function data_table(Request $request)
    {
        $pejabat = Pejabat::orderBy('name','desc');

        if($request->bidang_id){
            $pejabat = $pejabat->whereHas('bidangs', function($query) use ($request) {
                $query->where('id', $request->bidang_id);
            });
        }

        if($request->sub_bidang_id){
            $pejabat = $pejabat->whereHas('sub_bidangs', function($query) use ($request) {
                $query->where('id', $request->sub_bidang_id);
            });
        }

        return DataTables::of($pejabat)
            ->addColumn('bidang', function ($row) {
                $bidang = $row->bidangs->pluck('name')->implode(', ');
                return $bidang;
                // return $row->bidang->name ?? '-';
            })
            ->addColumn('sub_bidang', function ($row) {
                $sub_bidang = $row->sub_bidangs->pluck('name')->implode(', ');
                return $sub_bidang;
                // return $row->sub_bidang->name ?? '-';
            })
            ->addColumn('jabatan', function ($row) {
                return $row->jabatan ?? '-';
            })
            ->addColumn('foto', function ($row) {
                return '<a href="' . asset('storage/pejabat/' . $row->foto) . '" target="_blank">' . $row->foto . '</a>';
            })
            ->addColumn('action', function ($row) {
            $actions = "";

            if (auth()->user()->can('pejabat-manage')) {
                $actions .= '<a href="' . route('dashboard.pejabat.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
            }
            if (auth()->user()->can('pejabat-manage')) {
                $actions .= '<button data-id="'.$row['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
            }

                return $actions;
        })
        ->rawColumns(['action','foto'])
        ->addIndexColumn()
        ->make(true);
    }

    public function create()
    {
        $bidangs = Bidang::all();
        $sub_bidangs = SubBidang::all();
        return view('dashboard.pejabat.create', compact('bidangs','sub_bidangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nip' => 'required|string|max:20|unique:pejabats,nip',
            'golongan' => 'required|string|max:50',
            'kelas_jabatan' => 'required|string|max:50',
            'jabatan' => 'required|string|max:100',
            'jabatan_lainnya' => 'nullable|string|max:100',
            'jabatan_lainnya2' => 'nullable|string|max:100',
            'bidang_id' => 'required|array|exists:bidangs,id',
            'status_jabatan' => 'required|string|max:50',
            'status_jabatan_penjabat' => 'required|string|max:50',
            'ketua_tim' => 'nullable|string|max:100',
            'status_kehadiran' => 'required|string|max:50',
            'status_aktif' => 'required|boolean',
            'urutan_jabatan' => 'nullable|integer',
        ]);

        $file_name = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $upload_path = public_path('storage/pejabat/');
            $file_name = 'Pejabat_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }


        $pejabat = Pejabat::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'golongan' => $request->golongan,
            'kelas_jabatan' => $request->kelas_jabatan,
            'jabatan' => $request->jabatan,
            'jabatan_lainnya' => $request->jabatan_lainnya,
            'jabatan_lainnya2' => $request->jabatan_lainnya2,
            'status_jabatan' => $request->status_jabatan,
            'status_jabatan_penjabat' => $request->status_jabatan_penjabat,
            'ketua_tim' => $request->ketua_tim,
            'urutan_jabatan' => $request->urutan_jabatan ?? NULL,
            'status_kehadiran' => $request->status_kehadiran,
            'status_aktif' => $request->status_aktif,
            'foto' => $file_name,
        ]);

        $pejabat->bidangs()->attach($request->bidang_id);
        $pejabat->sub_bidangs()->attach($request->sub_bidang_id);

        return redirect()->route('dashboard.pejabat.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function edit($slug)
    {
        $pejabat = Pejabat::where('slug', $slug)->first();
        $bidangs = Bidang::all();
        $sub_bidangs = SubBidang::all();

        return view('dashboard.pejabat.edit', compact('pejabat','bidangs', 'sub_bidangs'));
    }

    public function update(Request $request,$slug)
    {
        $pejabat = Pejabat::where('slug', $slug)->first();

        $request->validate([
            'name' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nip' => 'required|string|max:20|unique:pejabats,nip,' . $pejabat->id, // Ignore unique rule for the current Pejabat
            'golongan' => 'required|string|max:50',
            'kelas_jabatan' => 'required|string|max:50',
            'jabatan' => 'required|string|max:100',
            'jabatan_lainnya' => 'nullable|string|max:100',
            'jabatan_lainnya2' => 'nullable|string|max:100',
            'bidang_id' => 'required|array|exists:bidangs,id',
            'status_jabatan' => 'required|string|max:50',
            'status_jabatan_penjabat' => 'required|string|max:50',
            'ketua_tim' => 'nullable|string|max:100',
            'status_kehadiran' => 'required|string|max:50',
            'status_aktif' => 'required|boolean',
            'urutan_jabatan' => 'nullable|integer',
        ]);



        $file_name = $pejabat->foto;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $upload_path = public_path('storage/pejabat/');
            $file_name = 'Pejabat_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }

        $pejabat->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'golongan' => $request->golongan,
            'kelas_jabatan' => $request->kelas_jabatan,
            'jabatan' => $request->jabatan,
            'jabatan_lainnya' => $request->jabatan_lainnya,
            'jabatan_lainnya2' => $request->jabatan_lainnya2,
            'status_jabatan' => $request->status_jabatan,
            'status_jabatan_penjabat' => $request->status_jabatan_penjabat,
            'ketua_tim' => $request->ketua_tim,
            'urutan_jabatan' => $request->urutan_jabatan ?? NULL,
            'status_kehadiran' => $request->status_kehadiran,
            'status_aktif' => $request->status_aktif,
            'foto' => $file_name,
        ]);

        $pejabat->bidangs()->sync($request->bidang_id);
        $pejabat->sub_bidangs()->sync($request->sub_bidang_id);


        return redirect()->route('dashboard.pejabat.index')->with('success', 'Pegawai berhasil diperbarui');
    }

    public function destroy($slug)
    {
        $pejabat = Pejabat::where('slug', $slug)->first();

        $action = $pejabat->delete();

        if ($action) {
            return response()->json(['status' => 'success', 'message' => 'Berhasil Menghapus Pegawai']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Gagal Menghapus Pegawai']);
        }
    }
}
