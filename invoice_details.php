<?php
session_start();
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
include('session.php');
$api_key;
$api_root_url;
$zone_id;
$port;
$get_active_status  = $_GET['id'];
/* echo "get_active_status :".$get_active_status; */

$response_id = $_SESSION['response_id'];
/* echo "Tenant ID : ".$response_id."<br>"; */
$seesion  = $_SESSION['session_id'] ="$session_id";
/* echo "seesion: ".$seesion."<br>";
echo "zone_ID:".$zone_id;"<br>"; */
$liveaccountid =  $_SESSION['liveaccountid'];
$tenantname = $_SESSION['response_name'] ;
$response_country = $_SESSION['response_country'];

?>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/billing/invoicedetails?accountid=$response_id&liveinvoiceid=$get_active_status&liveaccountid=$liveaccountid",
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
    "Postman-Token: 7eea94b9-4763-4d70-a92d-7b85f8b5998c,1341b0c4-9f5a-4a67-aac2-40e88baf3880",
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
	//$response =  simplexml_load_string($response);
	 $php_array = json_decode($response, true);
  echo "<pre>";
//print_r($php_array);
echo "</pre>" ;   

$php_array['invoiceNumber'];
$php_array['invoiceDate'];
$php_array['originalChargedAmount'];
$php_array['creditAdj'];
$php_array['balance'];
$php_array['amountPayable'];



$php_array['items'][0]['description'];
$php_array['items'][0]['itemType'];

$php_array['items'][1]['description'];
$php_array['items'][1]['itemType'];
$php_array['items'][0]['amount'];
$php_array['items'][1]['amount'];

//echo "invoiceNumber : ".$php_array['invoiceNumber'];
//echo "invoiceNumber : ".$php_array['invoiceNumber'];
//echo "invoiceNumber : ".$php_array['invoiceNumber'];
//echo "invoiceNumber : ".$php_array['invoiceNumber'];
//echo "invoiceNumber : ".$php_array['invoiceNumber'];

}

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="themes/Sugar5/images/sugar_icon.ico?s=039fb1ce84e82c72c3ed87850f513ba0&c=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SugarCRM</title>
<link rel="stylesheet" type="text/css" href="cache/themes/Sugar5/css/yui.css?s=039fb1ce84e82c72c3ed87850f513ba0&c=1" /><link rel="stylesheet" type="text/css" href="cache/themes/Sugar5/css/deprecated.css?s=039fb1ce84e82c72c3ed87850f513ba0&c=1" /><link rel="stylesheet" type="text/css" href="cache/themes/Sugar5/css/style.css?s=039fb1ce84e82c72c3ed87850f513ba0&c=1" />
<script>var sugar_cache_dir = 'cache/';</script><script>var sugar_upload_dir = 'cache/upload/';</script><script>var action_sugar_grp1 = 'index';</script><script>jscal_today = 1565014512000; if(typeof app_strings == "undefined") app_strings = new Array();</script><script type="text/javascript" src="include/javascript/sugar_grp1_yui.js?s=039fb1ce84e82c72c3ed87850f513ba0&c=1"></script><script type="text/javascript" src="include/javascript/sugar_grp1.js?s=039fb1ce84e82c72c3ed87850f513ba0&c=1"></script><script type="text/javascript" src="include/javascript/calendar.js?s=039fb1ce84e82c72c3ed87850f513ba0&c=1"></script><script type="text/javascript">var asynchronous_key = "9ad5a16a-ec7d-ab55-4264-5d481b48eada";SUGAR.themes.image_server="";</script><script type="text/javascript"> var name_format = "s f l";</script><script type="text/javascript">
	var time_reg_format = '([0-9]{1,2}):([0-9]{1,2})([ ]*[ap]m)';
	var date_reg_format = '([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})';
	var date_reg_positions = { 'm': 1,'d': 2,'Y': 3 };
	var time_separator = ':';
	var cal_date_format = '%m/%d/%Y';
	var time_offset = 0;
	var num_grp_sep = ',';
	var dec_sep = '.';
