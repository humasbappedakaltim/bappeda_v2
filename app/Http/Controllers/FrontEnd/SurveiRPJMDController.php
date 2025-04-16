<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Visitor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\CommunitySatisfactionSurveyResponse;
use App\Models\CommunitySatisfactionSurveyRespondent;
use Exception;

class SurveiRPJMDController extends Controller
{
    private $ageRangeData = [
        '20-29 Tahun', '30-39 Tahun', '40-49 Tahun', '50 Tahun ke Atas',
    ];
    private $mainJobData = [
        'PNS', 'TNI/POLRI', 'Swasta', 'Wiraswasta', 'Mahasiswa', 'Lainnya'
    ];
    private $notInMainJobData = [
        'Pegawai Negeri Sipil', 'TNI', 'Tentara Negara Indonesia', 'POLRI', 'Polisi Republik Indonesia', 'Polisi',
    ];
    // private $requirementsAnswerData = [
    //     'Sangat Sesuai', 'Sesuai', 'Kurang Sesuai', 'Tidak Sesuai', 'Sangat Tidak Sesuai',
    // ];
    // private $competencyAnswerData = [
    //     'Sangat Kompeten', 'Kompeten', 'Kurang Kompeten', 'Sangat Tidak Kompeten', 'Tidak Kompeten',
    // ];
    // private $convenienceAnswerData = [
    //     'Sangat Mudah', 'Mudah', 'Cukup Mudah', 'Tidak Mudah', 'Sangat Tidak Mudah',
    // ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $visitors = new Visitors();
        // $data['visitors']['yearly'] = $visitors->whereYear('created_at', '=', date('Y'))->count();
        // $data['visitors']['monthly'] = $visitors->whereMonth('created_at', '=', date('m'))->count();
        // $data['title'] = 'Survei Kepuasan Masyarakat (SKM)';

        $data['ageRangeData'] = $this->ageRangeData;
        $data['mainJobData'] = $this->mainJobData;
        // $data['requirementAnswerData'] = $this->requirementsAnswerData;
        // $data['competencyAnswerData'] = $this->competencyAnswerData;
        // $data['convenienceAnswerData'] = $this->convenienceAnswerData;
        return view('landing.survei-rpjmd.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        try {
            $mainJob = $request->mainJob;
            $anotherMainJob = $request->anotherMainJob;

            $validator = [
                'name' => 'required|string|min:2|max:256',
                'email' => 'required|string|email:dns',
                'sex' => 'required|string|in:Laki-laki,Perempuan',
                'age' => 'required',
                'phoneNumber' => 'required|numeric|digits_between:10,20',
                'address' => 'required|string|min:2|max:5012',
                'mainJob' => 'required|string',
                // 'requirement' => 'required|string',
                // 'competency' => 'required|string',
                // 'convenience' => 'required|string',
                // 'advice' => 'required|string|min:2|max:5012',
            ];

            if($mainJob){
                $anotherMainJob = Str::lower($anotherMainJob);
                $validator['anotherMainJob'] = [function ($attribute, $value, $fail) {
                    $lowercaseValue = strtolower($value);
                    $mainJobDataLowercase = array_map('strtolower', $this->mainJobData);
                    $notInMainJobDataLowerCase = array_map('strtolower', $this->notInMainJobData);

                    if (in_array($lowercaseValue, $notInMainJobDataLowerCase)) {
                        $fail('Masukan yang Dimasukkan Telah Ada di Pilihan');
                    }

                    if (in_array($lowercaseValue, $mainJobDataLowercase)) {
                        $fail('Masukan yang Dimasukkan Telah Ada di Pilihan');
                    }
                }];

                if($mainJob == "Lainnya" && empty($anotherMainJob)){
                    $validator['anotherMainJob'] = 'required';
                }
            }

            $validatedData = Validator::make($request->all(), $validator, [
                'name.required' => 'Mohon Isi Nama',
                'name.min' => 'Mohon Isi Nama Minimal 2 Karakter',
                'name.max' => 'Mohon Isi Nama Minimal 5012 Karakter',
                'emwail.required' => 'Mohon Isi Email',
                'email.email' => 'Mohon Isi Email Sesuai Domain (Contoh: @gmail.com)',
                'sex.required' => 'Mohon Pilih Jenis Kelamin',
                'age.required' => 'Mohon Pilih Usia',
                'phoneNumber.required' => 'Mohon Isi Nomor Handphone',
                'phoneNumber.digits_between' => 'Mohon Nomor Handphone Isi Dalam Rentang 10-20 Digit',
                'phoneNumber.number' => 'Mohon Isi Nomor Handphone Dalam Bentuk Angka',
                'address.required' => 'Mohon Isi Alamat',
                'address.min' => 'Mohon Isi Minimal 2 Karakter',
                'address.max' => 'Mohon Isi Minimal 5012 Karakter',
                'mainJob.required' => 'Mohon Pilih Pekerjaan Utama',
                'anotherMainJob.required' => 'Mohon Isi Pekerjaan Lainnya',
                // 'requirement.required' => 'Mohon Pilih Pilihan pada Pertanyaan 1',
                // 'competency.required' => 'Mohon Pilih Pilihan pada Pertanyaan 2',
                // 'convenience.required' => 'Mohon Pilih Pilihan pada Pertanyaan 3',
                // 'advice.min' => 'Mohon Isi Saran Minimal 2 Karakter',
                // 'advice.max' => 'Mohon Isi Saran Minimal 5012 Karakter',
             ]);
            if ($validatedData->fails()) {
                $errorsString = implode('<br>', $validatedData->errors()->all());
                return redirect()->route('landing.survei')->withInput()->withErrors($validatedData)->with('errorsString', $errorsString);
            }

            DB::transaction(function() use($request, $mainJob, $anotherMainJob) {
                $communitySatisfactionSurveyRespondentData = [
                    'customs_identification_number' => $request->customs_identification_number,
                    'name' => $request->name,
                    'email' => $request->email,
                    'sex' => $request->sex,
                    'age' => $request->age,
                    'phone_number' => $request->phoneNumber,
                    'address' => $request->address,
                ];

                if($mainJob == "Lainnya"){
                    $communitySatisfactionSurveyRespondentData['main_job'] = $anotherMainJob;
                }else{
                    $communitySatisfactionSurveyRespondentData['main_job'] = $mainJob;
                }

                $communitySatisfactionSurveyRespondent = CommunitySatisfactionSurveyRespondent::create($communitySatisfactionSurveyRespondentData);

                $communitySatisfactionSurveyRespondentLastID = $communitySatisfactionSurveyRespondent->id;

                CommunitySatisfactionSurveyResponse::create([
                    'community_satisfaction_survey_respondent_id' => $communitySatisfactionSurveyRespondentLastID,
                    'requirement' => $request->requirement,
                    'competency' => $request->competency,
                    'convenience' => $request->convenience,
                    'advice' => $request->advice,
                ]);
            });

            return redirect()->route('landing.survei.success');
        } catch (Exception $error) {
            return dd($error);
        }
    }

    public function success()
    {
        $visitors = new Visitor();
        $data['visitors']['yearly'] = $visitors->whereYear('created_at', '=', date('Y'))->count();
        $data['visitors']['monthly'] = $visitors->whereMonth('created_at', '=', date('m'))->count();
        $data['title'] = 'Survei Kepuasan Masyrakat (SKM) 2045';
        return view('landing.survei.success', $data);
    }
}
