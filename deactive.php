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


 $xml =  "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<input type=\"tenantmanagement\">\r\n<tenant version=\"1.0\">\r\n<account_id>$response_id</account_id>\r\n<parent_id>$zone_id</parent_id>\r\n<action>deactivate</action>\r\n</tenant>\r\n</input>\r\n";
 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/workflow/tenantmanagement?account=$response_id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "$xml",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 271",
    "Content-Type: text/plain",
    "Cookie: BALANCEID=.www8",
    "Host: prodops.corenttechnology.com",
    "Postman-Token: 8da58999-5ee4-4fe8-a512-ef1d360d271e,60340f19-e2de-462f-b60a-bfcb7b13ea01",
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
  echo $response;
  $response =  simplexml_load_string($response);
  echo "<pre>";
  print_r($response);
  echo "</pre>";
	$job_id = $response->id;
	echo "Job ID  0 : ".$job_id."<br>";
	echo $_SESSION['job_id'] ="$job_id"; 
		header("Location: http://localhost/sugarcrm/deactive_job.php");
}


?>