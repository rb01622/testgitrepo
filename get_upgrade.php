
<?php
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
include('session.php');
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
<style>
li.listHidden {}
.listHidden:hover .hiddenMenu {display:block;position:absolute;margin-top:4px !important;}
.hiddenMenu {display:none;}
.hiddenMenu li {display:inline-block !important;background:#4e8ccf !important;}
.hiddenMenu li a {display:block !important;color:#fafafa !important;font-size:12px !important;}
</style>

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
<?php
$api_root_url;
$zone_id;
$response_id = $_SESSION['response_id'];
$response_product_ID = $_SESSION['response_product_ID'];

$seesion  = $_SESSION['session_id'] ="$session_id";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/billing/migration?account=$zone_id&productid=$response_product_ID",
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
    "Postman-Token: 0db392ac-c1ad-4658-97bf-6171d8a7c276,1be4ba65-ecba-4187-8419-cb2b3fe143e3",
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
/* 	echo "<pre>";
	print_r($response);
	echo "</pre>"; */
	//echo "sss : ".$response->migration->products->product(0)->name;
 $count = $response->migration->products->product->count();
}
?>
<!Doctype html>
<html>

<style>
body {
  margin: 0;
  min-width: 250px;
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}



/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: #f44336;
  padding: 30px 40px;
  color: white;
  text-align: center;
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */


/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

.addBtn:hover {
  background-color: #bbb;
}
.subsBox {margin-left:80px;margin-top:40px;}
ul#myUL {
      
	  width: 30%;
	  margin-bottom:10px;
}

ul#myUL li:last-child {display:none;font-family: Segoe UI Semibold,Calibri, Arial, Tahoma, Helvetica, sans-serif;  font-size:12px;}
ul#myUL li {background:none;padding:0;margin:0;text-align:left;display:block;font-family: Segoe UI Semibold,Calibri, Arial, Tahoma, Helvetica, sans-serif;  font-size:12px;}
.hlstylel1 {text-decoration:none;color:#ffffff;display:block;width:100%;padding:14px 10px;background: #ededed;margin-bottom:2px;}
.hlstylel1:hover {color:#fff;background:#4CAECA;}
.hlstylel1 a {color:#fff;}

.fadeWrapper {background:rgba(0,0,0,.4);height:100%;position:fixed;text-align:center;top:0;width:100%;z-index:9999 !important;}
.inprogloadinner {background-color: #fff;box-shadow: 10px 10px 60px #555;display: inline-block;height: auto;max-width: 551px;min-height: 100px;vertical-align: middle;width: 35%;position: relative;border-radius: 8px;padding: 15px 5%;text-align:center;margin-top:20%;z-index:10000 !important;}
.inprogloadinner p {color:#333;font-size:15px;margin-top:15px;}

</style>
<body>

<div id="inprogload" class="fadeWrapper" style="display:none;">
	<div class="inprogloadinner">
		<p>Getting Subscription Progress Status</p>
		<img src="cache/images/loading-icon.gif" title="" style="margin-top:10px;"/>
		<!--p>Selected Tenant has been deactivated successfully and notified to production@corenttech.com</p-->
	</div>
</div>
 <div class="subsBox">

<h1 style="margin-bottom:10px;">Subscription Upgrade </h1>
<ul id="myUL">
<li style="background:#0e689e;color:#ffffff;padding:14px 10px;"><p>Subscription Plan Name</p></li>
<?php

for ($x = 0; $x <= $count; $x++) {

?>
 
  <li><a class="hlstylel1" href='upgrade_done.php?id=<?php echo $response->migration->products->product[$x]->id;?>' onclick="loadSec()"><?php echo $response->migration->products->product[$x]->name;?></a></li>
  
  <?php } ?>
 
</ul>
<a href ="/sugarcrm/subscription.php">Back</a>
</div>
<div class="clear"></div>
</div>


<script>
function loadSec(){
	//alert("Are you sure you want to activate the redbox Tenant?");
	document.getElementById("inprogload").style.display = "block";
	setInterval(function(){ document.getElementById("inprogload").style.display = "none";}, 140000);
	return false;
}
	
</script>
</body>
</html>
<?php

//echo "<div class='management'><a href='url'>link text</a></div>";
?>