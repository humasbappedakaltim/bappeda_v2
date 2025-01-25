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
                // return '<a href="' . route('dashboard.survei.show', $survei->id) . '" class="btn btn-primary btn-sm"><i class="bx bx-show"></i></a>';
                $actions .= '<a href="' . route('dashboard.survei.show', $survei->id) . '" class="btn btn-primary btn-sm"><i class="bx bx-show"></i></a>';
                $actions .= '<button data-id="'.$survei['id'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';

                return $actions;
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

    public function destroy($id)
    {
        $survei = CommunitySatisfactionSurveyRespondent::find($id);
        $action = $survei->delete();

        if ($action) {
            return response()->json([
                'status' => true,
                'message' => 'Data berhasil dihapus'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data gagal dihapus'
            ]);
        }

    }
}
