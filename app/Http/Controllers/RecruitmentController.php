<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\recruitment as ModelsRecruitment;
use App\Notifications\Recruitment;
use App\Notifications\RecruitmentNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RecruitmentController extends Controller
{

    /**
     * @OA\Post(
     * path="/api/recruit-store",
     * operationId="recruitstore",
     * tags={"Storerecruit"},
     * summary="Save a potential employees credentials in the system",
     * description="Save a potential employees credentials in the system
     * saves the resume in doc,pdf,docx or zip format",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"fullname", "email", "position"},
     *               @OA\Property(property="fullname", type="text"),
     *               @OA\Property(property="email", type="email"),
     *               @OA\Property(property="position", type="text"),
     *               @OA\Property(property="brief_info", type="text"),
     *               @OA\Property(property="resume_directory", type="file"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="Resume submitted",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Error occured: error_detail",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'fullname' => 'required|string',
                    'email' => 'required|email',
                    'position' => 'required|string',
                    'brief_info' => 'required',
                    'resume_directory'   => 'required|max:5000|mimes:doc,pdf,docx,zip',
                ]
            );

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validator->errors()
                ], 400);
            }

            if ($request->hasFile('resume_directory')) {
                $fileNameWithExt    = $request->file('resume_directory')->getClientOriginalName();
                $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension          = $request->file('resume_directory')->getClientOriginalExtension();
                $resume_directory     = 'resume_' . $filename . '_' . time() . '.' . $extension;
                Storage::put('public/resume/' . $resume_directory, $request->resume_directory);
            }

            Application::create([
                'resume_directory'  => $resume_directory,
                'fullname' => $request->fullname,
                'position' => $request->position,
                'email' => $request->email,
                'brief_info' => $request->brief_info,
            ]);


            $data = [
                'fullname' => $request->fullname,
                'position' => $request->position,
                'email' => $request->email,
                'brief_info' => $request->brief_info,
                'resume_directory' => $request->resume_directory,
            ];

            Notification::route('mail', 'archwaretechnologies@gmail.com')->notify(new Recruitment($data));


            return response()->json([
                'success' => True,
                'data' => 'Resume submitted',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Error occured: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function storeRecruit(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'                      => 'required|string',
                'post_applied'              => 'required|string',
                'nationality'               => 'required|string',
                'qualification'             => 'required|string',
                'major_in'                  => 'required|string',
                'school_name'               => 'required|string',
                'date_graduated'            => 'required|date_format:Y-m-d',
                'saudi_council_question'    => 'required|in:yes,no,na',
                'sce_number'                => 'string|nullable',
                'sce_validity_date'         => 'date_format:Y-m-d|nullable',
                'certificate_training'      => 'required|max:5000|mimes:doc,pdf,docx',
                'work_experience_yrs'       => 'required|numeric',
                'field_experience_yrs'      => 'required|numeric',
                'qc_inspection_experience'  => 'required|in:yes,no,na',
                'qc_inspection_experience_count' => 'nullable|numeric',
                'aramco_qa_qc_approval'     => 'required|in:yes,no,na',
                'aramcosap_no_or_id'        => 'string|nullable',
                'english_skills'            => 'required|string',
                'current_salary'            => 'required|string',
                'expected_salary'           => 'required|string',
                'id_no'                     => 'string|nullable',
                'id_passport'               => 'string|nullable',
                'transferrable_iqama'       => 'required|in:yes,no,na',
                'driving_license'           => 'required|in:yes,no',
                'driving_license_type'      => 'string|nullable',
                'dob'                       => 'required|date_format:Y-m-d',
                'country'                   => 'required|string',
                'city'                      => 'required|string',
                'notice_period'             => 'required|string',
                'contact_no'                => 'string|nullable',
                'whatsapp_or_imo'           => 'string|nullable',
                'skype_id'                  => 'string|nullable',
                'email'                     => 'required|email|unique:recruitments',
                // 'credential'                => 'required|max:5000|mimes:doc,pdf,docx',
                'resume'                    => 'required|max:5000|mimes:doc,pdf,docx',
            ]
        );

        if ($request->hasFile('certificate_training')) {
            $fileNameWithExt    = $request->file('certificate_training')->getClientOriginalName();
            $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('certificate_training')->getClientOriginalExtension();
            $certificate_training    = 'certificate_' . $filename . '_' . time() . '.' . $extension;
            Storage::put('public/certificate_training/' . $certificate_training, File::get($request->file('certificate_training')));
        }

        if ($request->hasFile('resume')) {
            $fileNameWithExt    = $request->file('resume')->getClientOriginalName();
            $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('resume')->getClientOriginalExtension();
            $resume             = 'resume_' . $filename . '_' . time() . '.' . $extension;
            Storage::put('public/resume/' . $resume, File::get($request->file('resume')));
        }

        $url = config('app.url');

        $recruitment                            = new ModelsRecruitment();
        $recruitment->name                      = $request->name;
        $recruitment->post_applied              = $request->post_applied;
        $recruitment->nationality               = $request->nationality;
        $recruitment->qualification             = $request->qualification;
        $recruitment->major_in                  = $request->major_in;
        $recruitment->school_name               = $request->school_name;
        $recruitment->date_graduated            = $request->date_graduated;
        $recruitment->saudi_council_question    = $request->saudi_council_question;
        $recruitment->sce_number                = $request->sce_number ? $request->sce_number : null;
        $recruitment->sce_validity_date         = $request->sce_validity_date ? $request->sce_validity_date : null;
        $recruitment->certificate_training      = $url.'/storage/certificate_training/'.$certificate_training;
        $recruitment->resume                    = $url.'/storage/resume/'.$resume;
        $recruitment->work_experience_yrs       = $request->work_experience_yrs;
        $recruitment->field_experience_yrs      = $request->field_experience_yrs;
        $recruitment->qc_inspection_experience  = $request->qc_inspection_experience;
        $recruitment->qc_inspection_experience_count  = $request->qc_inspection_experience_count ? $request->qc_inspection_experience_count : null;
        $recruitment->aramco_qa_qc_approval     = $request->aramco_qa_qc_approval;
        $recruitment->aramcosap_no_or_id        = $request->aramcosap_no_or_id ? $request->aramcosap_no_or_id : null;
        $recruitment->english_skills            = $request->english_skills;
        $recruitment->current_salary            = $request->current_salary;
        $recruitment->expected_salary           = $request->expected_salary;
        $recruitment->id_no                     = $request->id_no;
        $recruitment->id_passport               = $request->id_passport;
        $recruitment->transferrable_iqama       = $request->transferrable_iqama;
        $recruitment->driving_license           = $request->driving_license;
        $recruitment->driving_license_type      = $request->driving_license_type;
        $recruitment->dob                       = $request->dob;
        $recruitment->country                   = $request->country;
        $recruitment->city                      = $request->city;
        $recruitment->notice_period             = $request->notice_period;
        $recruitment->contact_no                = $request->contact_no ? $request->contact_no : null;
        $recruitment->whatsapp_or_imo           = $request->whatsapp_or_imo ? $request->whatsapp_or_imo : null;
        $recruitment->skype_id                  = $request->skype_id ? $request->skype_id : null;
        $recruitment->email                     = $request->email;
        $recruitment->save();

        try {
            if ($request->hasFile('credential')) {
                $file_credential = $request->file('credential');
                foreach ($file_credential as $key => $value) {
                    $fileNameWithExt        = $value->getClientOriginalName();
                    $filename               = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $extension              = $value->getClientOriginalExtension();
                    $credentialdirectory    = 'filecredential_' . $key . $filename . '_' . time() . '.' . $extension;
                    Storage::put('public/credential/' . $credentialdirectory, File::get($value));

                    $recruitment->credentials()->create([
                        'recruitment_id' => $recruitment->id,
                        'credential' => $url.'/storage/credential/'.$credentialdirectory,
                    ]);
                }
            }

        } catch (Exception $e) {
            $recruitment->delete();
            return back()->with('error', 'An error occured: Failed to submit');
        }

        return back()->with('success', 'Submitted! We\'ll get back to you soon.');
    }
}
