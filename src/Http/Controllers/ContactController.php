<?php

namespace morley\contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact::contact');
    }

    public function sendContact(Request $request)
    {
        return $request;
    }
}
