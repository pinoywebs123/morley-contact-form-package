<?php

namespace morley\contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use morley\contact\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact::contact');
    }

    public function sendContact(Request $request)
    {
        //return $request->all();
        Contact::create($request->all());
        return redirect()->back()->with('suc','Message Send Successfully!');
        
    }
}
