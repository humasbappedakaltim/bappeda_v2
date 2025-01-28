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
        $lastSegment = $request->segment(3);
        $title = strtoupper($lastSegment);

        $carbon = Carbon::now()->locale('id');

        $agendas = Agenda::where('dihadiri', 'like', '%' . $lastSegment . '%')
                        ->whereDate('schedule', '=', Carbon::today())
                        ->get();

        // $bidang = Bidang::where('name', 'Kepala')->first();
        // dd($lastSegment);
        $pejabats = Pejabat::whereHas('bidangs', function ($bidang) use ($lastSegment) {
            $bidang->where('name', 'like', '%' . $lastSegment . '%');
        })->where('status_jabatan', 'pejabat')->get();

        return view('landing.agenda.index', compact('agendas', 'title', 'pejabats'));
    }

}