</script><script type="text/javascript" src="cache/jsLanguage/en_us.js?s=039fb1ce84e82c72c3ed87850f513ba0&c=1&j=1"></script><script type="text/javascript" src="cache/jsLanguage/Home/en_us.js?s=039fb1ce84e82c72c3ed87850f513ba0&c=1&j=1"></script><script src="include/javascript/yui3/build/yui/yui-min.js?s=039fb1ce84e82c72c3ed87850f513ba0&c=1" type="text/javascript"></script><script type="text/javascript" src="cache/themes/Sugar5/js/style.js?s=039fb1ce84e82c72c3ed87850f513ba0&c=1"></script>

<script type="text/javascript">
<!--
SUGAR.themes.theme_name      = 'Sugar5';
SUGAR.themes.theme_ie6compat = false;
SUGAR.themes.hide_image      = 'themes/Sugar5/images/hide.gif?s=039fb1ce84e82c72c3ed87850f513ba0&c=1';
SUGAR.themes.show_image      = 'themes/Sugar5/images/show.gif?s=039fb1ce84e82c72c3ed87850f513ba0&c=1';
SUGAR.themes.allThemes       = eval();
if ( YAHOO.env.ua )
    UA = YAHOO.env.ua;
-->
</script>

</head>
<a name="top"></a><body onMouseOut="closeMenus();">

<div id="header">
    <div id="companyLogo">
    <a href="index.php?module=Home&action=index" border="0">
    <img src="custom/themes/default/images/company_logo.png?s=039fb1ce84e82c72c3ed87850f513ba0&c=1&logo_md5=513194971c6cd4e4ec684eddd06c3dc5" width="212" height="40" 
        alt="Company Logo" border="0"/>
    </a>
</div>    <div id="globalLinks">
    <ul>
        <li>
        <a href="index.php?module=Employees&action=index">Employees</a>
        </li>
        <li>
    <span>|</span>    <a href="index.php?module=Administration&action=index">Admin</a>
        </li>
        <li>
    <span>|</span>    <a href=" javascript:void window.open('http://support.sugarcrm.com')">Support</a>
        </li>
        <li>
    <span>|</span>    <a href=" javascript:void window.open('index.php?module=Administration&action=SupportPortal&view=documentation&version=6.2.0&edition=CE&lang=en_us&help_module=Home&help_action=index&key=')">Help</a>
        </li>
        <li>
    <span>|</span>    <a href="index.php?module=Home&action=About">About</a>
        </li>
        </ul>
</div>    <div id="welcome">
    Welcome, <strong><a href='index.php?module=Users&action=EditView&record=1'>Rajkapoor Administrator</a></strong> [ <a href='index.php?module=Users&action=Logout' class='utilsLink'>Log Out</a> ]
</div>
    <div class="clear"></div>
    <div id="search">
    <form name='UnifiedSearch' onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
        <input type="hidden" name="action" value="UnifiedSearch">
        <input type="hidden" name="module" value="Home">
        <input type="hidden" name="search_form" value="false">
        <input type="hidden" name="advanced" value="false">
        <img id="unified_search_advanced_img" src="themes/Sugar5/images/searchMore.gif?s=039fb1ce84e82c72c3ed87850f513ba0&c=1" border="0" alt="Search">&nbsp;
        <input type="text" name="query_string" id="query_string" size="20" value="">&nbsp;
        <input type="submit" class="button" value="Search">
    </form><br />
    <div id="unified_search_advanced_div"> </div>
</div>
<div id="sitemapLink">
    <span id="sitemapLinkSpan">
        Sitemap
        <img src="themes/Sugar5/images/MoreDetail.png?s=039fb1ce84e82c72c3ed87850f513ba0&c=1">
    </span>
</div>
<span id='sm_holder'></span>
    <div class="clear"></div>
        <div id="moduleList">
