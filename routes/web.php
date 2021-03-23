<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registrationcontroller;
use App\Http\Controllers\Subregistcontroller;
use App\Http\Controllers\ScheduleTaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\InvoiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/attempted_task',[UserController::class,'attempted_task']);
Route::post('/submit_task',[Registrationcontroller::class,'submit_task']);
Route::get('/', function () {
    return view('login');
});
Route::get('/withdraw',[UserController::class,'withdraw']);

Route::get('/withdraw_details',[UserController::class,'withdraw_details']);
Route::get('/wallet_report',[UserController::class,'wallet_report']);

Route::post('/withdraw_amount',[UserController::class,'withdraw_amount']);

Route::get('/front', function () {
    return view('login');
})->name('front');

Route::get('/enquiry',function(){
    return view('enquiry');
});

Route::post('send_email',[MailController::class,'sendEmail']);

Route::post('submit_enquiry',[EnquiryController::class,'enquiry']);


Route::get('/homepage', function () {
    return view('index');
});

Route::get('/registration',[Registrationcontroller::class,'registration']);

Route::get('/epin', function () {
    return view('epin');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('home','home');

Route::get('/subregist', function () {
    return view('subregist');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/profile',function(){
    return view('profile');
});

// Route::get('/my_direct', function () {
//     return view('cards');
// });

Route::get('/my_direct',[Registrationcontroller::class,'my_direct']);

Route::get('/navbar', function () {
    $data = Auth::user()->name;
    $request->session()->put('user_name',$data);
    return view('navbar',['user_name' => $data]);
});
// Route::get('/profile', function () {
//     return view('profile');
// });


// Route::get('/logout', function () {
//     return view('welcome');
// });

Route::get('/login_user',function(){
    return view('login');
});

Route::get('/policy',function(){
    return view('policy');
});

Route::get('/portal',function(){
    return view('portal');
});

Route::get('/task',function(){
    return view('task');
});

Route::get('/test',[Registrationcontroller::class,'test']);
Route::get('/test1',[Registrationcontroller::class,'test1']);


Route::get('/topup',[UserController::class,'topup']);

Route::POST('/payment_initiate_request',[UserController::class,'Initiate']);

Route::POST('/payment_success',[UserController::class,'payment_success']);



Route::get('/my_direct_report',[Registrationcontroller::class,'my_direct_report']);

Route::get('/mywallet',[Registrationcontroller::class,'mywalllet_list']);

Route::GET('/uploadkyc',[Registrationcontroller::class,'uploadkyc']);
Route::POST('/upload_kyc_details',[Registrationcontroller::class,'upload_kyc_detail'])->name('update_kyc.created');

Route::GET('/login',[Registrationcontroller::class,'login_user']);
// First Registration Page
Route::GET('/myprofile',[Registrationcontroller::class,'viewProfile']);
Route::GET('/showprofile',[Registrationcontroller::class,'showProfile']);
Route::POST('/saveproile',[Registrationcontroller::class,'createProfile'])->name('profile.created');
// Route::get('/update',[Registrationcontroller::class,'updateProfile']);
Route::POST('/Profile-updated',[Registrationcontroller::class,'insertUpdate'])->name('profileUpdate.created');


//Sub Registration Page

Route::GET('/subprofile',[Subregistcontroller::class,'viewSubProfile'])->middleware('auth');
Route::POST('/savesubproile',[Subregistcontroller::class,'createSubProfile'])->name('subprofile.created');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('/invoices',[InvoiceController::class,'invoice_report']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/contact','contact');
Route::view('/term','termsandcondition');
