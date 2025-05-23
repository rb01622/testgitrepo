<?php
include('session.php');
echo $seesion  = $_SESSION['session_id'] ="$session_id";

echo $job_id = $_SESSION['job_id'] ;

$curl_status_job = curl_init();
 echo "Tenant ID : ".$response_product_ID = $_SESSION['response_product_ID'];

curl_setopt_array($curl_status_job, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/workflow/job/$job_id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Cookie: BALANCEID=.www8",
    "Host: prodops.corenttechnology.com",
    "Postman-Token: d5488a27-8312-43de-9e6c-1f38121c44bd,42409a9a-9097-4e79-b77f-528799b3abf7",
    "User-Agent: PostmanRuntime/7.15.2",
    "c_session_id: $seesion",
    "cache-control: no-cache"
  ),
));

$response_status_job = curl_exec($curl_status_job);
$err_status_job = curl_error($curl_status_job);

curl_close($curl_status_job);

if ($err_status_job) {
  echo "cURL Error #:" . $err_status_job;
} else {
    $response_status_job =  simplexml_load_string($response_status_job);
	echo "status:".$job_status_job = $response_status_job->status;
	
	sleep(120);
	header("Location: http://localhost/sugarcrm/subscription.php");
	
}
?>