<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use Session;
use App\Models\User;
use App\Models\Withdraw_request;
use App\Models\Amount;
use App\Models\Transaction;
use Carbon\Carbon;
use DateTime;
use DB;
use Validator;
use Redirect;
use Auth;

class UserController extends Controller
{
    //

    
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function withdraw_details()
   {
       $id=session()->get('id');
       $data['details']= DB::table('withdraw_requests')
                         ->where("paid_status","paid")
                         ->where("user_id",$id)
                        ->get();
     
       return view("withdraw_details",$data);
   }

   public function attempted_task()
   {
        $id=session()->get('id');
        $data['details']= DB::table('tasks')
                        ->where("user_id",$id)
                        ->where("status","approved")
                        ->orderBy('id', 'DESC')
                        ->get();
    
        return view("attempted_task",$data);
   }

   public function wallet_report()
   {
       $id=session()->get('id');
       $data['details']= DB::table('wallet_amounts')
                         ->where("user_id",$id)
                         ->orderBy('id', 'DESC')
                        ->get();
     
       return view("wallet_report",$data);
   }
   
    public function topup()
    {
        $id=session()->get('id');
        $data['user']=DB::select('select name,email,mobile from users where id = ?', array($id));
        
        return view('topup',$data);
    }


    private $razorPayId='rzp_test_mP8FZcgOjAL2bQ';
    private $razorPayKey='FN2u1ERQwgWGeU3SFIUOcPkh';
    public function Initiate(Request $request)
    {
        

         //return $request->all();
         $api = new Api($this->razorPayId, $this->razorPayKey);
         $reciept_id=Str::random(20);
         $order = $api->order->create(array(
            'receipt' => $reciept_id,
            'amount' => 950*100,
            'currency' => 'INR'
            )
          );

          $response=[
                'orderId'=>$order['id'],
                'razorPayId'=>$this->razorPayId,
                'amount'=>950*100,
                'name'=>$request->name,
                'currency' => 'INR',
                'email'=>$request->email,
                'contanctNumber'=>$request->mobile,
                'description'=>'Testing Description'

          ];

          return view('payment_page',compact('response'));
    }


    public function payment_success(Request $request)
    {
        
       $signiture_status= $this->SignitureVerify(
            $request->all()['rzp_signiture'],
            $request->all()['rzp_paymentid'],
            $request->all()['orderid']

        );
       
        if($signiture_status==true)
        {
            //payment success 
           // return $request->all();
            $id=session()->get('id');
           

            DB::table('transactions')->insert([
                'user_id' => $id,
                'payment_amount'=>$request->amount,
                'payment_date'=>Carbon::now(),
                'order_id'=>$request->orderid,
                'payment_id'=>$request->rzp_paymentid,
                
            ]);
            $user=User::find($id);
            $user->status='active';
            $user->	payment_status='true';
            $user->	payment_date=Carbon::now();
            $user->save();
            return redirect('/topup')->with('message','Payment Succesfully Completed');

        }
        else {
          echo "payment fail";
        }
    }

    private function SignitureVerify($_signiture,$_paymentId,$_orderId)
    {
        //return $_paymentId;
        try{
            $api = new Api($this->razorPayId, $this->razorPayKey);
            $attributes  = array('razorpay_signature'  => $_signiture,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId);
           
            $order  = $api->utility->verifyPaymentSignature($attributes);
          
            return true;
        }
        catch(\Exception $e)
        {
            return false;
        }
    }
    public function withdraw_data()
    {
        $id=session()->get('id');
        $da['amount']=Amount::find($id);
         $da['direct_user']=count(DB::select(DB::raw('SELECT id from users where sponserid=:id and status=:status1'),array(
         'id'=>$id,
         'status1'=>'active',
         )));
         return $da;
    }
    public function withdraw()
    {
        $data=$this->withdraw_data();
        return view('withdraw',$data);
    }

    public function withdraw_amount(Request $request)
    {
        $validatedData=Validator::make($request->all(),[
            'amount'=>'required|numeric',
        ]);
        $data=$this->withdraw_data();
        $user_data=$data["amount"];
        $total_amount=$user_data['total_amount'];
        $user_count=$data['direct_user'];
       
        if($validatedData->fails())
        {
            return Redirect::back()->withErrors($validatedData);
        }
        else{
            if($total_amount>=500 and $user_count>=2)
            {
                $withdraw_amount=$request->amount;
                if($withdraw_amount>$total_amount)
                {
                    return Redirect::back()->with('amount_error', 'Withdraw amount may not be greater than Total Amount');
                }
                else {
                    
                    $user=new Withdraw_request;
                    $user->user_id=Auth::user()->id;
                    $user->mobile=Auth::user()->mobile;
                    $user->user_name=Auth::user()->name;
                    $user->Request_amount=$withdraw_amount;
                    $user->paid_status="unpaid";
                    $user->save();
                    return Redirect::back()->with('success', 'Your withdraw amount request send successfully');    
                }
                
                
            }
            elseif($total_amount<500)
            {
               
                return Redirect::back()->with('total_amount', 'Available amount is less than 500');
            }
            elseif($user_count<2)
            {
                return Redirect::back()->with('user_count', 'Your direct user count is less than 2 please reffer more user');
            }
        }
       
    }


    
}
