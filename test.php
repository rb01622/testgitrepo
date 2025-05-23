<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://prodops.corenttechnology.com/ceapi/v2/admin/accounts?account=58a16a7e-7bf9-4c8f-82ac-fccf2bb67b59&child=true&q=%7B%22condition%22%3A%22eq%22%2C%22name%22%3A%22demo1%22%7D",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 8b53f159-e121-8364-1daf-d11eb7fe6b87"
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

?>