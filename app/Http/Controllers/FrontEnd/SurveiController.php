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

class SurveiController extends Controller
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
    private $requirementsAnswerData = [
        'Sangat Sesuai', 'Sesuai', 'Kurang Sesuai', 'Tidak Sesuai', 'Sangat Tidak Sesuai',
    ];
    private $competencyAnswerData = [
        'Sangat Kompeten', 'Kompeten', 'Kurang Kompeten', 'Sangat Tidak Kompeten', 'Tidak Kompeten',
    ];
    private $convenienceAnswerData = [
        'Sangat Mudah', 'Mudah', 'Cukup Mudah', 'Tidak Mudah', 'Sangat Tidak Mudah',
    ];
    private $politenessAnswerData = [
        'Sangat Sopan dan Ramah', 'Sopan dan Ramah', 'Kurang Sopan dan Kurang Ramah', 'Tidak Sopan dan Tidak Ramah', 'Sangat Tidak Sopan dan Tidak Ramah',
    ];
    private $velocityAnswerData = [
        'Sangat Cepat', 'Cepat', 'Kurang Cepat', 'Tidak Cepat', 'Sangat Tidak Cepat',
    ];
    private $qualityAnswerData = [
        'Sangat Baik', 'Baik', 'Cukup', 'Buruk', 'Sangat Buruk',
    ];
    private $reasonablenessAnswerData = [
        'Gratis/Tanpa Biaya', 'Murah', 'Mahal', 'Sangat Mahal',
    ];
    private $managementAnswerData = [
        'Sangat Dikelola dan Cepat Ditindaklanjuti', 'Dikelola dengan baik', 'Berfungsi Namun Kurang Maksimal dan Lambat Ditindaklanjuti', 'Ada Tetapi Tidak Berfungsi', 'Tidak Ada',
    ];
    private $suitabilityAnswerData = [
        'Sangat Sesuai', 'Sesuai', 'Kurang Sesuai', 'Tidak Sesuai', 'Sangat Tidak Sesuai',
    ];
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
        $data['requirementAnswerData'] = $this->requirementsAnswerData;
        $data['competencyAnswerData'] = $this->competencyAnswerData;
        $data['convenienceAnswerData'] = $this->convenienceAnswerData;
        $data['politenessAnswerData'] = $this->politenessAnswerData;
        $data['velocityAnswerData'] = $this->velocityAnswerData;
        $data['qualityAnswerData'] = $this->qualityAnswerData;
        $data['reasonablenessAnswerData'] = $this->reasonablenessAnswerData;
        $data['managementAnswerData'] = $this->managementAnswerData;
        $data['suitabilityAnswerData'] = $this->suitabilityAnswerData;
        return view('landing.survei.index', $data);
    }

    public function modalIndex(){
        $data['title'] = 'Survei Kepuasan Masyarakat (SKM)';

        $data['ageRangeData'] = $this->ageRangeData;
        $data['mainJobData'] = $this->mainJobData;
        $data['requirementAnswerData'] = $this->requirementsAnswerData;
        $data['competencyAnswerData'] = $this->competencyAnswerData;
        $data['convenienceAnswerData'] = $this->convenienceAnswerData;
        $data['politenessAnswerData'] = $this->politenessAnswerData;
        $data['velocityAnswerData'] = $this->velocityAnswerData;
        $data['qualityAnswerData'] = $this->qualityAnswerData;
        $data['reasonablenessAnswerData'] = $this->reasonablenessAnswerData;
        $data['managementAnswerData'] = $this->managementAnswerData;
        $data['suitabilityAnswerData'] = $this->suitabilityAnswerData;
        return view('content.community_satisfaction_survey.modal.modal_view_community_satisfaction_survey', $data);
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
                'requirement' => 'required|string',
                'competency' => 'required|string',
                'convenience' => 'required|string',
                'politeness' => 'required|string',
                'velocity' => 'required|string',
                'quality' => 'required|string',
                'reasonableness' => 'required|string',
                'management' => 'required|string',
                'suitability' => 'required|string',
                'advice' => 'required|string|min:2|max:5012',
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
                'requirement.required' => 'Mohon Pilih Pilihan pada Pertanyaan 1',
                'competency.required' => 'Mohon Pilih Pilihan pada Pertanyaan 2',
                'convenience.required' => 'Mohon Pilih Pilihan pada Pertanyaan 3',
                'politeness.required' => 'Mohon Pilih Pilihan pada Pertanyaan 4',
                'velocity.required' => 'Mohon Pilih Pilihan pada Pertanyaan 5',
                'quality.required' => 'Mohon Pilih Pilihan pada Pertanyaan 6',
                'reasonableness.required' => 'Mohon Pilih Pilihan pada Pertanyaan 7',
                'management.required' => 'Mohon Pilih Pilihan pada Pertanyaan 8',
                'suitability.required' => 'Mohon Pilih Pilihan pada Pertanyaan 9',
                'advice.required' => 'Mohon Isi Saran pada Pertanyaan 10',
                'advice.min' => 'Mohon Isi Saran Minimal 2 Karakter',
                'advice.max' => 'Mohon Isi Saran Minimal 5012 Karakter',
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
                    'politeness' => $request->politeness,
                    'velocity' => $request->velocity,
                    'quality' => $request->quality,
                    'reasonableness' => $request->reasonableness,
                    'management' => $request->management,
                    'suitability' => $request->suitability,
                    'advice' => $request->advice,
                ]);
            });

            return redirect()->route('landing.survei.success');
        } catch (Exception $error) {
            return dd($error);
        }
    }

    public function modalStore(Request $request)
    {
        try {
            $mainJob = $request->mainJob;
            $anotherMainJob = $request->anotherMainJob;

            $validator = [
                'name' => 'required|min:2|max:256',
                'email' => 'required|email:dns',
                'sex' => 'required|in:Laki-laki,Perempuan',
                'age' => 'required',
                'phoneNumber' => 'required|digits_between:10,20|numeric',
                'address' => 'required|min:2|max:5012',
                'mainJob' => 'required',
                'requirement' => 'required',
                'competency' => 'required',
                'convenience' => 'required',
                'politeness' => 'required',
                'velocity' => 'required',
                'quality' => 'required',
                'reasonableness' => 'required',
                'management' => 'required',
                'suitability' => 'required',
                'advice' => 'required|min:2|max:5012',
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
                'email.required' => 'Mohon Isi Email',
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
                'requirement.required' => 'Mohon Pilih Pilihan pada Pertanyaan 1',
                'competency.required' => 'Mohon Pilih Pilihan pada Pertanyaan 2',
                'convenience.required' => 'Mohon Pilih Pilihan pada Pertanyaan 3',
                'politeness.required' => 'Mohon Pilih Pilihan pada Pertanyaan 4',
                'velocity.required' => 'Mohon Pilih Pilihan pada Pertanyaan 5',
                'quality.required' => 'Mohon Pilih Pilihan pada Pertanyaan 6',
                'reasonableness.required' => 'Mohon Pilih Pilihan pada Pertanyaan 7',
                'management.required' => 'Mohon Pilih Pilihan pada Pertanyaan 8',
                'suitability.required' => 'Mohon Pilih Pilihan pada Pertanyaan 9',
                'advice.required' => 'Mohon Isi Saran pada Pertanyaan 10',
                'advice.min' => 'Mohon Isi Saran Minimal 2 Karakter',
                'advice.max' => 'Mohon Isi Saran Minimal 5012 Karakter',
             ]);
            if ($validatedData->fails()) {
                $errorsString = implode('<br>', $validatedData->errors()->all());
                return redirect()->back()->withInput()->withErrors($validatedData)->with('errorsString', $errorsString);
                // return back()->withInput()->withErrors($validatedData)->with('errorsString', $errorsString);
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
                    'politeness' => $request->politeness,
                    'velocity' => $request->velocity,
                    'quality' => $request->quality,
                    'reasonableness' => $request->reasonableness,
                    'management' => $request->management,
                    'suitability' => $request->suitability,
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

    public function modalSuccess()
    {
        $data['title'] = 'Survei Kepuasan Masyrakat (SKM) 2045';
        return view('content.community_satisfaction_survey.modal.modal_view_community_satisfaction_survey_success', $data);
    }
}
