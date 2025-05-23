<?php

$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
/*  $account  = '58a16a7e-7bf9-4c8f-82ac-fccf2bb67b59'; */
$encode_out = "{ 'fl' : {'fc1': { n : 'marketPlaceType',ty:'ST', op: 'EQ', vl : ['saas']},'cond1' : 'AND','fc2': { n : 'saasBoxId',ty:'ST', op: 'NE', vl : ['NULL']}}}" ;
$zone_id;
///$encode_result =  urlencode($encode_out);
//echo "https://prodops.corenttechnology.com/ceapi/v2/billing/products?account=$zone_id&limit=50&offset=0&marketapp=true&q=$encode_result";
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://prodops.corenttechnology.com/ceapi/v2/billing/products?account=$zone_id&limit=50&offset=0&marketapp=true&q=$encode_result",
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
    "Postman-Token: 0bbdbfe8-a711-4910-93be-a9277218e1d4,65e913b8-cbd6-4d5f-a01b-b57a3f815917",
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
  print_r($response);
  echo "</pre>";
}
	
	?>