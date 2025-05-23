<?php
session_start();
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
include('session.php');

$seesion  = $_SESSION['session_id'];

$api_key;
$api_root_url;
$zone_id;
$port;
$encode_out = '{"condition":"eq","name":"corent"}';
$tenantname =  urlencode($encode_out);
 $curl = curl_init(); 
 curl_setopt_array($curl, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/admin/accounts?account=$zone_id&child=true&q=$tenantname",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Postman-Token: db8baf01-4386-40ac-8d40-002c1c7f4c3d,b1a17ded-67a0-4982-af13-536944a56b50",
      "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	$response =  simplexml_load_string($response);
/*  echo "<pre>";
print_r($response);
echo "<pre>"; 
 */

$response_id = $response->accounts->account->id;
$_SESSION['response_id'] ="$response_id";
$response_name = $response->accounts->account->name;
$_SESSION['response_name'] ="$response_name";
$response_name_organizationname = $response->accounts->account->organizationname;
$response_lastname= $response->accounts->account->lastname;
$response_supportemail= $response->accounts->account->supportemail;
$response_addressline1= $response->accounts->account->addressline1;
$response_city= $response->accounts->account->city;
$response_state= $response->accounts->account->state;
$response_country= $response->accounts->account->country;
$_SESSION['response_country'] ="$response_country";
$response_postalcode= $response->accounts->account->postalcode;
$response_phonearea= $response->accounts->account->phonearea;
$response_phonenumber= $response->accounts->account->phonenumber;
$response_firstname= $response->accounts->account->firstname;
$response_lastname= $response->accounts->account->lastname;
$response_user_email= $response->accounts->account->user_email;
} 
?>
