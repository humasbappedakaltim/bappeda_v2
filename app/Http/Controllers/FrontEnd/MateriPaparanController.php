<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Models\MateriPaparan;
use App\Models\CategoryDataCenter;
use App\Http\Controllers\Controller;

class MateriPaparanController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'nullable|string',
        ]);

        $search = strtolower($request->search);

        $bidangs = Bidang::with('materiPaparan')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->whereRaw('LOWER(name) LIKE ?', ["%{$search}%"])
                        ->orWhereHas('materiPaparan', function ($q) use ($search) {
                            $q->whereRaw('LOWER(name) LIKE ?', ["%{$search}%"]);
                        });
                });
            })
            ->orderBy('created_at', 'desc')
            ->get();

        if ($request->ajax()) {
            return view('landing.data-center.materi-paparan.list-item', compact('bidangs'))->render();
        }

        return view('landing.data-center.materi-paparan.index', compact('bidangs'));
    }

    public function show(Request $request, $slug)
    {
        $request->validate([
            'search' => 'nullable|string',
        ]);

        $search = strtolower($request->search);

        // Ambil kategori berdasarkan bidang
        $categoryDataCenter = CategoryDataCenter::orderBy('order', 'asc')->get();

        // Jika AJAX hanya butuh kategori
        if ($request->ajax()) {
            return view('landing.data-center.materi-paparan.category_item', compact('categoryDataCenter', 'slug'))->render();
        }

        return view('landing.data-center.materi-paparan.category', compact('categoryDataCenter', 'slug'));
    }

    public function category(Request $request, $bidangSlug, $categorySlug)
    {
        $request->validate([
            'search' => 'nullable|string',
        ]);

        $search = strtolower($request->search);
        $bidang = Bidang::where('slug', $bidangSlug)->firstOrFail();

        $categoryDataCenter = CategoryDataCenter::where('slug', $categorySlug)->firstOrFail();

        $materiPaparan = MateriPaparan::with('bidangs')
            ->where('category_data_center_id', $categoryDataCenter->id)
            ->whereHas('bidangs', fn($query) => $query->where('slug', $bidangSlug))
            ->when($search, fn($query) => $query->whereRaw('LOWER(name) LIKE ?', ["%{$search}%"]))
            ->get();

        if ($request->ajax()) {
            return view('landing.data-center.materi-paparan.show-item', compact('materiPaparan', 'bidang','bidangSlug', 'categorySlug','categoryDataCenter'))->render();
        }

        return view('landing.data-center.materi-paparan.show', compact('materiPaparan','bidang','bidangSlug', 'categorySlug','categoryDataCenter'));
    }



    public function download($slug)
    {
        $data = MateriPaparan::where('slug',$slug)->firstOrFail();

        return response()->download(public_path('storage/file/materi-paparan/' . $data->file));
    }
}
