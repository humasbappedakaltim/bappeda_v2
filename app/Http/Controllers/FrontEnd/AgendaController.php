<?php

namespace App\Http\Controllers\FrontEnd;

use Carbon\Carbon;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        // $limit = 20;
        $lastSegment = $request->segment(2);
        $title = strtoupper($lastSegment);

        $carbon = Carbon::now()->locale('id');

        $agendas = Agenda::where('caption', 'like', '%' . $lastSegment . '%')
                        ->whereDate('schedule', '>=', Carbon::now())
                        ->orderBy('schedule', 'desc')->get();

        return view('landing.agenda.index', compact('agendas', 'title'));
    }

}