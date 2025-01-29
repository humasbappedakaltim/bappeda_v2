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
        $locale = session('locale', 'en');
        $carbon = Carbon::now()->locale($locale);

        $agendas = collect();


        if ($lastSegment === 'umum') {
            $pejabats = Pejabat::where('status_jabatan', 'pajabat')->get();

            $agendas = Agenda::where('dihadiri', 'like', '%' . $lastSegment . '%')
                            ->whereDate('schedule', '=', Carbon::today())
                            ->get();
        } else {
            $pejabats = Pejabat::whereHas('bidangs', function ($query) use ($lastSegment) {
                $query->where('name', 'like', '%' . $lastSegment . '%');
            })
            ->where('status_jabatan', 'pajabat')
            ->get();

            $bidang = Bidang::where('name', 'like', '%' . $lastSegment . '%')->first();

            if (!$bidang) {
                abort(404);
            }

            $agendas = Agenda::where('dihadiri', 'like', '%' . $bidang->name . '%')
                            ->whereDate('schedule', '=', Carbon::today())
                            ->get();
        }

        return view('landing.agenda.index', compact('agendas', 'title', 'pejabats'));
    }



}
