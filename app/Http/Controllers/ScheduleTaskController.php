<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;
use App\Models\Bank;
use App\Models\User;
use App\Models\Amount;
use App\Models\Wallet_amount;

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

class ScheduleTaskController extends Controller
{
   

    public function update_amount_id()
    {
        $data = DB::table('users')->select('id')->orderBy('id')->get();
        $data2 = DB::table('amounts')->select('id')->orderBy('id')->get();
       // $data2=Amount::where('id','2')->select('id')->first();
        //return $data2;
        $id=$id2='';
        $list_array=array();
        foreach($data2 as $dd)
        {
           array_push($list_array,$dd->id);

        }
     
        
        foreach($data as $d)
        {
            $id=$d->id;
           if(!in_array($id,$list_array))
           {
            DB::table('amounts')->insert([
                'id'=>$id,
               
            ]);

           }
        }
    

    }




    public function total_amount()
    {
        //$id=session()->get('id');
        $id_list=DB::select(DB::raw('SELECT id from users where status=:status1'),array(
            'status1'=>'active',
        ));
        $id=array();
        foreach($id_list as $ids)
        {
            array_push($id,$ids->id);
        }
       
        foreach($id as $id2)
        {
            
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
    
            
            $list_users_count='';
            $level2_active_users_count=count(DB::table('users')  //second level active user count
                         ->whereIn('id', $count_level21)
                         ->where('status','active')
                         ->select('id')
                        ->get());
           
            
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
    
            
            if($direct_id_active_count>=2)
            {
                $list_users_count=$level2_active_users_count;
            }
           
           
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
         
            $total_rs=25+(int)$available_amount1+(int)$list_users_count;
           
            $user_i=Amount::find($id2);
            $user_i->total_amount=$total_rs;
            $user_i->updated_amount_time=Carbon::now();
            $user_i->save();
            
            $wallet_amount=25+(int)$list_users_count;
            $wallet = new Wallet_amount;
            $wallet->user_id = $id2;
            $wallet->description = "Level Incentive Credited";
            $wallet->credit = $wallet_amount;
            $wallet->save();

    
            

      
        }
        //return $id_list;
        //return "data uploaded";
    }



    public function child_status()
    {
        

        $id_list=DB::select(DB::raw('SELECT id from users ORDER BY id'));
        //return $id_list;
        $id1=array();
        foreach($id_list as $ids)
        {
            array_push($id1,$ids->id);
        }
        
        foreach($id1 as $id)
        {
            $active_count=count(DB::table('users') 
            ->where('sponserid',$id)
            ->where('status','active')
            ->select('id')
            ->get());

                if($active_count>=1)
                {
                    $user_data=User::find($id);
                    $user_data->child_status='active';
                    $user_data->save();
                }
                elseif($active_count==0)
                {
                    $user_data=User::find($id);
                    $user_data->child_status='deactive';
                    $user_data->save();
                }
        }
   
        
            
    }



    public function lucky_portal()
    {
       

        $data = DB::table('users')->select('id','payment_date')->orderBy('id')->get();
        $data2 = DB::table('lucky_portals')->select('user_id')->orderBy('id')->get();
     
        $id=$id2='';
        $list_array=array();
        foreach($data2 as $dd)
        {
           array_push($list_array,$dd->user_id);

        }
     
     
        
        foreach($data as $d)
        {
           $id=$d->id;
           if(!in_array($id,$list_array))
           {
            $direct_level_active_count=count(DB::table('users')  
                         ->where('sponserid', $id)
                         ->where('status','active')
                         ->select('id')
                        ->get());
         
           $fdate=$d->payment_date;
          
           $sdate=Carbon::now();
           $datetime1 = new DateTime($fdate);
           $datetime2 = new DateTime($sdate);
           $interval = $datetime1->diff($datetime2);
           $days = $interval->format('%a');
           
                if($days<=20 and $direct_level_active_count>=10)
                {
                    DB::table('lucky_portals')->insert([
                        'user_id' => $id,
                       'created_at'=>Carbon::now()
                    ]);
                }
               
           }
        }

    }


    public function user_renewel_status()
    {
        

        $user=DB::select(DB::raw('SELECT id,payment_date from users where user_type="user" '));
      
        foreach($user as $data)
        {
            $fdate=$data->payment_date;
            $sdate=Carbon::now();
            $datetime1 = new DateTime($fdate);
            $datetime2 = new DateTime($sdate);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');  
            if($days>=60)
            {
                
                $user = User::find($data->id);
                $user->status = 'deactive';
                $user->save();
            }  
            
        }

    }




}
