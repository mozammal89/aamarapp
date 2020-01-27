<?php

namespace App\Http\Controllers\Recharge;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Recharge;
use SoapClient;
class RechargeController extends Controller
{


	 function redirect_to_merchant($url) {
        
        ?>
        <html xmlns        ="http://www.w3.org/1999/xhtml">
        <head><script type ="text/javascript">
        function closethisasap() { document.forms["redirectpost"].submit(); } 
        </script></head>
        <body onLoad       ="closethisasap();">
        
        <form name         ="redirectpost" method="post" action="<?php echo 'https://secure.aamarpay.com/'.$url; ?>"></form>
        </body>
        </html>
        <?php   
        exit;
        } 
    public function RechageRequest(Request $request)
{




		$rand_number=(int) (time()/3600);



   	$reg_info = new Recharge;
   	$reg_info ->user_id= 0;
   	$reg_info ->mobile_no= $request->mobile_number;
   	$reg_info ->operator_type= $request->rechargeBillpayment;
   	$reg_info ->sub_type= $request->op_time;
   	$reg_info ->amount= $request->amount;
   	$reg_info ->trx_id= $rand_number;
   	$reg_info ->save();


   	$c = new soapclient('https://www.paywellonline.com/National_topupsoap/paywellservice.php?wsdl');
                    $username= "aamarpay"; //username provide paywell
                    $pass = "2015"; //password provide paywell
                    $crid = 113455877; //unique id come from client end
                    $rid = "C12160030886"; //provide by paywell
                    $msisdn = $reg_info->mobile_no;
                    $amount = $reg_info->amount;
                    $con = $reg_info->operator_type;
                    
                    $res = $c->initiateRecharge($username, $pass, $crid, $msisdn, $amount, $con, $rid);
                    $res=(array)$res;
            
                    $cwid=$res['cwid'];
                    $status_code=$res['status_code'];

                    if($status_code==200){

                    	    $get = $c->commitRecharge($cwid,$username,$pass);

                            $get=(array)$get;

                            $main_status_code=$get['status_code'];

                            if($main_status_code==200){

                            		$user_rech->status=1;
                            		$user_rech->save();

                            		return 200;
                            }
                    }



return 200;

exit;



   	$url = 'https://secure.aamarpay.com/request.php';
$fields = array(
    'store_id' => 'aamarpaytest', 'amount' => $request->amount, 'payment_type' => 'VISA',
    'currency' => 'BDT', 'tran_id' => $rand_number,
    'cus_name' =>"test" , 'cus_email' => 'abc@abc.com',
    'cus_add1' => 'testaddress', 'cus_add2' => 'Mohakhali DOHS',
    'cus_city' => 'Dhaka', 'cus_state' => 'Dhaka', 'cus_postcode' => '1206',
    'cus_country' => 'Bangladesh', 'cus_phone' => $request->mobile_number,
    'cus_fax' => 'Not¬Applicable', 'ship_name' => 'Mr. XYZ',
    'ship_add1' => 'House B-121, Road 21', 'ship_add2' => 'Mohakhali',
    'ship_city' => 'Dhaka', 'ship_state' => 'Dhaka',
    'ship_postcode' => '1212', 'ship_country' => 'Bangladesh',   
    'desc' => 'T-Shirt', 'success_url' => 'http://aamarapps.test/recharge/success',
    'fail_url' => 'http://aamarapps.test/recharge/fail',
    'cancel_url' => 'http://aamarapps.test/recharge/cancel',
    'opt_a' => 'Optional Value A', 'opt_b' => 'Optional Value B',
    'opt_c' => 'Optional Value C', 'opt_d' => 'Optional Value D',
    'signature_key' => 'dbb74894e82415a2f7ff0ec3a97e4183');
$fields_string='';
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
$fields_string = rtrim($fields_string, '&'); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_POST, count($fields)); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$url_forward = str_replace('"', '', stripslashes(curl_exec($ch)));  
curl_close($ch); 
$this->redirect_to_merchant($url_forward);




   	  
   }


   public function PaymentCheckout(){


   }

   public function RechageSuccess(Recharge $request){



   	$trans_id=$request->mer_txnid;


   	$user_rech= Recharge::where('trx_id',$trans_id)->first();
   	if($user_rech){


   			$c = new soapclient('https://www.paywellonline.com/National_topupsoap/paywellservice.php?wsdl');
                    $username= "aamarpay"; //username provide paywell
                    $pass = "2015"; //password provide paywell
                    $crid = $trans_id; //unique id come from client end
                    $rid = "C12160030886"; //provide by paywell
                    $msisdn = $user_rech->mobile_no;
                    $amount = $user_rech->amount;
                    $con = $user_rech->operator_type;
                    
                    $res = $c->initiateRecharge($username, $pass, $crid, $msisdn, $amount, $con, $rid);
                    $res=(array)$res;
            
                    $cwid=$res['cwid'];
                    $status_code=$res['status_code'];

                    if($status_code==200){

                    	    $get = $c->commitRecharge($cwid,$username,$pass);

                            $get=(array)$get;

                            $main_status_code=$get['status_code'];

                            if($main_status_code==200){

                            		$user_rech->status=1;
                            		$user_rech->save();
                            }
                    }


   	}



   
   }



    public function RechageFail(Recharge $request){

    		

   	 $trans_id=$request->mer_txnid;
return  $trans_id;


   	 exit;


   	$user_rech= Recharge::where('trx_id',$trans_id)->first();

   	if($user_rech){


   			$c = new soapclient('https://www.paywellonline.com/National_topupsoap/paywellservice.php?wsdl');
                    $username= "aamarpay"; //username provide paywell
                    $pass = "2015"; //password provide paywell
                    $crid = $trans_id; //unique id come from client end
                    $rid = "C12160030886"; //provide by paywell
                    $msisdn = $user_rech->mobile_no;
                    $amount = $user_rech->amount;
                    $con = $type;
                    
                    $res = $c->initiateRecharge($username, $pass, $crid, $msisdn, $amount, $con, $rid);
                    $res=(array)$res;
            
                    $cwid=$res['cwid'];
                    $status_code=$res['status_code'];

                    if($status_code==200){

                    	    $get = $c->commitRecharge($cwid,$username,$pass);

                            $get=(array)$get;

                            $main_status_code=$get['status_code'];

                            if($main_status_code==200){

                            		$user_rech->status=1;
                            		$user_rech->save();
                            }
                    }


   	}



   	
   }


}
