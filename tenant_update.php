<?php
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
include('session.php');
$seesion  = $_SESSION['session_id'] ="$session_id";
$response_id = $_SESSION['response_id'];


/*  if(isset($_POST['submit']))
{*/
$company_name  = $_GET['company_name'];
$company_email  = $_GET['company_email'];
$address_one = $_GET['address_one'];
$city  = $_GET['city'];
$state_name  = $_GET['state_name'];
$postal_code  = $_GET['postal_code'];
$country  = $_GET['country'];
$phonearea  = $_GET['phonearea'];
$phone  = $_GET['phone'];
$user_email  = $_GET['user_email'];

echo "tenant_name:".$tenant_name."</br>";
echo "company_name:".$company_name."</br>";
echo "tenant_firstname:".$tenant_firstname."</br>";
echo "tenant_lastname:".$tenant_lastname."</br>";
echo "company_email:".$company_email."</br>";
echo "address_one:".$address_one."</br>";
echo "city:".$city."</br>";
echo "state_name:".$state_name."</br>";
echo "postal_code:".$postal_code."</br>";
echo "country:".$country."</br>";
echo "phonearea:".$phonearea."</br>";
echo "phone:".$phone."</br>";
echo "user_email:".$user_email."</br>";


/* } */ 

$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<account>\r\n<id>$response_id</id>\r\n<phonenumber>$phone</phonenumber>\r\n<city>$city</city>\r\n<state>$state_name</state>\r\n<country>$country</country>\r\n<postalcode>$postal_code</postalcode>\r\n<addressline1><![CDATA[$address_one]]></addressline1>\r\n<addressline2>
<![CDATA[R2 info park line]]></addressline2>\r\n<organizationname><![CDATA[$company_name]]></organizationname>\r\n<phonearea>$phonearea</phonearea>\r\n<noreplyemail><![CDATA[$user_email]]></noreplyemail>\r\n<supportemail><![CDATA[$user_email]]></supportemail>\r\n</account>";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/admin/accounts?account=$response_id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "$xml",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: text/plain",
    "Cookie: BALANCEID=.www8",
    "Host: prodops.corenttechnology.com",
    "Postman-Token: 65499b16-7755-4921-a6eb-a36bef90fc8c,c24ee0e5-d75d-4eef-bcc8-a5637eb96bc1",
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
	header("Location: http://localhost/sugarcrm/tenant.php");
}
echo '<h5><a href ="/sugarcrm/get_tenant.php"> <<  Back to Tenant</a></h5>';