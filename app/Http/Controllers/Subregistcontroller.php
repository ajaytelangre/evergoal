<?php

namespace App\Http\Controllers;

use App\Models\Subregistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Subregistcontroller extends Controller
{
    
       
    public function viewSubProfile(){
        $data = Subregistration::all();
        return view('/welcome');   
    }

    public function createSubProfile(Request $request){
    $subprofile =  Subregistration::create($request->all());
    return view('/welcome');
    }


}
