<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Models\CommunitySatisfactionSurveyRespondent;

class SurveiController extends Controller
{
    public function index()
    {
        return view('dashboard.survei.index');
    }

    public function data_table()
    {
        $surveis = CommunitySatisfactionSurveyRespondent::orderBy('id', 'desc');
        return DataTables::of($surveis)
            ->addColumn('action', function ($survei) {
                return '<a href="' . route('dashboard.survei.show', $survei->id) . '" class="btn btn-primary btn-sm"><i class="bx bx-show"></i></a>';
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function show($id)
    {
        $survei = CommunitySatisfactionSurveyRespondent::find($id);
        return view('dashboard.survei.show', compact('survei'));
    }
}
