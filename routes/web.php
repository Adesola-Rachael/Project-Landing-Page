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

Route::get('/',[paymentController::class,'index'] );
Route::get('/test',[paymentController::class,'test'] );
Route::get('/sola',[paymentController::class,'sola'] );
//Route::get('/',[paymentController::class,'index'] );
Route::get('/ericlhenser',[paymentController::class,'ericlhenser'] );
// for pascal
Route::get('/pascal_marketing',[paymentController::class,'pascalMarketing'] );

Route::get('/caleb',[paymentController::class,'caleb'] );
Route::get('/kelvin',[paymentController::class,'kelvin'] );
Route::get('/kel',[paymentController::class,'kel'] );
Route::get('/kelvinogunbiyi',[paymentController::class,'kelvinogunbiyi'] );


Route::any('/payment_page',[paymentController::class,'payment'] );
Route::any('/verify-payment',[paymentController::class, 'verify']);
// Route::any('/paystack',[paymentController::class, 'paystack']);\
// Route::get('/verify-pay/reference')
Route::get('/verify-pay/{reference}',[paymentController::class, 'verifyPay']);
Route::post('postdata',[paymentController::class, 'postData']);

Route::get('/car_tracking_installation',[paymentController::class,'carTracker'] );
Route::get('/health_solution',[paymentController::class,'health'] );

Route::get('/free_business_idea_ebook',[paymentController::class,'freeGuide'] );

Route::get('/download_free_guide',[paymentController::class,'downloadguide'] );

Route::get('/calc',function(){
 return view('calc');
});
   



 