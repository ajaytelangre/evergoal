<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Bank;
use App\Models\User;
use App\Models\Amount;

use Illuminate\Support\Facades\DB;

use Sentinel;
use Validator;
use Auth;
use Redirect;
use Session;
use Storage;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DateTime;

class Registrationcontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    


    public function viewProfile(){
        $data = Registration::all();

        
        return view('/welcome');   
    }

    public function createProfile(Request $request){
       // dd($request->all());
       $id=session()->get('id');
       $user_count=DB::select(DB::raw("SELECT id FROM users WHERE sponserid = :id"),array(
           'id'=>$id,
       ));

       $counts=count($user_count);
       

    //    if($counts<=10)
    //    {

        
            $validatedData = Validator::make($request->all(), [
                
                'name' => 'required',
                'mobile'=>'required|unique:users|max:10|min:10',
                'email'=>'required|unique:users',
                'password'=>'required',
                'password1'=>'required'
            ]);
            if($validatedData->fails())
            {
                
            // echo "validation fail";
                return Redirect::back()->withErrors($validatedData);
            }
            else{
                $name=$request->name;
                $sponserid=session()->get('id');
                $mobile=$request->mobile;
                $email=$request->email;
                $password=$request->password;
                $password1=$request->password1;
                $pimg="";
                //return $pimg;
                if($password==$password1)
                {
                    if($request->hasFile('pimg'))
                    {
                        $pimg= $request->pimg->getClientOriginalName();
                        // if(auth()->user()->pimg)
                        // {
                        //     Storage::delete('public/user/'.auth()->user()->pimg);
                        // }
                        $request->pimg->storeAs('user',$pimg,'public');
                        auth()->user()->update(['pimg'=>$pimg]);
                    }
                    


                    DB::table('users')->insert([
                        'email'=>$email,
                        'password'=>Hash::make($password),
                        'name'=>$name,
                        'mobile'=>$mobile,
                        'sponserid'=>$sponserid,
                        'pimg'=>$pimg,
                        'user_type'=>'user',
                        'created_at'=>Carbon::now(),
                    ]);
                    Session::flash('message','Data uploaded');
                    return Redirect::back()->withErrors($validatedData);
                }
                else{
                    Session::flash('message','Both Passwords does not match');
                    return Redirect::back()->withErrors($validatedData);
                    //echo "password is diff";
                }
                
            }

        // }
        // else{
        //     return "Your user limit is over";
        // }
       
    }

    public function showProfile()
    {
        $profileData1 = Auth::user()->id;
       // $profileData = Auth::user()->find($profileData1);
       // $user1=DB::table('users')->find($profileData);
       // return $profileData['data']['mobile'];
       // $profileData1 = Registration::all();
       $results = DB::select( DB::raw("SELECT * FROM users WHERE id = :id"), array(
        'id' => $profileData1,
      ));
     
     
       return view('/profile',['data'=>$results]);
      
        
    }


    // public function updateProfile($id)
    // {
    //     $data1 = Registration::all();       
    //     return view('/profile',['profileUpdate'=>$data1]);               
    // }
   
    public function insertUpdate(Request $request)
    {
        
        $data = Registration::find($request->id);
        $data ->sponserid = $request->sponserid;
        $data ->name = $request->name;
        $data ->mobileno = $request->mobileno;
        $data ->pimg = $request->pimg;
       
         $data->save();
        return redirect('showprofile') ;
    }


    public function login_user(Request $request)
    {
        // $name=$request->user_name;
        // $pass=$request->pass;
        // dd($request->all());

        $user_data = array(
            'email'  => $request->get('user_name'),
            'password' => $request->get('pass')
           );
        Sentinel::disableCheckpoints();
        $errorMsgs=[
            'user_name'=>'Username must required',
            'user_name'=>'Password must required',
        ];

        $validator=Validator::make($request->all(),[
            'user_name'=>'required',
            'pass'=>'required'
        ],$errorMsgs);

        if($validator->fails())
        {
            echo "validation fails";
        }
        else{
           // $user=Sentinel::authenticate($request->all());
        //     $name=$request->user_name;
        //     $pass=$request->pass;
        //     print($pass);
        //     $results = DB::select('select * from users where email = ?', [$name]);
        //   var_dump($results) ;
        if(Auth::attempt($user_data))
        {
         return "login success";
        }
        else
        {
        //  return back()->with('error', 'Wrong Login Details');
            return "login fail";
        }
   
           
        }

        // print(Sentinel::check());
       
        // if(Sentinel::check()){
        //     return "succesfully login";
        // }
        // else{
        //     return "login fail";
        // }

        
    }

    public function my_direct()
    {
        $id=session()->get('id');

        $user_id=DB::select(DB::raw('SELECT t1.id as lev1, t2.id as lev2, t3.id as lev3,t4.id as lev4,t5.id as
        lev5,t6.id as lev6,t7.id as lev7, t8.id as lev8 from users as t1 left join users as t2 on (t2.sponserid=t1.id) left join users as t3 on(t3.sponserid=t2.id) 
        left join users as t4 on(t4.sponserid=t3.id) left join users as t5 on(t5.sponserid=t4.id) left join users as t6 on(t6.sponserid=t5.id) left join users as t7
         on(t7.sponserid=t6.id) left join users as t8 on(t8.sponserid=t7.id) where t1.id=:id'),array(
            'id'=>$id,
        ));


        $direct_id_active_count=count(DB::select(DB::raw('SELECT id from users where sponserid=:id and status=:status1'),array(
            'id'=>$id,
            'status1'=>'active',
        )));
     
   
       $lev1=$lev2=$lev3=$lev4=$lev5=$lev6=$lev7=$lev8=array();
       $c=0;
       foreach($user_id as $x=>$y)
       {
          
           array_push($lev1,$y->lev1);
           array_push($lev2,$y->lev2);
           array_push($lev3,$y->lev3);
           array_push($lev4,$y->lev4);
           array_push($lev5,$y->lev5);
           array_push($lev6,$y->lev6);
           array_push($lev7,$y->lev7);
           array_push($lev8,$y->lev8);
         
       }
       $count_level2=count(array_filter(array_unique($lev2)));
       $count_level3=count(array_filter(array_unique($lev3)));
       $count_level4=count(array_filter(array_unique($lev4)));
       $count_level5=count(array_filter(array_unique($lev5)));
       $count_level6=count(array_filter(array_unique($lev6)));
       $count_level7=count(array_filter(array_unique($lev7)));
       $count_level8=count(array_filter(array_unique($lev8)));
       $total_count=$count_level2+$count_level3+$count_level4+$count_level5+$count_level6+$count_level7+$count_level8;

        $data['total_count']=$total_count;



        $users_data['count_level21']=array_filter(array_unique($lev2));
       $users_data['count_level31']=array_filter(array_unique($lev3));
       $users_data['count_level41']=array_filter(array_unique($lev4));
       $users_data['count_level51']=array_filter(array_unique($lev5));
       $users_data['count_level61']=array_filter(array_unique($lev6));
       $users_data['count_level71']=array_filter(array_unique($lev7));
       $users_data['count_level81']=array_filter(array_unique($lev8));
       $list_count=(array_merge($users_data['count_level21'],$users_data['count_level31'],$users_data['count_level41'],$users_data['count_level51'],$users_data['count_level61'],$users_data['count_level71'],$users_data['count_level81']));



       $list_users_count='';
       $level2_active_users_count=count(DB::table('users')  //second level active user count
                    ->whereIn('id', $users_data['count_level21'])
                    ->where('status','active')
                    ->select('id')
                   ->get());
       //return $level2_active_users_count;
       
        $level3_active_users_count=count(DB::table('users')  //3 level active user count
                    ->whereIn('id', $users_data['count_level31'])
                    ->where('status','active')
                    ->select('id')
                   ->get());
                   
        $level4_active_users_count=count(DB::table('users')  //4 level active user count
                    ->whereIn('id', $users_data['count_level41'])
                    ->where('status','active')
                    ->select('id')
                   ->get());
       
       $level5_active_users_count=count(DB::table('users')  //5 level active user count
                    ->whereIn('id',$users_data['count_level51'])
                    ->where('status','active')
                    ->select('id')
                   ->get());

       $level6_active_users_count=count(DB::table('users')  //6 level active user count
                    ->whereIn('id', $users_data['count_level61'])
                    ->where('status','active')
                    ->select('id')
                   ->get());

        $level7_active_users_count=count(DB::table('users')  //7 level active user count
                    ->whereIn('id', $users_data['count_level71'])
                    ->where('status','active')
                    ->select('id')
                   ->get());

        $level8_active_users_count=count(DB::table('users')  //8 level active user count
                    ->whereIn('id', $users_data['count_level81'])
                    ->where('status','active')
                    ->select('id')
                   ->get());

       //return $level2_active_users_count;
       if($direct_id_active_count>=1)
       {
           $list_users_count=$level2_active_users_count;
       }
       //return $list_users_count;
      
       if($direct_id_active_count>=3 and ($level4_active_users_count>0))      //for level 2
       {
           $list_users_count=$list_users_count+($level3_active_users_count*2);  //level 2 rs count
       }
       if($direct_id_active_count>=4 and ($level5_active_users_count>0))  //for level 3
       {
           $list_users_count=$list_users_count+($level4_active_users_count*3);   //level 3 rs count
       }
       if($direct_id_active_count>=5 and ($level6_active_users_count>0)) //for level 4
       {
           $list_users_count=$list_users_count+($level5_active_users_count*4);    //level 4 rs count
       }
       if($direct_id_active_count>=6 and ($level7_active_users_count>0)) //for level 5
       {
           $list_users_count=$list_users_count+($level6_active_users_count*5);   //level 5 rs count
       }
       if($direct_id_active_count>=7 and ($level8_active_users_count>0)) //for level 6
       {
           $list_users_count=$list_users_count+($level7_active_users_count*6);   //level 6 rs count
       }
       if($direct_id_active_count>=10) //for level 7
       {
           $list_users_count=$list_users_count+($level8_active_users_count*7);    //level 7 rs count
       }
       
       //return $list_users_count;


        $data['user']=DB::table('users')->where('id',$id)->get();
        $counts = DB::select( DB::raw("SELECT id FROM users WHERE sponserid = :id"), array(
            'id' => $id,
          ));
       
        // $active=DB::select( DB::raw("SELECT id FROM users WHERE sponserid = :id and status=:stat"), array(
        //     'id' => $id,
        //     'stat'=>'active'
        //   ));

        //   $deactive=DB::select( DB::raw("SELECT id FROM users WHERE sponserid = :id and status=:stat"), array(
        //     'id' => $id,
        //     'stat'=>'deactive'
        //   ));
        $active = DB::table('users')
        ->select('id')
        ->whereIn('id', $list_count)
        ->Where('status','active')
        ->get();

        $deactive = DB::table('users')
        ->select('id')
        ->whereIn('id', $list_count)
        ->Where('status','deactive')
        ->get();

       
          
        $data['deactive']=count($deactive);
        $data['active']=count($active);
        $data['level_benifit']=$list_users_count;
        $data['total_benifit']=25+(int)$list_users_count;
        $data['daily_benifit']=25;
        $data['counts']=count($counts);
     
        return view('cards',$data);
    }

    public function registration()
    {
      
        
        return view("registration");
    }


    public function uploadkyc()
    {
        $id=session()->get('id');
        $data['user']=DB::select(DB::raw('SELECT name from users where id=:id'),array(
            'id'=>$id,
        ));
       // return $data;   
       return view('uploadkyc',$data);
    }

    public function upload_kyc_detail(Request $request)
    {
        $validatedData=Validator::make($request->all(),[
            'account_type'=>'required',
            'account_no'=>'required',
            'bank'=>'required',
            'branch_name'=>'required',
            'ifsc'=>'required',
            'pan'=>'required',
        ]);

        if($validatedData->fails())
        {
            return Redirect::back()->withErrors($validatedData);
        }
        else{
           
            $id=session()->get('id');
            $acc_type=$request->account_type;
            $acc_no=$request->account_no;
            $bank=$request->bank;
            $branch_name=$request->branch_name;
            $ifsc=$request->ifsc;
            $pan=$request->pan;
           
            $user_id=DB::select(DB::raw('SELECT id from banks where id=:id'),array(
                'id'=>$id,
            ));
            if($user_id)
            {
                $users=Bank::find($id);
                $users->account_type=$acc_type;
                $users->account_no=$acc_no;
                $users->bank=$bank;
                $users->branch_name=$branch_name;
                $users->ifsc=$ifsc;
                $users->pan=$pan;
                $users->save();
            }
            else{
                DB::table('banks')->insert([
                    'id' => $id,
                    'account_type' => $acc_type,
                    'account_no'=>$acc_no,
                    'bank'=>$bank,
                    'branch_name'=>$branch_name,
                    'ifsc'=>$ifsc,
                    'pan'=>$pan
    
                ]);
            }
        
            return Redirect::back()->with('message','Data Uploaded');
            
        }
        
    }


    public function mywalllet_list()
    {
       
       $id=session()->get('id');
       $data['amount']=Amount::find($id);
     
       return view('wallet',$data);
   
    }



    public function my_direct_report()
    {
        

        $id=session()->get('id');
        $user_id=DB::select(DB::raw('SELECT t1.id as lev1, t2.id as lev2, t3.id as lev3,t4.id as lev4,t5.id as
        lev5,t6.id as lev6,t7.id as lev7, t8.id as lev8 from users as t1 left join users as t2 on (t2.sponserid=t1.id) left join users as t3 on(t3.sponserid=t2.id) 
        left join users as t4 on(t4.sponserid=t3.id) left join users as t5 on(t5.sponserid=t4.id) left join users as t6 on(t6.sponserid=t5.id) left join users as t7
         on(t7.sponserid=t6.id) left join users as t8 on(t8.sponserid=t7.id) where t1.id=:id'),array(
            'id'=>$id,
        ));
     
      // return $user_id;
       $lev1=$lev2=$lev3=$lev4=$lev5=$lev6=$lev7=$lev8=array();
       $c=0;
       foreach($user_id as $x=>$y)
       {
          // $lev1[$c++]=explode(" ",$y->lev1); 
           array_push($lev1,$y->lev1);
           array_push($lev2,$y->lev2);
           array_push($lev3,$y->lev3);
           array_push($lev4,$y->lev4);
           array_push($lev5,$y->lev5);
           array_push($lev6,$y->lev6);
           array_push($lev7,$y->lev7);
           array_push($lev8,$y->lev8);
         
       }
    

       $users_data['count_level21']=array_filter(array_unique($lev2));
       $users_data['count_level31']=array_filter(array_unique($lev3));
       $users_data['count_level41']=array_filter(array_unique($lev4));
       $users_data['count_level51']=array_filter(array_unique($lev5));
       $users_data['count_level61']=array_filter(array_unique($lev6));
       $users_data['count_level71']=array_filter(array_unique($lev7));
       $users_data['count_level81']=array_filter(array_unique($lev8));
       $list_count=(array_merge($users_data['count_level21'],$users_data['count_level31'],$users_data['count_level41'],$users_data['count_level51'],$users_data['count_level61'],$users_data['count_level71'],$users_data['count_level81']));
      

      $list_users_count='';
      $level2_active_users_count=count(DB::table('users')  //second level active user count
                   ->whereIn('id', $users_data['count_level21'])
                   ->where('status','active')
                   ->select('id')
                  ->get());

     $level3_active_users_count=count(DB::table('users')  //3 level active user count
                     ->whereIn('id', $users_data['count_level31'])
                     ->where('status','active')
                     ->select('id')
                    ->get());

     $level4_active_users_count=count(DB::table('users')  //4 level active user count
                     ->whereIn('id', $users_data['count_level41'])
                     ->where('status','active')
                     ->select('id')
                    ->get());

      $level5_active_users_count=count(DB::table('users')  //5 level active user count
                     ->whereIn('id', $users_data['count_level51'])
                     ->where('status','active')
                     ->select('id')
                    ->get());
    
      $level6_active_users_count=count(DB::table('users')  //6 level active user count
                     ->whereIn('id', $users_data['count_level61'])
                     ->where('status','active')
                     ->select('id')
                    ->get());
      
      $level7_active_users_count=count(DB::table('users')  //7 level active user count
                     ->whereIn('id', $users_data['count_level71'])
                     ->where('status','active')
                     ->select('id')
                    ->get());
     

       $users_data['data1'] = DB::table('users')
                    ->whereIn('id', $list_count)
                    ->get();
      // return $users_data['data1'];
       return view('direct_report',$users_data);
    }

    public function test()
    {
        $id_list=DB::select(DB::raw('SELECT id from users where status=:status1'),array(
            'status1'=>'active',
        ));
        $id2=session()->get('id');
    //     foreach($id_list as $ids)
    //     {
    //         array_push($id,$ids->id);
    //     }
    //    // return $id;
    //     foreach($id as $id2)
    //     {
            
        $user_id=DB::select(DB::raw('SELECT t1.id as lev1, t2.id as lev2, t3.id as lev3,t4.id as lev4,t5.id as
        lev5,t6.id as lev6,t7.id as lev7, t8.id as lev8 from users as t1 left join users as t2 on (t2.sponserid=t1.id) left join users as t3 on(t3.sponserid=t2.id) 
        left join users as t4 on(t4.sponserid=t3.id) left join users as t5 on(t5.sponserid=t4.id) left join users as t6 on(t6.sponserid=t5.id) left join users as t7
         on(t7.sponserid=t6.id) left join users as t8 on(t8.sponserid=t7.id) where t1.id=:id'),array(
            'id'=>$id2,
        ));



        $direct_id_active_count=count(DB::select(DB::raw('SELECT id from users where sponserid=:id and status=:status1'),array(
            'id'=>$id2,
            'status1'=>'active',
        )));

        //return $direct_id_active_count;
        // $count_direct_user=count($direct_id);



        $lev1=$lev2=$lev3=$lev4=$lev5=$lev6=$lev7=$lev8=array();
        foreach($user_id as $x=>$y)
        {
           // $lev1[$c++]=explode(" ",$y->lev1); 
            array_push($lev1,$y->lev1);
            array_push($lev2,$y->lev2);
            array_push($lev3,$y->lev3);
            array_push($lev4,$y->lev4);
            array_push($lev5,$y->lev5);
            array_push($lev6,$y->lev6);
            array_push($lev7,$y->lev7);
            array_push($lev8,$y->lev8);
          
        }
        $count_level21=array_filter(array_unique($lev2)); //2 level user list
        $count_level31=array_filter(array_unique($lev3)); //3 level user list
        $count_level41=array_filter(array_unique($lev4)); //4 level user list
        $count_level51=array_filter(array_unique($lev5)); //5 level user list
        $count_level61=array_filter(array_unique($lev6)); //6 level user list
        $count_level71=array_filter(array_unique($lev7)); //7 level user list
        $count_level81=array_filter(array_unique($lev8)); //8 level user list

        //return $count_level31;
        $list_users_count='';
        $level2_active_users_count=count(DB::table('users')  //second level active user count
                     ->whereIn('id', $count_level21)
                     ->where('status','active')
                     ->select('id')
                    ->get());
        //return $level2_active_users_count;
        
         $level3_active_users_count=count(DB::table('users')  //3 level active user count
                     ->whereIn('id', $count_level31)
                     ->where('status','active')
                     ->select('id')
                    ->get());
                    
         $level4_active_users_count=count(DB::table('users')  //4 level active user count
                     ->whereIn('id', $count_level41)
                     ->where('status','active')
                     ->select('id')
                    ->get());
        
        $level5_active_users_count=count(DB::table('users')  //5 level active user count
                     ->whereIn('id', $count_level51)
                     ->where('status','active')
                     ->select('id')
                    ->get());

        $level6_active_users_count=count(DB::table('users')  //6 level active user count
                     ->whereIn('id', $count_level61)
                     ->where('status','active')
                     ->select('id')
                    ->get());

         $level7_active_users_count=count(DB::table('users')  //7 level active user count
                     ->whereIn('id', $count_level71)
                     ->where('status','active')
                     ->select('id')
                    ->get());

         $level8_active_users_count=count(DB::table('users')  //8 level active user count
                     ->whereIn('id', $count_level81)
                     ->where('status','active')
                     ->select('id')
                    ->get());

        //return $level2_active_users_count;
        if($direct_id_active_count>=1)
        {
            $list_users_count=$level2_active_users_count;
        }
        //return $list_users_count;
       
        if($direct_id_active_count>=3 and ($level4_active_users_count>0))      //for level 2
        {
            $list_users_count=$list_users_count+($level3_active_users_count*2);  //level 2 rs count
        }
        if($direct_id_active_count>=4 and ($level5_active_users_count>0))  //for level 3
        {
            $list_users_count=$list_users_count+($level4_active_users_count*3);   //level 3 rs count
        }
        if($direct_id_active_count>=5 and ($level6_active_users_count>0)) //for level 4
        {
            $list_users_count=$list_users_count+($level5_active_users_count*4);    //level 4 rs count
        }
        if($direct_id_active_count>=6 and ($level7_active_users_count>0)) //for level 5
        {
            $list_users_count=$list_users_count+($level6_active_users_count*5);   //level 5 rs count
        }
        if($direct_id_active_count>=7 and ($level8_active_users_count>0)) //for level 6
        {
            $list_users_count=$list_users_count+($level7_active_users_count*6);   //level 6 rs count
        }
        if($direct_id_active_count>=10) //for level 7
        {
            $list_users_count=$list_users_count+($level8_active_users_count*7);    //level 7 rs count
        }

        
       // return $list_users_count;
       // $level2_active_count
      //  return $level2_active_users;
        
       


        // $date=User::where('id', $id)->select('payment_date')->first();
        // //return $date->payment_date;
        // $fdate=$date->payment_date;
        // $sdate=Carbon::now();
        // $datetime1 = new DateTime($fdate);
        // $datetime2 = new DateTime($sdate);
        // $interval = $datetime1->diff($datetime2);
        // $days = $interval->format('%a');
       // $direct_users=User::where('sponserid',$id)->select('id');
      //  return $direct_users;
        $direct_id=DB::select(DB::raw('SELECT id from users where sponserid=:id'),array(
                'id'=>$id2,
            ));
        $count_direct_user=count($direct_id);
        $available_amount=Amount::where('id',$id2)->select('total_amount')->first();

        $available_amount1=$available_amount->total_amount;
       // return $available_amount;
       // $rs=($days/7);
        $total_rs=$available_amount1+25+$list_users_count;
       // return $total_rs;
        $user_i=Amount::find($id2);
        $user_i->total_amount=$total_rs;
        $user_i->updated_amount_time=Carbon::now();
        $user_i->save();

        return "data saved";
       
    }
   
    
  
   

  

}
