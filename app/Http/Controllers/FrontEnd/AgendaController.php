<?php

namespace App\Http\Controllers\FrontEnd;

use Carbon\Carbon;
use App\Models\Agenda;
use App\Models\Bidang;
use App\Models\Pejabat;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $lastSegment = $request->segment(2);
        $title = strtoupper($lastSegment);

        $carbon = Carbon::now()->locale('id');

        $agendas = Agenda::where('dihadiri', 'like', '%' . $lastSegment . '%')
                        ->whereDate('schedule', '=', Carbon::today())
                        ->orderBy('schedule', 'desc')->get();

        // $bidang = Bidang::where('name', 'Kepala')->first();

        $pejabats = Pejabat::where('order', )->get();

        return view('landing.agenda.index', compact('agendas', 'title', 'pejabats'));
    }

}