<ul>
    <li class="noBorder">&nbsp;</li>
                    <li class="noBorder">
        <span class="currentTabLeft">&nbsp;</span><span class="currentTab">
            <a href="#" id="grouptab_0">Sales</a>
        </span><span class="currentTabRight">&nbsp;</span>
                </li>
                <li>
        <span class="notCurrentTabLeft">&nbsp;</span><span class="notCurrentTab">
        <a href="#" id="grouptab_1">Marketing</a>
        </span><span class="notCurrentTabRight">&nbsp;</span>
        </li>
                <li>
        <span class="notCurrentTabLeft">&nbsp;</span><span class="notCurrentTab">
        <a href="#" id="grouptab_2">Support</a>
        </span><span class="notCurrentTabRight">&nbsp;</span>
        </li>
                <li>
        <span class="notCurrentTabLeft">&nbsp;</span><span class="notCurrentTab">
        <a href="#" id="grouptab_3">Activities</a>
        </span><span class="notCurrentTabRight">&nbsp;</span>
        </li>
                <li>
        <span class="notCurrentTabLeft">&nbsp;</span><span class="notCurrentTab">
        <a href="#" id="grouptab_4">Collaboration</a>
        </span><span class="notCurrentTabRight">&nbsp;</span>
        </li>
                <li>
        <span class="notCurrentTabLeft">&nbsp;</span><span class="notCurrentTab">
        <a href="#" id="grouptab_5">All</a>
        </span><span class="notCurrentTabRight">&nbsp;</span>
        </li>
		  <li class="listHidden"><a href="javascript:void(0)">Management</a>
	   <ul class="hiddenMenu">
			<li><a href="/sugarcrm/tenant.php">Tenant Details</a></li>
		  <li><a href="/sugarcrm/subscription.php">Subscription</a></li>
		  <li><a href="/sugarcrm/invoice.php">Invoice</a></li>
		  <li><a href="/sugarcrm/creditcard.php">Credit Card Update</a></li>
	  </ul>
	  </li>
    </ul>
</div>
<div class="clear"></div>

    <div class="clear"></div>
    <div class="line"></div>
        <div id="lastView" class="headerList">
        <b style="white-space:nowrap;">Last Viewed:&nbsp;&nbsp;</b>
    <span>
        <span>
        
        <a title="Rajkapoor Administrator [Alt+1]" 
            accessKey="1" 
            href="index.php?module=Users&action=DetailView&record=1">
            <img src="themes/Sugar5/images/Users.gif?s=039fb1ce84e82c72c3ed87850f513ba0&c=1" width="16" height="16" border="0" align="absmiddle" alt="Rajkapoor Administrator" />&nbsp;<span>Rajkapoor Admin</span>
        </a>
    </span>
        </span>
</div>        </div>

<div id="main">
    <?php //include('get_invoice.php');?>
	
	
	
<html><head>  <title></title>  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  <style type="text/css">    a {text-decoration: none}    table td {word-break: break-all !important; word-wrap: break-word !important}  </style></head><body text="#000000" link="#000000" alink="#000000" vlink="#000000"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="left"><a name="JR_PAGE_ANCHOR_0_1"></a>
</br></br>
<table style="width: 875px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 20px; height: 1px;"></td>
  <td style="width: 185px; height: 1px;"></td>
  <td style="width: 135px; height: 1px;"></td>
  <td style="width: 163px; height: 1px;"></td>
  <td style="width: 151px; height: 1px;"></td>
  <td style="width: 21px; height: 1px;"></td>
  <td style="width: 85px; height: 1px;"></td>
  <td style="width: 94px; height: 1px;"></td>
  <td style="width: 1px; height: 1px;"></td>
  <td style="width: 20px; height: 1px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 63px;"></td>
  <td colspan="8">
<table style="width: 835px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 3px; height: 1px;"></td>
  <td style="width: 122px; height: 1px;"></td>
  <td style="width: 710px; height: 1px;"></td>
