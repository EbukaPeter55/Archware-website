<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'string',
            'lastname' => 'string',
            'email' => 'required|email',
            'service' => 'required',
            'message' => 'required',
        ]);


        if ($validator->fails())
        {
            $error = $validator->errors()->toArray();
            return response()->json([
                'errors' => $error,
                'data' => 'Something went wrong',
            ], 500);
        }

        // if ($validator->fails()) {
        //     $errors = $validator->errors()->toArray();
        //     return response()->json(
        //         array(
        //             'data' => 'Something went wrong',
        //             'errors' => $errors
        //             )
        //     );
        // }

        $message = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'service' => $request->service,
            'message' => $request->message,
        ];

        Notification::route('mail', 'fajendagbaj@gmail.com')->notify(new ContactMessage($message));

        return response()->json([
            'success' => True,
            'data' => 'Message submitted',
        ], 200);

        /*
            $contact = new Contact();
            $contact->name = $request->get('name');
            $contact->email = $request->get('email');
            $contact->message = $request->get('message');
            $contact->save();
        */

    }
}
