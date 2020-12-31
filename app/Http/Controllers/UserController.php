<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use Session;
use App\Models\User;
use App\Models\Transaction;
use Carbon\Carbon;
use DateTime;
use DB;

class UserController extends Controller
{
    //

    
   public function __construct()
   {
       $this->middleware('auth');
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
}
