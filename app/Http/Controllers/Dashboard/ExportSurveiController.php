<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\CommunitySatisfactionSurveyResponse;
use App\Models\CommunitySatisfactionSurveyRespondent;
use App\Exports\CommunitySatisfactionSurvey\ExportCommunitySatisfactionSurveys;

class ExportSurveiController extends Controller
{
    public function index()
    {
        return view('dashboard.survei.export.index');
    }

    public function export(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $start = Carbon::parse($request->start_date);
        $end = Carbon::parse($request->end_date)->endOfDay();

        $respondents = CommunitySatisfactionSurveyRespondent::whereBetween('created_at', [$start, $end])->get();
        $responses = CommunitySatisfactionSurveyResponse::whereBetween('created_at', [$start, $end])->get();

        return Excel::download(new ExportCommunitySatisfactionSurveys([
            'respondents' => $respondents,
            'responses' => $responses,
        ]), 'survey-export.xlsx');

    }
}