</tr>
<tr valign="top">
  <td style="width: 3px; height: 40px;"></td>
  <td><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 24px; font-weight: bold;">INVOICE</span></p></td>
  <td style="width: 710px; height: 40px;"></td>
</tr>
<tr valign="top" style="height:1px">
  <td colspan="3" style="background-color: #FFFFFF; border-top: 1px solid #000000; "></td>
</tr>
</table>
</td>
  <td style="width: 20px; height: 63px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 27px;"></td>
  <td><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 15px; font-weight: bold;">Billed To (Buyer)</span></p></td>
  <td colspan="4" style="width: 470px; height: 27px;"></td>
  <td colspan="3"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 15px; font-weight: bold;">Statement Summary</span></p></td>
  <td style="width: 20px; height: 27px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 3px;"></td>
  <td colspan="3" rowspan="8"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;"><?php echo $tenantname;?><br/><br/><?php echo $response_country;?></span></p></td>
  <td colspan="6" style="width: 372px; height: 3px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 23px;"></td>
  <td colspan="2" style="width: 172px; height: 23px;"></td>
  <td colspan="3"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Invoice Number  : <?php echo $php_array['invoiceNumber']; ?></span></p></td>
  <td style="width: 20px; height: 23px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 23px;"></td>
  <td colspan="2" style="width: 172px; height: 23px;"></td>
  <td colspan="3"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Invoice Date  : <?php echo $php_array['invoiceDate']; ?></span></p></td>
  <td style="width: 20px; height: 23px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 23px;"></td>
  <td colspan="2" style="width: 172px; height: 23px;"></td>
  <td colspan="3"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Current Charges : $<?php echo $php_array['originalChargedAmount']; ?>.00</span></p></td>
  <td style="width: 20px; height: 23px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 23px;"></td>
  <td colspan="2" style="width: 172px; height: 23px;"></td>
  <td colspan="3"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Credit Adjustments :  $<?php echo $php_array['creditAdj']; ?>.00</span></p></td>
  <td style="width: 20px; height: 23px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 23px;"></td>
  <td colspan="2" style="width: 172px; height: 23px;"></td>
  <td colspan="3"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Invoice Balance :  $<?php echo $php_array['balance']; ?>.00</span></p></td>
  <td style="width: 20px; height: 23px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 23px;"></td>
  <td colspan="2" style="width: 172px; height: 23px;"></td>
  <td colspan="3"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Charges Paid :  $<?php echo $php_array['amountPayable']; ?>.00</span></p></td>
  <td style="width: 20px; height: 23px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 33px;"></td>
  <td colspan="6" style="width: 372px; height: 33px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 25px;"></td>
  <td colspan="2"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 15px; font-weight: bold;">Statement Details</span></p></td>
  <td colspan="7" style="width: 535px; height: 25px;"></td>
</tr>
<tr valign="top">
  <td style="width: 20px; height: 84px;"></td>
  <td colspan="8">
<table style="width: 835px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 300px; height: 1px;"></td>
  <td style="width: 170px; height: 1px;"></td>
  <td style="width: 190px; height: 1px;"></td>
  <td style="width: 175px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style="background-color: #E6E6CF; ">
<table style="width: 300px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 300px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style=" vertical-align: middle;padding-left: 3px; "><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Item Details</span></p></td>
</tr>
</table>
</td>
  <td style="background-color: #E6E6CF; ">
<table style="width: 170px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 170px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style=" vertical-align: middle;padding-left: 3px; "><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Charge Type</span></p></td>
</tr>
</table>
</td>
  <td style="background-color: #E6E6CF; ">
<table style="width: 190px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 190px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style=" vertical-align: middle;padding-left: 3px; "><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Item Date / Period</span></p></td>
</tr>
</table>
</td>
  <td style="background-color: #E6E6CF; ">
<table style="width: 175px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 175px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style=" vertical-align: middle;padding-top: 3px; padding-left: 3px; padding-bottom: 3px; padding-right: 5px; text-align: right;"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Item Amount</span></p></td>
</tr>
</table>
</td>
</tr>
<tr valign="top" style="height:24px">
  <td style="background-color: #FFFFFF; ">
