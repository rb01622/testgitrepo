<?php
session_start();
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
include('session.php');
include('get_tenant.php');
include('get_recurring.php');

$api_key;
$api_root_url;
$zone_id."<br>";
$port;
$tenantname = $_SESSION['response_name'];
$seesion  = $_SESSION['session_id'];
$response_id = $_SESSION['response_id'];

//echo "$api_root_url/ceapi/v2/billing/subscriptions?account=$response_id&limit=10&offset=0";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/billing/subscriptions?account=$response_id&limit=10&offset=0",
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
    "Postman-Token: 3a33c82a-cc20-437e-8184-e4fd3c267f54,477473b1-fc69-4c1b-8e67-8d95da808017",
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

//echo "<pre>";
//print_r($response);
//echo "<pre>" ; 
$response_product_ID = $response->subscriptions->subscription->product->id;
$_SESSION['response_product_ID'] ="$response_product_ID"; 
$response_name = $response->subscriptions->subscription->name;
$response_subscription_id = $response->subscriptions->subscription->id;
$response_usageperiod = $response->subscriptions->subscription->metadata->usageperiod;
$response_status= $response->subscriptions->subscription->status;
$response_message= $response->subscriptions->subscription->message;
//echo "message : ".$response_message;

 
$response_durationtype = $response->subscriptions->subscription->metadata->durationtype;
$response_nextBillingAt = $response->subscriptions->subscription->metadata->nextBillingAt;
$response_initialsetupfee = $response->subscriptions->subscription->metadata->initialsetupfee;
$response_gatewaycustomerid = $response->subscriptions->subscription->gatewaycustomerid;
$_SESSION['response_gatewaycustomerid'] ="$response_gatewaycustomerid"; 
$_SESSION['response_subscription_id'] ="$response_subscription_id";


}
?>
<style>
.fadeWrapper {background:rgba(0,0,0,.4);height:100%;position:fixed;text-align:center;top:0;width:100%;z-index:9999 !important;}
.inprogloadinner {background-color: #fff;box-shadow: 10px 10px 60px #555;display: inline-block;height: auto;max-width: 551px;min-height: 100px;vertical-align: middle;width: 35%;position: relative;border-radius: 8px;padding: 15px 5%;text-align:center;margin-top:20%;z-index:10000 !important;}
.inprogloadinner p {color:#333;font-size:15px;margin-top:15px;}
</style>
<div id="inprogload" class="fadeWrapper" style="display:none;">
	<div class="inprogloadinner">
		<p>Please Wait... Deactivating Tenant inprogress...</p>
		<p style="color:red;font-size:13px;">Note: After deactivation, Tenant cannot login to SurPaaS<sup>&reg;</sup> and access the application.</p>
		<img src="cache/images/loading-icon.gif" title="" style="margin-top:10px;"/>
		<!--p>Selected Tenant has been deactivated successfully and notified to production@corenttech.com</p-->
	</div>
</div>
<div id="inprogloadAct" class="fadeWrapper" style="display:none;">
	<div class="inprogloadinner">
		<p>Please Wait...  Activating Tenant inprogress...</p>
		<img src="cache/images/loading-icon.gif" title="" style="margin-top:10px;"/>
		<!--p>Selected Tenant has been deactivated successfully and notified to production@corenttech.com</p-->
	</div>
</div>
<table align="left" border="0" width="70%" cellspacing="0" cellpadding="0" style="border-color: #EEEEEE !important;border-radius: 5px;padding: 10px 18px 0px 0px;background: #EEEEEE !important;margin-right: 10px;margin: 13px 13px 13px 13px;">
                            <tbody><tr>
                                <td>
                                    <table align="left">
                                        <tbody><tr>
                                            <td align="left" valign="top" width="131px" height="20px" style="padding: 5px;">Subscription Plan Name
                                            </td>
                                            <td align="left" valign="top" height="20px" style="padding: 5px;">: <span class="gui-inline-top-header"><?php echo $response_name;?></span>
                                            </td>
                                        </tr>
                                            <tr>
                                                <td align="left" valign="top" height="20px" style="padding: 5px;">Billing Cycle 
                                                </td>
                                                <td align="left" valign="top" height="20px" style="padding: 5px;">: <?php echo $response_usageperiod;?>

                                                </td>
                                            </tr>
                                        <tr>
                                                <td align="left" valign="top" height="20px" style="padding: 5px;">Expiry Date                                    
                                                </td>
                                                <td align="left" valign="top" height="20px" style="padding: 5px;">:  <?php echo $response_durationtype;?> Expires
                                                </td>
                                        </tr>

                                        <tr>
                                            <td align="left" valign="top" height="20px" style="padding: 5px;">Validity
                                            </td>
                                            <td align="left" valign="top" height="20px" style="padding: 5px;">
                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody><tr>
                                                        <td align="left">: Unlimited
                                                        </td>

                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" valign="top" height="20px" style="padding: 5px;padding-bottom: 0px;">Gateway Customer ID
                                            </td>
                                            <td align="left" valign="top" height="20px" style="padding: 5px;padding-bottom: 0px;">
                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody><tr>
                                                        <td align="left">: <?php echo $response_gatewaycustomerid;?>
                                                        </td>

                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" valign="top" height="20px" style="padding: 5px;padding-bottom: 0px;">Description

                                            </td>
                                            <td align="left" valign="top" height="20px" style="padding: 5px;padding-bottom: 0px;">
                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody><tr>     
                                                        <td align="left">: <?php echo $description;?></span>
                                                        </td>

                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
										 <tr>
                                            <td align="left" valign="top" height="20px" style="padding: 5px;padding-bottom: 0px;">Tenant Active
                                            </td>
                                            <td align="left" valign="top" height="20px" style="padding: 5px;padding-bottom: 0px;">
                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody><tr>
                                                        <td align="left">: <?php echo $response_status;?>
                                                        </td>

                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
										
                                    </tbody></table>
                                </td>
                                    <td width="30%"><span id="nextBillingTenant">
                                                <div style="width: 217px;height: 160px;background-color:#ffffff ">
                                                    <table width="100%" style="padding: 10px;">
                                                        <tbody><tr>
                                                            <td><span class="gui-inline-top-header">Next Billing</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span style="font-weight: bolder;font-size: 15px;"><?php echo $response_nextBillingAt;?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><img id="j_idt3949" height="7px" alt="" src="/surpaas/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.3&amp;amp;v=3.4.1">
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td><span class="gui-inline-top-header"></span>
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td><span class="gui-inline-top-header"></span>
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td><span class="gui-inline-top-header"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="gui-inline-top-header">Next Recurring Amount</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span style="font-weight: bolder;font-size: 15px;">$<?php echo $recurringamount;?></span>
                                                            </td>
                                                        </tr>
                                                            <tr>
                                                                <td><img id="j_idt3956" height="7px" alt="" src="/surpaas/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.3&amp;amp;v=3.4.1">
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>
                                                                    <table>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>

                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                    </tbody></table>
												<br/>	<br/>	<br/>
                                            <div class="btn-group">
											
											<style>
											.get_sub_button {display:inline-block;text-decoration:none !important;padding:3px 7px;background:#e2e2e2;text-align:center;margin-left:3px;}
											</style>
<?php
if ($response_status == 'Active')
{
	?>
 <a class="get_sub_button" href="/sugarcrm/deactive.php" onclick="loadSec()">DeActive</a>

 
<?php }
else
{
	?>
<a class="get_sub_button" href="/sugarcrm/active.php" onclick="loadSecActive()">Active</a>
	<?php
}
?>
<a  class="get_sub_button" href="/sugarcrm/get_upgrade.php">Upgrade</a>
<a class="get_sub_button" href="/sugarcrm/creditcard.php">Credit Update</a>
<!--a class="get_sub_button" href="javascript:void(0)" onclick="loadSec()" >test</a-->
</div>


<script>
function loadSec(){
	//alert("Are you sure you want to activate the redbox Tenant?");
	document.getElementById("inprogload").style.display = "block";
	setInterval(function(){ document.getElementById("inprogload").style.display = "none";location.reload(); }, 120000);
	return false;
}
function loadSecActive(){
	document.getElementById("inprogloadAct").style.display = "block";
	setInterval(function(){ document.getElementById("inprogloadAct").style.display = "none";location.reload(); }, 120000);
	return false;
}
	
</script>
                                    </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table border="0" width="100%" style="vertical-align: top">   
                                        <tbody><tr>
                                            <td width="150px" align="right">
<form id="backToSubscriptionForm" name="backToSubscriptionForm" method="post" action="/surpaas/r/demoadmin/h/salesdemo" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="backToSubscriptionForm" value="backToSubscriptionForm">
<input type="hidden" name="javax.faces.ViewState" value="1668729696136258285:-7407365812360434948" autocomplete="off"></form>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>

                            </tr>
                        </tbody></table>
						
						<style>
						table, ul, a, li, img, p, form, hr, dl, dt, dd, div, label, blockquote, ul, ol, dl, fieldset, address {
    margin: 0;
    padding: 0;
}
* {
    margin: 0px;
    padding: 0px;
}
table[Attributes Style] {
    float: left;
    border-top-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 0px;
    border-left-width: 0px;
    width: 100%;
    -webkit-border-horizontal-spacing: 0px;
    -webkit-border-vertical-spacing: 0px;
}
user agent stylesheet
table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
</style>
<?php
$job_id = $_SESSION['job_id'];

/* Get Job StatUs */

$curl_job = curl_init();

curl_setopt_array($curl_job, array(
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
    "Postman-Token: c3a15fb3-69ba-4cf4-aefa-138dfd8097e9,9f96edd5-f2d5-4acf-8922-91678deba310",
    "User-Agent: PostmanRuntime/7.15.2",
    "c_session_id: $seesion",
    "cache-control: no-cache"
  ),
));

$response_job = curl_exec($curl_job);
$err_job = curl_error($curl_job);

curl_close($curl_job);

if ($err_job) {
  echo "cURL Error #:" . $err_job;
} else {

  $response_job =  simplexml_load_string($response_job);
	$job_status = $response_job->status;
	//echo "Job Stauts : ".$job_status;
}
?>
