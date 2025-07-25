<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Models\MateriPaparan;
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

        $materiPaparan = MateriPaparan::with('bidangs')
            ->whereHas('bidangs', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->when($search, function ($query) use ($search) {
                $query->whereRaw('LOWER(name) LIKE ?', ["%{$search}%"]);
            })
            ->get();

        if ($request->ajax()) {
            return view('landing.data-center.materi-paparan.show-item', compact('materiPaparan', 'slug'))->render();
        }

        return view('landing.data-center.materi-paparan.show', compact('materiPaparan', 'slug'));
    }


    public function download($slug)
    {
        $data = MateriPaparan::where('slug',$slug)->firstOrFail();

        return response()->download(public_path('storage/file/materi-paparan/' . $data->file));
    }
}
