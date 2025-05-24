<?php
session_start();
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
$api_key;
$api_root_url;
$zone_id;
$port;
$xml = '<request><Rajesh>'.$api_key.'</apikey></request>';


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "$port",
  CURLOPT_URL => ''.$api_root_url.'/ceapi/v2/admin/sessions',
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
	  $_SESSION['session_id'] ="$session_id";
}

?>