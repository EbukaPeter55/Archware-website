<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Exception;
use Illuminate\Http\Request;
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
                    'brief_info' => 'required|required',
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

            $application = Application::create([
                'resume_directory'  => $resume_directory,
                'fullname' => $request->fullname,
                'position' => $request->position,
                'email' => $request->email,
                'brief_info' => $request->brief_info,
            ]);

            /*
                $message = [
                    'fullname' => $request->fullname,
                    'position' => $request->position,
                    'email' => $request->email,
                    'brief_info' => $request->brief_info,
                    'resume_directory' => $request->resume_directory,
                ];

                Notification::route('mail', 'Info@arcwaretechgroup.com')->notify(new ContactMessage($message));
            */

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
}
