<?php
session_start();
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
$api_root_url;
$zone_id;
include('session.php');
$response_id = $_SESSION['response_id'];
echo "Tenant ID : ".$response_id."<br>";

$response_product_ID = $_SESSION['response_product_ID'];

echo "Response_product_ID: ".$response_product_ID."<br>";

$seesion  = $_SESSION['session_id'] ="$session_id";
echo "seesion: ".$seesion."<br>";
echo "get_upgrade_product_id:".$get_upgrade_product_id  = $_GET['id'];



$response_gatewaycustomerid = $_SESSION['response_gatewaycustomerid'] ;
$response_subscription_id = $_SESSION['response_subscription_id'] ;

echo "response_gatewaycustomerid: ".$response_gatewaycustomerid."<br>";
echo "response_subscription_id: ".$response_subscription_id."<br>";


 $xml =  "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<input type=\"TENANTSUBSCRIPTIONUPDATE\">\r\n<account version=\"1.0\">\r\n<id>$response_id</id>\r\n</account>\r\n<billing>\r\n<subscription>\r\n<product>\r\n<id>$get_upgrade_product_id</id>\r\n</product>\r\n<subscriptionid action=\"upgrade\">$response_subscription_id</subscriptionid>\r\n<gatewaycustomerid>$response_gatewaycustomerid</gatewaycustomerid>\r\n</subscription>\r\n</billing>\r\n</input>\r\n";
 
 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/workflow/tenantsubscriptionupdate?account=$response_id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"$xml",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 382",
    "Content-Type: text/plain",
    "Cookie: BALANCEID=.www8",
    "Host: prodops.corenttechnology.com",
    "Postman-Token: c83b14dc-75f7-4a94-8754-0f4e3783080e,ef7fc802-d31f-42ca-996f-23479c3a7a41",
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
	$job_id = $response->id;
	echo "Job ID : ".$job_id;
	 $_SESSION['job_id'] ="$job_id"; 
	 sleep(30);
	 
	 header("Location: http://localhost/sugarcrm/subscription.php");
}


/* Get Job StatUs */

