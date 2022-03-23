<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paymentController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[paymentController::class,'index'] );

//Route::get('/',[paymentController::class,'index'] );

Route::any('/payment_page',[paymentController::class,'payment'] );
Route::any('/verify-payment',[paymentController::class, 'verify']);
// Route::any('/paystack',[paymentController::class, 'paystack']);\
// Route::get('/verify-pay/reference')
Route::get('/verify-pay/{reference}',[paymentController::class, 'verifyPay']);
Route::post('postdata',[paymentController::class, 'postData']);


Route::get('/calc',function(){
 return view('calc');
});
   



 