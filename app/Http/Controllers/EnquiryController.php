<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;

class EnquiryController extends Controller
{
    //

    public function enquiry(Request $request)
    {
      //  return $request->all();
        $validated = Validator::make($request->all(),[
            'name' => 'required',
            
            'mobile' => 'required|unique:users|max:10|min:10'
        ]);
        if($validated->fails())
        {
            return Redirect::back()->withErrors($validated);
        }
        else{
            echo "done";
            return $request->all();
        }
        
    }
}