<table style="width: 300px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 300px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style="padding-top: 3px; padding-left: 3px; "><p style="overflow: hidden; line-height: 1.5; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;"> <?php echo $php_array['items'][0]['description']; ?></span></p></td>
</tr>
</table>
</td>
  <td style="background-color: #FFFFFF; ">
<table style="width: 170px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 170px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style="padding-top: 3px; padding-left: 3px; "><p style="overflow: hidden; line-height: 1.5; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;"><?php echo $php_array['items'][0]['itemType']; ?></span></p></td>
</tr>
</table>
</td>
  <td style="background-color: #FFFFFF; ">
<table style="width: 190px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 190px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style="padding-top: 3px; padding-left: 3px; "><p style="overflow: hidden; line-height: 1.5; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;"><?php echo $php_array['invoiceDate']; ?></span></p></td>
</tr>
</table>
</td>
  <td style="background-color: #FFFFFF; ">
<table style="width: 175px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 175px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style="padding-top: 3px; padding-left: 3px; padding-bottom: 3px; padding-right: 5px; text-align: right;"><p style="overflow: hidden; line-height: 1.5; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">$<?php echo $php_array['items'][0]['amount'];?>.00</span></p></td>
</tr>
</table>
</td>
</tr>
<tr valign="top" style="height:36px">
  <td style="background-color: #FFFFFF; ">
<table style="width: 300px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 300px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:36px">
  <td style="padding-top: 3px; padding-left: 3px; "><p style="overflow: hidden; line-height: 1.5; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;"><?php echo $php_array['items'][1]['description']; ?></span></p></td>
</tr>
</table>
</td>
  <td style="background-color: #FFFFFF; ">
<table style="width: 170px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 170px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style="padding-top: 3px; padding-left: 3px; "><p style="overflow: hidden; line-height: 1.5; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;"><?php echo $php_array['items'][1]['itemType']; ?></span></p></td>
</tr>
</table>
</td>
  <td style="background-color: #FFFFFF; ">
<table style="width: 190px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 190px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style="padding-top: 3px; padding-left: 3px; "><p style="overflow: hidden; line-height: 1.5; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;"><?php echo $php_array['items'][1]['startDate']; ?> /  <?php echo $php_array['items'][1]['endDate']; ?></span></p></td>
</tr>
</table>
</td>
  <td style="background-color: #FFFFFF; ">
<table style="width: 175px; border-collapse: collapse; empty-cells: show" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td style="width: 175px; height: 1px;"></td>
</tr>
<tr valign="top" style="height:24px">
  <td style="padding-top: 3px; padding-left: 3px; padding-bottom: 3px; padding-right: 5px; text-align: right;"><p style="overflow: hidden; line-height: 1.5; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">$<?php echo $php_array['items'][1]['amount'];?>.00</span></p></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
  <td style="width: 20px; height: 84px;"></td>
</tr>
<tr valign="top">
  <td colspan="5" style="width: 654px; height: 20px;"></td>
  <td colspan="2" style=" vertical-align: middle;"><p style="overflow: hidden; line-height: 1.5; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">Current Charges :  </span></p></td>
  <td style=" vertical-align: middle;padding-left: 3px; padding-right: 5px; text-align: right;"><p style="overflow: hidden; line-height: 1.0; text-indent: 0px; "><span style="font-family: Arial; color: #000000; font-size: 12px;">$<?php echo $php_array['originalChargedAmount']; ?>.00</span></p></td>
  <td colspan="2" style="width: 21px; height: 20px;"></td>
</tr>
</table>

</td></tr></table></body></table>
	
	<h5><a href ="/sugarcrm/invoice.php"> <<  List of invoice</a></h5>
	
    <div class="clear"></div>
</div>



</body>
</html>
<?php

//echo "<div class='management'><a href='url'>link text</a></div>";
?>