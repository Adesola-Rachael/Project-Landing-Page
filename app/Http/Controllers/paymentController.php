<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
use Response;
// use Illuminate\Support\Facades\Mail;
class paymentController extends Controller
{
    public function payment(Request $request){
       return  view('payment_page');
    }
    public function ericlhenser(){
      return  view('ericlhenser');
   }
   public function pascalMarketing(){
    return  view('pascal_marketing');
 }
 public function freeGuide(){
  return  view('free_business_idea_ebook');
}
public function downloadguide(){
  return  view('download_free_guide');
}
public function home_tutor(){
  return  view('home_tutor');
}

    public function index(){
      // $clientIP = request()->ip();
      // $newIp=rand().$clientIP ;
      // $msg=$newIp.'Visited your website landing page';
      // $send=Mail::send("gtreasure162@gmail.com","Landing Page Visit",$msg);
      // $send2=Mail::to("gtreasure162@gmail.com","Landing Page Visit",$msg);
      return  view('index');
      
      
   }
   public function test(){
    return  view('test');
 }
 public function sola(){
  return  view('sola');
}
public function caleb(){
  return  view('caleb');
}
public function kelvin(){
  return  view('kelvin');
}
public function kel(){
  return  view('kel');
}
public function kelvinogunbiyi(){
  return  view('kelvinogunbiyi');
}
public function carTracker(){
  return  view('car_tracking_installation');
}
public function health(){
  return  view('health_solution');
}
  
    //public function verify(Request $request){
      //return $request->transaction_id;
      //     $curl = curl_init();
  
      //     curl_setopt_array($curl, array(
      //       CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$request->transaction_id}/verify",
      //       CURLOPT_RETURNTRANSFER => true,
      //       CURLOPT_ENCODING => "",
      //       CURLOPT_MAXREDIRS => 10,
      //       CURLOPT_TIMEOUT => 0,
      //       CURLOPT_FOLLOWLOCATION => true,
      //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      //       CURLOPT_CUSTOMREQUEST => "GET",
      //       CURLOPT_HTTPHEADER => array(
      //         "Content-Type: application/json",
      //         "Authorization: Bearer FLWSECK_TEST-94d3492e76e7a3f372c06f729924d07d-X" 
      //       ),
      //     ));
          
      //     $response = curl_exec($curl);
      //     curl_close($curl);
      //     $res= json_decode($response); 
      //     return [$res];
     // }






    public function verify(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$request->transaction_id}/verify",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer FLWSECK_TEST-94d3492e76e7a3f372c06f729924d07d-X" 
          ),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        $res= json_decode($response); 
        return [$res];
    }
    
    // public function paystack(Request $request){
    //     return view('paystack');
    // }

    public function verifyPay($reference){
        $sec="sk_test_3760a9d43adad1ff1322f1313557f84f4695368a";
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
        //   for offline only
           CURLOPT_SSL_VERIFYHOST=>0,
           CURLOPT_SSL_VERIFYPEER=>0,
        // End of  for offline only
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer $sec",
            "Cache-Control: no-cache",
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $new_data=json_decode($response);
        return ($new_data );
    }


  //   public function verifyPay($reference){
     
  //     return $reference;
      
  // }


    // sending populating database with transaction data
    public function postData(Request $request) {
        $pay= new payment();
        $pay=payment::$request->all();
        if($pay){
           return Response::json(['success' => true ,'message'=>'Success','status'=> 200]);

        }return Response::json(['success' => false ,'message'=>'Failed','status'=> 400]);

    }
}
