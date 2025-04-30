<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Visitor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\RpjmdSurveyHopeResponse;
use App\Models\RpjmdSurveyIssueResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\RpjmdSurveyResponse;
use App\Models\RpjmdSurveyRespondent;
use Exception;
use Illuminate\Validation\Rule;

class SurveiRPJMDController extends Controller
{
    private $ageRangeData = [
        'Di Bawah 13 Tahun', '13-28 Tahun', '29-44 Tahun', '45-60 Tahun', '61-79 Tahun',
    ];
    private $domicileData = [
        'Samarinda', 'Balikpapan', 'Bontang', 'Berau', 'Kutai Barat', 'Kutai Kartanegara', 'Kutai Timur', 'Mahakam Ulu', 'Paser', 'Penajam Paser Utara', 'Lainnya',
    ];
    private $notInDomicileData = [
        'SMD', 'SMR', 'SRI', 'BPN', 'BPP', 'BON', 'BTG', 'Tanjung', 'TNR', 'Kubar', 'Kukar', 'SDW', 'TRG', 'TNG', 'TGR', 'Kutim', 'SGT', 'SNT', 'STG', 'SNG', 'Mahulu', 'TGT', 'Penajam', 'PPU', 'Kaltim', 'Kalimantan Timur', 'Kalimantan',
    ];
    private $mainJobData = [
        'Pegawai Pemerintah', 'Pegawai Swasta', 'Pegawai BUMN/BUMD', 'TNI/POLRI', 'Wiraswasta', 'Pedagang', 'Tenaga Pendidik', 'Tenaga Medis/Kesehatan', 'Pekerja Lepas/Freelancer', 'Pelajar/Mahasiswa', 'Mengurus Rumah Tangga', 'Lainnya'
    ];
    private $notInMainJobData = [
        'Pegawai Negeri Sipil', 'PNS', 'PPPK', 'Pegawai Pemerintah Dengan Perjanjian Kontrak', 'Dosen', 'Anggota DPRD', 'TNI', 'Tentara Negara Indonesia', 'POLRI', 'Polisi Republik Indonesia', 'Polisi', 'Pengusaha', 'IRT', 'Ibu Rumah Tangga', 'Siswa', 'Dokter', 'Perawat', 'Guru',
    ];
    private $lastEducationData = [
        'SD/Sederajat', 'SMP/Sederajat', 'SMA/Sederajat', 'Diploma', 'D4/S1', 'S2', 'S3',
    ];
    private $issueData = [
        'Kemiskinan', 'Kesenjangan Sosial', 'Pengangguran', 'Pendidikan', 'Kesehatan', 'Infrastruktur', 'Lingkungan Hidup', 'Pelayanan Publik', 'Lainnya'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['respondents'] = RpjmdSurveyRespondent::count();
        $data['ageRangeData'] = $this->ageRangeData;
        $data['mainJobData'] = $this->mainJobData;
        $data['domicileData'] = $this->domicileData;
        $data['lastEducationData'] = $this->lastEducationData;
        $data['issueData'] = $this->issueData;

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
            $domicile = $request->domicile;
            $anotherDomicile = $request->anotherDomicile;
            $mainJob = $request->mainJob;
            $anotherMainJob = $request->anotherMainJob;
            $issues = $request->issues;
            $anotherIssue = $request->another_issue;

            $validator = [
                'sex' => 'required|string|in:Laki-laki,Perempuan',
                'age' => 'required',
                'domicile' => 'required|string',
                'mainJob' => 'required|string',
                'disability' => 'required|string|in:Ya,Tidak',
                'lastEducation' => 'required|string',
                'phoneNumber' => 'required|numeric|digits_between:10,20',
                'issues' => 'required',
                'hope_development' => 'required|string|min:2|max:1024',
                'hope_program' => 'required|string|min:2|max:1024',
            ];

            if($domicile){
                $anotherDomicile = Str::lower($anotherDomicile);

                $validator['anotherDomicile'] = [];

                if ($domicile == "Lainnya" && empty($anotherDomicile)) {
                    $validator['anotherDomicile'][] = 'required';
                }

                if ($domicile == "Lainnya" && !empty($anotherDomicile)) {
                    $validator['anotherDomicile'][] = 'min:2';
                    $validator['anotherDomicile'][] = 'max:64';
                }

                $validator['anotherDomicile'][] = function ($attribute, $value, $fail) {
                    $lowercaseValue = strtolower($value);
                    $domicileDataLowercase = array_map('strtolower', $this->domicileData);
                    $notInDomicileDataLowerCase = array_map('strtolower', $this->notInDomicileData);

                    if (in_array($lowercaseValue, $notInDomicileDataLowerCase) ||
                        in_array($lowercaseValue, $domicileDataLowercase)) {
                        $fail('Isian yang Dimasukkan Telah Ada atau Telah Tergabung dalam Pilihan');
                    }
                };
            }

            if($mainJob){
                $anotherMainJob = Str::lower($anotherMainJob);

                $validator['anotherMainJob'] = [];

                if($mainJob == "Lainnya" && empty($anotherMainJob)){
                    $validator['anotherMainJob'][] = 'required';
                }

                if($mainJob == "Lainnya" && !empty($anotherMainJob)){
                    $validator['anotherMainJob'][] = 'min:2';
                    $validator['anotherMainJob'][] = 'max:64';
                }

                $validator['anotherMainJob'][] = function ($attribute, $value, $fail) {
                    $lowercaseValue = strtolower($value);
                    $mainJobDataLowercase = array_map('strtolower', $this->mainJobData);
                    $notInMainJobDataLowerCase = array_map('strtolower', $this->notInMainJobData);

                    if (in_array($lowercaseValue, $notInMainJobDataLowerCase) ||
                    in_array($lowercaseValue, $mainJobDataLowercase)) {
                        $fail('Isian yang Dimasukkan Telah Ada atau Telah Tergabung dalam Pilihan');
                    }
                };
            }

            if($issues){
                // $request['another_issue'] = Str::lower($anotherIssue);
                // $validator['another_issue'] = Rule::notIn(array_map("strtolower", $this->issueData));
                // foreach($issues as $i){
                //     if($i == "Lainnya" && empty($anotherIssue)){
                //         $validator['another_issue'] = 'required';
                //     }
                // }

                $anotherIssue = Str::lower($anotherIssue);

                $validator['another_issue'] = [];

                foreach($issues as $i){
                    if($i == "Lainnya" && empty($anotherIssue)){
                        $validator['another_issue'][] = 'required';
                    }

                    if($i == "Lainnya" && !empty($anotherIssue)){
                        $validator['another_issue'][] = 'min:2';
                        $validator['another_issue'][] = 'max:64';
                    }
                }

                $validator['another_issue'][] = function ($attribute, $value, $fail) {
                    $lowercaseValue = strtolower($value);
                    $issueDataLowercase = array_map('strtolower', $this->issueData);

                    if (in_array($lowercaseValue, $issueDataLowercase)) {
                        $fail('Isian yang Dimasukkan Telah Ada atau Telah Tergabung dalam Pilihan');
                    }
                };
            }

            $validatedData = Validator::make($request->all(), $validator, [
                'sex.required' => 'Mohon Pilih Jenis Kelamin Anda',
                'age.required' => 'Mohon Pilih Usia Anda',
                'domicile.required' => 'Mohon Pilih Asal Anda',
                'anotherDomicile.required' => 'Mohon Isi Asal Lainnya',
                'anotherDomicile.min' => 'Mohon Isi Asal Lainnya Minimal 2 Karakter',
                'anotherDomicile.max' => 'Mohon Isi Asal Lainnya Maksimal 64 Karakter',
                'mainJob.required' => 'Mohon Pilih Jenis Pekerjaan Anda',
                'anotherMainJob.required' => 'Mohon Isi Jenis Pekerjaan Lainnya',
                'anotherMainJob.min' => 'Mohon Isi Jenis Pekerjaan Lainnya Minimal 2 Karakter',
                'anotherMainJob.max' => 'Mohon Isi Jenis Pekerjaan Lainnya Maksimal 64 Karakter',
                'disability.required' => 'Mohon Pilih Usia',
                'lastEducation.required' => 'Mohon Pilih Pendidikan Terakhir Anda',
                'phoneNumber.required' => 'Mohon Isi Nomor Handphone',
                'phoneNumber.digits_between' => 'Mohon Nomor Handphone Isi Dalam Rentang 10-20 Digit',
                'phoneNumber.number' => 'Mohon Isi Nomor Handphone Dalam Bentuk Angka',
                'issues.required' => 'Mohon Centang Minimal Satu Kotak',
                'another_issue.required' => 'Mohon Isi Isu atau Permasalahan Lainnya',
                'another_issue.min' => 'Mohon Isi Isu atau Permasalahan Lainnya Minimal 2 Karakter',
                'another_issue.max' => 'Mohon Isi Isu atau Permasalahan Lainnya Maksimal 64 Karakter',
                'hope_development.required' => 'Mohon Isi Harapan Anda',
                'hope_development.min' => 'Mohon Isi Harapan Anda Minimal 2 Karakter',
                'hope_development.max' => 'Mohon Isi Harapan Anda Maksimal 1024 Karakter',
                'hope_program.required' => 'Mohon Isi Harapan Anda',
                'hope_program.min' => 'Mohon Isi Harapan Anda Minimal 2 Karakter',
                'hope_program.max' => 'Mohon Isi Harapan Anda Maksimal 1024 Karakter',
             ]);

            if ($validatedData->fails()) {
                $errorsString = implode('<br>', $validatedData->errors()->all());
                return redirect()->route('landing.survei-publik-rpjmd')->withInput()->withErrors($validatedData)->with('errorsString', $errorsString);
            }

            DB::transaction(function() use($request, $domicile, $anotherDomicile, $mainJob, $anotherMainJob, $issues) {
                $RpjmdSurveyRespondentData = [
                    'sex' => $request->sex,
                    'age' => $request->age,
                    'domicile' => $request->domicile,
                    'disability' => $request->disability,
                    'origin' => $request->origin,
                    'last_education' => $request->lastEducation,
                    'main_job' => $request->mainJob,
                    'phone_number' => $request->phoneNumber,
                ];

                if($domicile == "Lainnya"){
                    $RpjmdSurveyRespondentData['domicile'] = $anotherDomicile;
                }else{
                    $RpjmdSurveyRespondentData['domicile'] = $domicile;
                }

                if($mainJob == "Lainnya"){
                    $RpjmdSurveyRespondentData['main_job'] = $anotherMainJob;
                }else{
                    $RpjmdSurveyRespondentData['main_job'] = $mainJob;
                }

                $RpjmdSurveyRespondent = RpjmdSurveyRespondent::create($RpjmdSurveyRespondentData);

                $RpjmdSurveyRespondentLastID = $RpjmdSurveyRespondent->id;

                RpjmdSurveyHopeResponse::create([
                    'rpjmd_survey_respondent_id' => $RpjmdSurveyRespondentLastID,
                    'hope_development' => $request->hope_development,
                    'hope_program' => $request->hope_program,
                ]);

                foreach($issues as $i){
                    if($i == "Lainnya"){
                        RpjmdSurveyIssueResponse::create([
                            'rpjmd_survey_respondent_id' => $RpjmdSurveyRespondentLastID,
                            'issue' => $request->another_issue,
                        ]);
                    }else{
                        RpjmdSurveyIssueResponse::create([
                            'rpjmd_survey_respondent_id' => $RpjmdSurveyRespondentLastID,
                            'issue' => $i,
                        ]);
                    }
                }
            });

            return redirect()->route('landing.survei-publik-rpjmd.success');
        } catch (Exception $error) {
            return dd($error);
        }
    }

    public function success()
    {
        return view('landing.survei-rpjmd.success');
    }
}
