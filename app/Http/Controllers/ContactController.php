<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // $this->validate($request,
        // [
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'message' => 'required|string',
        // ]);
        dd($request);

        $contact = new Contact();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->message = $request->get('message');
        $contact->save();


        return response()->json('Message submitted');

        // return response()->json('Message submitted');
    }
}
