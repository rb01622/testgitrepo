<?php
if ($_POST){
	$zone_name = $_POST['account_name'];

$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
$api_key;
$service_provider;
$surpaas_url;
$zone_id;
$product_id;
$root_name;
$api_root_url;
$port;
$xml = '<request><apikey>'.$api_key.'</apikey></request>';
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "$port",
  CURLOPT_URL => ''.$api_root_url.'/admin/sessions',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER=> false,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "$xml",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
	"content-type: application/xml",    
    "postman-token: 49c24481-f8cd-8169-1307-860316478f17"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

	  $session_id =  strip_tags( $response);
	  
}
$curl1 = curl_init();
$encode_out = '{"condition":"eq","name":"'.$zone_name.'"}';
$encode_result =  urlencode($encode_out);

curl_setopt_array($curl1, array(
  CURLOPT_PORT => "$port",
  CURLOPT_URL => ''.$api_root_url.'/admin/accounts?account='.$zone_id.''.'&child=true&q='.$encode_result.'',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 4ce78db6-0c16-50ef-1449-6737058ec5c7"
  ),
));

$response1 = curl_exec($curl1);
$err1 = curl_error($curl1);

curl_close($curl1);

if ($err1) {
  echo "cURL Error #:" . $err1;
} else {
	$response1 =  simplexml_load_string($response1);
    $get_response1 = $response1->accounts['totalrecord'];
}
/* if($get_response1 ==1)
{
	echo "Account name already exist"."</br>"."</br>";
}
else
{
	echo "Account name available"."</br>"."</br>";
	//header("Location: http://staging.corenttech.com/review/test/success.php");
} */

if($get_response1 ==1)
{
	echo "Yes";
	
}
else
{
	echo "No";
}
}

session_start();
$_SESSION['session'] = $session_id;   
?>