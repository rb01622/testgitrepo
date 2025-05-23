<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL =>"https://prodops.corenttechnology.com/ceapi/v2/admin/accounts?account=6b63c8cd-83ad-4690-9f71-889bf728c041&child=true&q=%7B%22condition%22%3A%22eq%22%2C%22name%22%3A%22R2admin%22%7D",
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
    "Cookie: BALANCEID=.www4",
    "Host: prodops.corenttechnology.com",
    "Postman-Token: d412e154-f411-4004-a12e-6844424e2751,7d308271-5fe4-4eb5-8f01-d902927f0023",
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
  echo $response;
  	echo "<pre>";
  print_r($response);
  echo "</pre>"; 
}