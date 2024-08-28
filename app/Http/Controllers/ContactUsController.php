<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index() {
        return view('contact-us.index');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('felipitocg@gmail.com')->send(new ContactUsMailable($request->all()));

        return redirect()->route('contact-us.index')->with('success', 'Haz enviado tu mensaje correctamente, te responderemos en breve. 👍🏻');
    }
}