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
    return view('index');
});

Route::get('/test',[paymentController::class,'test'] );
Route::get('/sola',[paymentController::class,'sola'] );
//Route::get('/',[paymentController::class,'index'] );
Route::get('/ericlhenser',[paymentController::class,'ericlhenser'] );

Route::any('/payment_page',[paymentController::class,'payment'] );
Route::any('/verify-payment',[paymentController::class, 'verify']);
// Route::any('/paystack',[paymentController::class, 'paystack']);\
// Route::get('/verify-pay/reference')
Route::get('/verify-pay/{reference}',[paymentController::class, 'verifyPay']);
Route::post('postdata',[paymentController::class, 'postData']);


Route::get('/calc',function(){
 return view('calc');
});
   



 