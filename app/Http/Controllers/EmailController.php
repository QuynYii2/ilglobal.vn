<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $email = $request->input('email');

        Mail::to($email)->send(new SendEmail());

        return redirect()->back()->with('message', 'Email đã được gửi đi!');
    }
}
