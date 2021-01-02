<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        
        $details=[
            'title'=>'Mail from ajay telangre',
            'body'=>'this is for testing'
        ];
        Mail::to('ajaytelangre11@gmail.com')->send(new TestMail($details));
        return "Email send";
        
    }
}
