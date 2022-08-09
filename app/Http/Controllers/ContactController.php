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
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json('Error, all forms needs to be filled');
        }

        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        $notified = Notification::route('mail', 'fajendagbaj@gmail.com')->notify(new ContactMessage($message));

        /*
            $contact = new Contact();
            $contact->name = $request->get('name');
            $contact->email = $request->get('email');
            $contact->message = $request->get('message');
            $contact->save();
        */

        if ($notified) {
            return response()->json('Message submitted');
        }else {
            return response()->json('Error sending mail');
        }

    }
}
