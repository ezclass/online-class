<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function view(Request $request)
    {
        return view('pages.contact-us');
    }

    public function mail(ContactUsRequest $request)
    {
       
    }
}
