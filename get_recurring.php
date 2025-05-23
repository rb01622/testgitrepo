<?php
session_start();
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
include('session.php');
$api_root_url;
$response_product_ID = $_SESSION['response_product_ID'];


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/billing/products?account=$zone_id&id=$response_product_ID",
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
    "Postman-Token: 127a87d7-5080-407b-9187-c0597c82b91f,c7b5c487-94c7-4b71-a554-1785020253da",
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
	$response =  simplexml_load_string($response);
  echo "<pre>";
  //print_r($response);
  echo "</pre>";
$description = $response->product->description;
$recurringamount = $response->product->amount;
}
?>