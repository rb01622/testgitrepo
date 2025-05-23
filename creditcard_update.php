<?php
session_start();
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
$get_token = $_SESSION['get_token'] ;
echo "get_token : ".$get_token."<br>";
$response_gatewaycustomerid = $_SESSION['response_gatewaycustomerid'] ;
echo "Customer  ID : ".$response_gatewaycustomerid."<br>";
?>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.stripe.com/v1/customers/$response_gatewaycustomerid",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "source=$get_token",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Bearer $secretkey",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 35",
    "Content-Type: application/x-www-form-urlencoded",
    "Host: api.stripe.com",
    "Postman-Token: 6fcd174c-7bcf-4183-9c0e-b3867156a103,3ea1484f-9c7c-41d5-ab03-731731dac7a7",
    "User-Agent: PostmanRuntime/7.15.2",
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
  header("Location: http://localhost/sugarcrm/subscription.php");
}
?>