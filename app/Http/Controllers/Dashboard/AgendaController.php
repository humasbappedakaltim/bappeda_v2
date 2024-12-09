<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Agenda;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Dashboard\AgendaRequest;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;


class AgendaController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            // new Middleware('role:superadmin'),
            new Middleware('permission:agenda-view|agenda-manage'),
            new Middleware('permission:agenda-view', ['only' => ['index', 'data_table']]),
            new Middleware('permission:agenda-manage', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]),
        ];
    }

    public function index()
    {
        return view('dashboard.agenda.index');
    }

    public function data_table(Request $request)
    {
        $agendas = Agenda::orderBy('schedule','desc');

        return DataTables::of($agendas)
            ->addColumn('action', function ($row) {
                $actions = '';

                if (auth()->user()->can('agenda-view')) {
                    $actions .= '<a href="' . route('dashboard.agenda.show', $row->id) . '" class="btn btn-sm btn-warning me-2 "><i class="bx bxs-show"></i></a>';
                }
                if (auth()->user()->can('agenda-manage')) {
                    $actions .= '<a href="' . route('dashboard.agenda.edit', $row->id) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                    $actions .= '<button data-id="'.$row['id'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
                }

                return $actions;
            })
            ->addColumn('views', function ($row) {
                if($row->views == null){
                    return '0';
                }else {
                    return $row->views;
                }
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('dashboard.agenda.create');
    }

    public function store(AgendaRequest $request)
    {

        $picture_name = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $upload_path = public_path('storage/agenda/');
            $picture_name = 'Agenda_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $picture_name);
        }

        $agenda = Agenda::create([
            'schedule' => $request->schedule,
            'caption' => $request->caption,
            'description' => $request->description,
            'location' => $request->location,
            'views' => $request->views,
            'image' => $picture_name,
            'times' => $request->times,
            'dihadiri' => $request->dihadiri,
        ]);

        return redirect()->route('dashboard.agenda.index')->with('success','Berhasil Menambahkan Agenda Baru');
    }

    public function show(Agenda $agenda)
    {
        return view('dashboard.agenda.show', compact('agenda'));
    }

    public function edit(Agenda $agenda)
    {
        return view('dashboard.agenda.edit', compact('agenda'));
    }

    public function update(AgendaRequest $request, Agenda $agenda)
    {

        $picture_name = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $upload_path = public_path('storage/agenda/');
            $picture_name = 'Agenda_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $picture_name);
        } else {
            $picture_name = $agenda->image;
        }
        $agenda->update([
            'schedule' => $request->schedule,
            'caption' => $request->caption,
            'description' => $request->description,
            'location' => $request->location,
            'views' => $request->views,
            'image' => $picture_name,
            'times' => $request->times,
            'dihadiri' => $request->dihadiri,
        ]);

        return redirect()->route('dashboard.agenda.index')->with('success','Berhasil Mengubah Agenda');
    }

    public function destroy(Agenda $agenda)
    {
        $action = $agenda->delete();
        if($action) {
            return response()->json(['status' => 'success','message'=> 'Berhasil Menghapus Agenda']);
        } else {
            return response()->json(['status' => 'error','message'=> 'Gagal Menghapus Agenda']);
        }
    }
}
