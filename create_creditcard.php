<?php
session_start();
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
$response_gatewaycustomerid = $_SESSION['response_gatewaycustomerid'] ;
echo "Customer  ID : ".$response_gatewaycustomerid."<br>";

 if(isset($_POST['submit']))
{
	
$owner  = $_POST['owner'];
$cvv  = $_POST['cvv'];
$cardnumber  = $_POST['cardnumber'];
$expiredate  = $_POST['expiredate'];
$expireyear  = $_POST['expireyear'];
$email = $_POST['email'];
$address1  = $_POST['address1'];
$city  = $_POST['city'];
$state  = $_POST['state'];
$country  = $_POST['country'];
$zipcode  = $_POST['zipcode'];
echo $publishablekey;
echo $secretkey;

echo "owner : ".$owner."<br>";
echo "cvv : ".$cvv."<br>";
echo "cardnumber : ".$cardnumber."<br>";
echo "expiredate : ".$expiredate."<br>";
echo "expireyear : ".$expireyear."<br>";
echo "email : ".$email ."<br>";
echo "address1 : ".$address1."<br>";
echo "city : ".$city."<br>";
echo "state : ".$state."<br>";
echo "state : ".$country."<br>";
echo "zipcode : ".$zipcode."<br>";

 } 


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.stripe.com/v1/tokens",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 500,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "card%5Bname%5D=$owner&card%5Baddress_line1%5D=$address1&card%5Baddress_city%5D=$city&card%5Baddress_state%5D=$state&card%5Baddress_zip%5D=$zipcode&card%5Bnumber%5D=$cardnumber&card%5Bexp_month%5D=$expiredate&card%5Bexp_year%5D=$expireyear&card%5Bcvc%5D=$cvv",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Bearer $secretkey",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: application/x-www-form-urlencoded",
    "Host: api.stripe.com",
    "Postman-Token: 5972e892-cf6a-424c-afcd-db63fd2b5de1,d26000fd-e983-4814-816b-0667a4b5aa1b",
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
  $get_token = json_decode($response, true);
    echo $_SESSION['get_token'] =$get_token['id'];
	header("Location: http://localhost/sugarcrm/creditcard_update.php");
  
}
?>