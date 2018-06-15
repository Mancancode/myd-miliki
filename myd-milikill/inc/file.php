<?php
 include_once 'dbc.php';
$ref = $_POST['payment'];
$amount = $_POST['amount'] / 100;
$email = $_POST['email'];

$date = date('Y-m-d');
	$result = array();
//The parameter after verify/ is the transaction reference to be verified
$url = 'https://api.paystack.co/transaction/verify/'.$ref.'';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
  $ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer sk_test_f5a0f23220686a8cbfdd81911f42eb92997ebc51']
);
$request = curl_exec($ch);
if(curl_error($ch)){
 echo 'error:' . curl_error($ch);
 }
curl_close($ch);

if ($request) {
  $result = json_decode($request, true);
}

if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {

	$query=mysqli_query($con, "UPDATE club_org_reg SET status=1,date_created='$date',amount='$amount' WHERE email='$email' ");
	if($query == true){
		echo 'done';
	}else{
	 echo 'Failed';
	}
	//Perform necessary action
}else{
  echo "Transaction was unsuccessful";
}


?>