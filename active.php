<?php
session_start();
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
include('session.php');
$api_key;
$api_root_url;
$zone_id;
$port;
//$get_active_status  = $_GET['id'];
//echo "get_active_status :".$get_active_status;

$response_id = $_SESSION['response_id'];
echo "Tenant ID : ".$response_id."<br>";
$seesion  = $_SESSION['session_id'] ="$session_id";
echo "seesion: ".$seesion."<br>";
echo "zone_ID:".$zone_id;"<br>";



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://prodops.corenttechnology.com/ceapi/v2/workflow/tenantmanagement?account=$response_id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<input type=\"tenantmanagement\">\r\n<tenant version=\"1.0\">\r\n<account_id>$response_id</account_id>\r\n<parent_id>$zone_id</parent_id>\r\n<action>activate</action>\r\n</tenant>\r\n</input>\r\n",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 269",
    "Content-Type: text/plain",
    "Cookie: BALANCEID=.www8",
    "Host: prodops.corenttechnology.com",
    "Postman-Token: 9f791188-058b-475e-a35e-72c705ac359c,f3edfb79-ada0-48c1-bdd0-20ddbf6c3211",
    "User-Agent: PostmanRuntime/7.15.2",
    "c_session_id: $seesion",
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
  echo "<pre>";
  print_r($response);
  echo "</pre>";
	$job_id = $response->id;
	
	echo "Job ID  Active : ".$job_id;
	$_SESSION['job_id'] ="$job_id"; 
	header("Location: http://localhost/sugarcrm/active_job.php");
}



?>