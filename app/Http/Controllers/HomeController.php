<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = Auth::user()->name;
        $avtar=Auth::user()->pimg;
        $id=Auth::user()->id;
        $request->session()->put('id',$id);
        $request->session()->put('avtar',$avtar);
        $request->session()->put('user_name',$data);
       
        return view('index');
    }
}
