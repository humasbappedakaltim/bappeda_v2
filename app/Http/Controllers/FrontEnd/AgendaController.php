<?php

namespace App\Http\Controllers\FrontEnd;

use Carbon\Carbon;
use App\Models\Agenda;
use App\Models\Bidang;
use App\Models\Pejabat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $lastSegment = urldecode($request->segment(3));
        $title = strtoupper($lastSegment);
        $locale = session('locale', 'en');
        $carbon = Carbon::now()->locale($locale);

        $agendas = collect();
        $pejabats = collect();

        $lastSegmentCleaned = $this->cleanString($lastSegment);

        if ($lastSegmentCleaned === 'umum') {
            $pejabats = Pejabat::where('status_jabatan', 'pajabat')->get();
            $agendas = Agenda::where('dihadiri', 'like', '%' . $lastSegmentCleaned . '%')
                             ->whereDate('schedule', '=', Carbon::today())
                             ->get();
        } else {
            $bidang = Bidang::where('name', 'like', '%' . $lastSegmentCleaned . '%')->first();

            if (!$bidang) {
                abort(404);
            }

            $abbreviation = $this->getAbbreviation($bidang->name);

            $pejabats = Pejabat::whereHas('bidangs', function ($query) use ($bidang) {
                $query->where('name', 'like', '%' . $bidang->name . '%');
            })
            ->where('status_jabatan', 'pajabat')
            ->get();

            $agendas = Agenda::where('dihadiri', 'like', '%' . $abbreviation . '%')
                             ->whereDate('schedule', '=', Carbon::today())
                             ->get();
        }

        return view('landing.agenda.index', compact('agendas', 'title', 'pejabats'));
    }

    private function cleanString($input) {
        $output = preg_replace('/[[:^print:]\s]/', ' ', $input);
        $output = preg_replace('/\s+/', ' ', $output);
        return trim($output);
    }

    private function getAbbreviation($fullName) {
        preg_match('/\((.*?)\)/', $fullName, $matches);
        return $matches[1] ?? '';
    }
}
