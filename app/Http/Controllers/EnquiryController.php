<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class EnquiryController extends Controller
{
    //

    public function enquiry(Request $request)
    {
      //  return $request->all();
        $validated = Validator::make($request->all(),[
            'name' => 'required',
            
            'mobile' => 'required|max:10|min:10'
        ]);
        if($validated->fails())
        {
            return Redirect::back()->withErrors($validated);
        }
        else{
            //echo "done";
            $name=$request->name;
            $mobile=$request->mobile;
            $email=$request->email;
            $details=[
                'title'=>'Enquiry',
                'subject'=>"Enquiry",
                'message'=>"hi",
                'name'=>$name,
                'mobile'=>$mobile,
                'email'=>$email,
             
               
                
            ];
            $send_mail=Mail::to('ajaytelangre11@gmail.com')->send(new TestMail($details));
         
            return Redirect::back()->with('message','Thank You. Your message send Succesfully');
           
            
        }
        
    }
}
