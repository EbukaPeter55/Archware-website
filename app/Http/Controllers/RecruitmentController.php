<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\recruitment as ModelsRecruitment;
use App\Notifications\Recruitment;
use App\Notifications\RecruitmentNotification;
use Exception;
use Illuminate\Http\Request;
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
            } else {
                $resume_directory = "noresume.pdf";
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

        /*
        $validateUser = Validator::make(
            $request->all(),
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
                'aramco_qa_qc_approval'     => 'required|in:yes,no,na',
                'aramcosap_no_or_id'        => 'string|nullable',
                'english_skills'            => 'required|string',
                'current_salary'            => 'required|string',
                'expected_salary'           => 'required|string',
                'id_no'                     => 'required|string',
                'transferrable_iqama'       => 'required|in:yes,no,na',
                'driving_license'           => 'required|in:yes,no',
                'dob'                       => 'required|date_format:Y-m-d',
                'country'                   => 'required|string',
                'city'                      => 'required|string',
                'notice_period'             => 'required|string',
                'contact_no'                => 'string|nullable',
                'whatsapp_or_imo'           => 'string|nullable',
                'skype_id'                  => 'string|nullable',
                'email'                     => 'required|email',
            ]
        );

        if ($validateUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateUser->errors()
            ], 400);
        }
        */

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
                'id_no'                     => 'required|string',
                'transferrable_iqama'       => 'required|in:yes,no,na',
                'driving_license'           => 'required|in:yes,no',
                'dob'                       => 'required|date_format:Y-m-d',
                'country'                   => 'required|string',
                'city'                      => 'required|string',
                'notice_period'             => 'required|string',
                'contact_no'                => 'string|nullable',
                'whatsapp_or_imo'           => 'string|nullable',
                'skype_id'                  => 'string|nullable',
                'email'                     => 'required|email',
                'credential'                => 'nullable|max:5000|mimes:doc,pdf,docx',
                'resume'                    => 'required|max:5000|mimes:doc,pdf,docx',
            ]
        );


        if ($request->hasFile('certificate_training')) {
            $fileNameWithExt    = $request->file('certificate_training')->getClientOriginalName();
            $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('certificate_training')->getClientOriginalExtension();
            $certificate_training    = 'certificate_' . $filename . '_' . time() . '.' . $extension;
            Storage::put('public/certificate_training/' . $certificate_training, $certificate_training);
        }

        if ($request->hasFile('resume')) {
            $fileNameWithExt    = $request->file('resume')->getClientOriginalName();
            $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('resume')->getClientOriginalExtension();
            $resume             = 'resume_' . $filename . '_' . time() . '.' . $extension;
            Storage::put('public/resume/' . $resume, $resume);
        }

        /*
        ModelsRecruitment::create([
            'name' => $request->name,
            'post_applied' => $request->post_applied,
            'nationality' => $request->nationality,
            'qualification' => $request->nationality,
            'major_in' => $request->major_in,
            'school_name' => $request->school_name,
            'date_graduated' => $request->date_graduated,
            'saudi_council_question' => $request->saudi_council_question,
            'sce_number' => $request->sce_number ? $request->sce_number : null,
            'sce_validity_date' => $request->sce_validity_date ? $request->sce_validity_date : null,
            'certificate_training'  => $certificate_training,
            'work_experience_yrs' => $request->work_experience_yrs,
            'field_experience_yrs' => $request->field_experience_yrs,
            'qc_inspection_experience' => $request->qc_inspection_experience,
            'aramco_qa_qc_approval' => $request->aramco_qa_qc_approval,
            'aramcosap_no_or_id' => $request->aramcosap_no_or_id ? $request->aramcosap_no_or_id : null,
            'english_skills' => $request->english_skills,
            'current_salary' => $request->current_salary,
            'expected_salary' => $request->expected_salary,
            'id_no' => $request->id_no,
            'transferrable_iqama' => $request->transferrable_iqama,
            'driving_license' => $request->driving_license,
            'dob' => $request->dob,
            'country' => $request->country,
            'city' => $request->city,
            'notice_period' => $request->notice_period,
            'contact_no' => $request->contact_no ? $request->contact_no : null,
            'whatsapp_or_imo' => $request->whatsapp_or_imo ? $request->whatsapp_or_imo : null,
            'skype_id' => $request->skype_id ? $request->skype_id : null,
            'email' => $request->email,
        ]);
        */

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
        $recruitment->certificate_training      = $certificate_training;
        $recruitment->resume                    = $resume;
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
        $recruitment->transferrable_iqama       = $request->transferrable_iqama;
        $recruitment->driving_license           = $request->driving_license;
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
                    Storage::put('public/credential/' . $credentialdirectory, $credentialdirectory);

                    $recruitment->credentials()->create([
                        'recruitment_id' => $recruitment->id,
                        'credential' => $credentialdirectory,
                    ]);
                }
            }

        } catch (Exception $e) {
            $recruitment->delete();
            // return response()->json([
            //     'status' => FALSE,
            //     'message' => 'An error occured: Failed to submit',
            //     'errors' => $e->getMessage()
            // ], 500);
            return back()->with('error', 'An error occured: Failed to submit');
        }

        // return response()->json([
        //     'status' => TRUE,
        //     'message' => 'Submitted! We\'ll get back to you soon.',
        // ], 200);
        return back()->with('success', 'Submitted! We\'ll get back to you soon.');
    }
}
