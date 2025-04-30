<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\RpjmdSurvey\RpjmdSurveyExport;
use App\Http\Controllers\Controller;
use App\Models\RpjmdSurveyHopeResponse;
use App\Models\RpjmdSurveyIssueResponse;
use App\Models\RpjmdSurveyRespondent;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class SurveiRPJMDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.survei-rpjmd.index');
    }

    public function data_table()
    {
        $surveirpjmds = RpjmdSurveyRespondent::orderBy('id', 'desc');
        return DataTables::of($surveirpjmds)
            ->addColumn('action', function ($surveirpjmd) {
                $actions = '<a href="' . route('dashboard.survei-rpjmd.show', $surveirpjmd->id) . '" class="btn btn-primary btn-sm"><i class="bx bx-show"></i></a>';
                $actions .= '<button data-id="'.$surveirpjmd['id'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';

                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $surveirpjmd = RpjmdSurveyRespondent::find($id);
        return view('dashboard.survei-rpjmd.show', compact('surveirpjmd'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            RpjmdSurveyHopeResponse::where('rpjmd_survey_respondent_id', $id)->delete();
            $surveirpjmdissue = RpjmdSurveyIssueResponse::where('rpjmd_survey_respondent_id', $id)->get();
            foreach ($surveirpjmdissue as $sri) {
                $sri->delete();
            }
            RpjmdSurveyRespondent::where('id', $id)->delete();

            return response()->json(['status' => 'success','message'=> 'Berhasil Menghapus Survei']);
        } catch(Exception $e) {
            return response()->json(['status' => 'error','message'=> 'Gagal Menghapus Survei']);
        }
    }

    public function downloadSurveiRpjmd(){
            return Excel::download(new RpjmdSurveyExport, "hasil_survei_rpjmd_per_". Carbon::now()->format('d_M_Y_H_i_s') .".xlsx");
    }
}
