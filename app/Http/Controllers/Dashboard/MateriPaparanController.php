<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Bidang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MateriPaparan;
use App\Models\KategoriPaparan;
use App\Models\CategoryDataCenter;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class MateriPaparanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public static function middleware(): array
    {
        return [
            new Middleware("permission:data-paparan-view",["only" => ["index","data_table","create","store","edit","update","destroy"]]),
            new Middleware("permission:data-paparan-manage",["only"=> ["create","store","edit","update","destroy"]]),
        ];
    }

    public function index()
    {
        $bidangs = Bidang::orderBy('name', 'desc')->get();
        return view("dashboard.materi_paparan.index", compact('bidangs'));
    }

    public function data_table(Request $request)
    {
        $dataMateri = MateriPaparan::with('bidangs')->orderBy('created_at', 'desc');

        if($request->category_bidangs){
            $dataMateri = $dataMateri->whereHas('bidangs', function($query) use ($request) {
                $query->where('id', $request->category_bidangs);
            });
        }

        return DataTables::of($dataMateri)
            ->addColumn('bidangs', function ($row) {
                    return $row->bidangs->pluck('name')->implode(', ') ?? '-';
                })
            ->addColumn('file', function ($row) {
                return '<a href="' . asset('storage/file/materi-paparan/' . $row->file) . '" target="_blank">' . $row->file . '</a>';
            })
            ->addColumn('action', function ($row) {
                $actions = '';

                if (auth()->user()->can('materi-paparan-manage')) {
                    $actions .= '<a href="' . route('dashboard.data.materi_paparan.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                    $actions .= '<button data-id="'.$row['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
                }

                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action','file'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bidangs = Bidang::orderBy('name', 'desc')->get();
        $categoryMateri = KategoriPaparan::orderBy('name', 'desc')->get();
        return view('dashboard.materi_paparan.create', compact('bidangs','categoryMateri'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string',
            'file' => 'required|mimes:pdf,doc,docx,ppt,pptx,zip,rar|max:2048',
            'cover' => 'mimes:jpg,jpeg,png|max:2048',
            'category_information' => 'required',
            'category_paparan_id' => 'required|exists:kategori_paparans,id',
            'category_bidang_id' => 'required|array|exists:bidangs,id',
            'status' => 'required',
        ]);

        $file_name = null;
        $file_name_cover = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $upload_path = public_path('storage/file/materi-paparan/');
            $file_name = 'MateriPaparan' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }

        if ($request->hasFile('file_cover')) {
            $file = $request->file('file_cover');
            $upload_path = public_path('storage/materi-paparan/cover/');
            $file_name_cover = 'Cover_MateriPaparan' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name_cover);
        }


        $materiPaparan = MateriPaparan::create([
            'name'=> $request->name,
            'file' => $file_name,
            'cover'=> $file_name_cover,
            'category_paparan_id' => $request->category_paparan_id,
            'category_information' => $request->category_information,
            'status' => $request->status,
        ]);

         $materiPaparan->bidangs()->attach($request->category_bidang_id);
         $materiPaparan->save();

         return redirect()->route('dashboard.data.materi_paparan.index')->with('success','Berhasil menambahkan Materi Paparan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $data = MateriPaparan::where('slug', $slug)->firstOrFail();
        $bidangs = Bidang::orderBy('name', 'desc')->get();
        $categoryMateri = KategoriPaparan::orderBy('name', 'desc')->get();

        return view('dashboard.materi_paparan.edit', compact('data','bidangs','categoryMateri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $materiPaparan = MateriPaparan::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name'=> 'required|string',
            'file' => 'nullable|mimes:pdf,doc,docx,ppt,pptx,zip,rar|max:2048',
            'cover' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'category_bidang_id' => 'required|array|exists:bidangs,id',
            'category_paparan_id' => 'required|exists:kategori_paparans,id',
            'category_information' => 'required',
            'status' => 'required',

        ]);

        $file_name = $materiPaparan->file;
        $file_name_cover = $materiPaparan->cover;

        if ($request->hasFile('file')) {
            // Optional: Hapus file lama
            if ($file_name && file_exists(public_path('storage/file/materi-paparan/' . $file_name))) {
                unlink(public_path('storage/file/materi-paparan/' . $file_name));
            }

            $file = $request->file('file');
            $upload_path = public_path('storage/file/materi-paparan/');
            $file_name = 'MateriPaparan' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($upload_path, $file_name);
        }

        if ($request->hasFile('cover')) {
            // Optional: Hapus cover lama
            if ($file_name_cover && file_exists(public_path('storage/materi-paparan/cover/' . $file_name_cover))) {
                unlink(public_path('storage/materi-paparan/cover/' . $file_name_cover));
            }

            $cover = $request->file('cover');
            $upload_path = public_path('storage/materi-paparan/cover/');
            $file_name_cover = 'Cover_MateriPaparan' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $cover->getClientOriginalExtension();
            $cover->move($upload_path, $file_name_cover);
        }

        // Update data
        $materiPaparan->update([
            'name' => $request->name,
            'file' => $file_name,
            'cover' => $file_name_cover,
            'category_paparan_id' => $request->category_paparan_id,
            'category_information' => $request->category_information,
            'status' => $request->status,
        ]);

        // Sinkronisasi relasi many-to-many
        $materiPaparan->bidangs()->sync($request->category_bidang_id);

        return redirect()->route('dashboard.data.materi_paparan.index')->with('success', 'Materi Paparan berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $materiPaparan = MateriPaparan::where('slug', $slug)->firstOrFail();

        $action = $materiPaparan->delete();

        if($action) {
            return response()->json(['status' => 'success','message'=> 'Berhasil Menghapus Materi Paparan']);
        } else {
            return response()->json(['status'=> 'error','message'=> 'Gagal Menghapus Materi Paparan']);
        }
    }
}
