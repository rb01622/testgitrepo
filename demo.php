<?php
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
$resolveProductId = '{"condition":"eq","name":"demo1"}';


  $curl_AR1 = curl_init();
curl_setopt_array($curl_AR1, array(
  CURLOPT_URL =>'https://prodops.corenttechnology.com/ceapi/v2/admin/account=58a16a7e-7bf9-4c8f-82ac-fccf2bb67b59&child=true&q=',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 2b6589ef-5c4d-8eea-4745-87a8e76d1143"
  ),
));
$response_AR1 = curl_exec($curl_AR1);
$err_AR1 = curl_error($curl_AR1);
curl_close($curl_AR1);
if ($err_AR1) {
  echo "cURL Error #:" . $err_AR1;
} else {
	echo "sdfsdf";
	$response_AR1 =  simplexml_load_string($response_AR1);
	
	
	?>