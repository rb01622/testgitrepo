<?php
include('session.php');
echo $seesion  = $_SESSION['session_id'] ="$session_id";

echo $job_id = $_SESSION['job_id'] ;


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://prodops.corenttechnology.com/ceapi/v2/workflow/job/$job_id",
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
    "Postman-Token: 7ec45586-6501-4fa6-a2d5-18815be2ff4a,697ea2f6-cf74-496b-9ead-779d4acbb830",
    "User-Agent: PostmanRuntime/7.15.2",
    "c_session_id: $seesion ",
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
	echo "status:".$response = $response->status;
	sleep(140);
	header("Location: http://localhost/sugarcrm/subscription.php");
}

?>