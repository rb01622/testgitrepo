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
.hiddenMenu li {display:inline-block !important;background:#4e8ccf;}
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



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credit Card Validation Demo</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css">
	<style>
	.fadeWrapper {background:rgba(0,0,0,.4);height:100%;position:fixed;text-align:center;top:0;width:100%;z-index:9999 !important;}
.inprogloadinner {background-color: #fff;box-shadow: 10px 10px 60px #555;display: inline-block;height: auto;max-width: 551px;min-height: 100px;vertical-align: middle;width: 35%;position: relative;border-radius: 8px;padding: 15px 5%;text-align:center;margin-top:20%;z-index:10000 !important;}
.inprogloadinner p {color:#333;font-size:15px;margin-top:15px;}
	</style>
</head>

<body>
<div id="inprogload" class="fadeWrapper" style="display:none;">
	<div class="inprogloadinner">
		<p>Please wait... Your credit card update inprogress...</p>
		<img src="cache/images/loading-icon.gif" title="" style="margin-top:10px;"/>
		<!--p>Selected Tenant has been deactivated successfully and notified to production@corenttech.com</p-->
	</div>
</div>
    <p id="inprogload" style="display:none;color:red;font-size:16px;margin-top:15px;">Please Wait...Inprogress...</p>
	<div class="container-fluid">
        <div class="creditCardForm">
            <div class="heading">
                <h3>Credit Card Update</h3>
            </div>
            <div class="payment">
                <form name="form1" action ="http://localhost/sugarcrm/create_creditcard.php" method="POST"">
                    <div class="form-group owner">
                        <label for="owner">Name on card</label>
                        <input type="text" class="form-control" id="owner" name="owner" value="">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" value="">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardnumber" value="">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiry Date</label>
                        <select name="expiredate">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="expireyear">
                            <option value="16"> 2016</option>
                            <option value="17"> 2017</option>
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="assets/images/visa.jpg" id="visa">
                        <img src="assets/images/mastercard.jpg" id="mastercard">
                        <img src="assets/images/amex.jpg" id="amex">
                    </div>
					
					 <div class="form-group owner">
                        <label for="owner">Email</label>
                        <input type="text" class="form-control" id="owner" name="email" value="">
                    </div>
					
					 <div class="form-group owner">
                        <label for="owner">Address Line1</label>
                        <input type="text" class="form-control" id="owner" name="address1" value="">
                    </div>
					
					 <div class="form-group owner">
                        <label for="owner">City</label>
                        <input type="text" class="form-control" id="owner" name="city" value="">
                    </div>
					
					
					 <div class="form-group owner">
                        <label for="owner">Province / State</label>
                        <input type="text" class="form-control" id="owner" name="state" value="">
                    </div>
					
					
					 <div class="form-group owner">
                        <label for="owner"> Zip / Postal</label>
                        <input type="text" class="form-control" id="owner" name="zipcode" value="">
                    </div>
					  <div class="form-group" id="expiration-date">
								<label for="country">
                                <span>Country</span>
								<br/><br/><br/>
                               
                                <select id="country" class="select-field countryfield" name="country">
                                    <option selected="">select</option>
                                    
                                    <option>Afghanistan</option>
                                    
                                    <option>Akrotiri</option>
                                    
                                    <option>Aland Islands</option>
                                    
                                    <option>Albania</option>
                                    
                                    <option>Algeria</option>
                                    
                                    <option>American Samoa</option>
                                    
                                    <option>Andorra</option>
                                    
                                    <option>Angola</option>
                                    
                                    <option>Anguilla</option>
                                    
                                    <option>Antigua and Barbuda</option>
                                    
                                    <option>Argentina</option>
                                    
                                    <option>Armenia</option>
                                    
                                    <option>Aruba</option>
                                    
                                    <option>Australia</option>
                                    
                                    <option>Austria</option>
                                    
                                    <option>Azerbaijan</option>
                                    
                                    <option>The Bahamas</option>
                                    
                                    <option>Bahrain</option>
                                    
                                    <option>Bangladesh</option>
                                    
                                    <option>Barbados</option>
                                    
                                    <option>Belarus</option>
                                    
                                    <option>Belgium</option>
                                    
                                    <option>Belize</option>
                                    
                                    <option>Benin</option>
                                    
                                    <option>Bermuda</option>
                                    
                                    <option>Bhutan</option>
                                    
                                    <option>Bolivia</option>
                                    
                                    <option>Bosnia and Herzegovina</option>
                                    
                                    <option>Botswana</option>
                                    
                                    <option>Bouvet Island</option>
                                    
                                    <option>Brazil</option>
                                    
                                    <option>British Indian Ocean Territory</option>
                                    
                                    <option>British Virgin Islands</option>
                                    
                                    <option>Brunei</option>
                                    
                                    <option>Bulgaria</option>
                                    
                                    <option>Burkina Faso</option>
                                    
                                    <option>Burundi</option>
                                    
                                    <option>Cambodia</option>
                                    
                                    <option>Cameroon</option>
                                    
                                    <option>Canada</option>
                                    
                                    <option>Cape Verde</option>
                                    
                                    <option>Cayman Islands</option>
                                    
                                    <option>Central African Republic</option>
                                    
                                    <option>Chad</option>
                                    
                                    <option>Chile</option>
                                    
                                    <option>China</option>
                                    
                                    <option>Christmas Island</option>
                                    
                                    <option>Clipperton Island</option>
                                    
                                    <option>Cocos (Keeling) Islands</option>
                                    
                                    <option>Colombia</option>
                                    
                                    <option>Comoros</option>
                                    
                                    <option>Democratic Republic of the Congo</option>
                                    
                                    <option>Republic of the Congo</option>
                                    
                                    <option>Cook Islands</option>
                                    
                                    <option>Costa Rica</option>
                                    
                                    <option>Cote d'Ivoire</option>
                                    
                                    <option>Croatia</option>
                                    
                                    <option>Cuba</option>
                                    
                                    <option>Cyprus</option>
                                    
                                    <option>Czech Republic</option>
                                    
                                    <option>Denmark</option>
                                    
                                    <option>Djibouti</option>
                                    
                                    <option>Dominica</option>
                                    
                                    <option>Dominican Republic</option>
                                    
                                    <option>Ecuador</option>
                                    
                                    <option>Egypt</option>
                                    
                                    <option>El Salvador</option>
                                    
                                    <option>Equatorial Guinea</option>
                                    
                                    <option>Eritrea</option>
                                    
                                    <option>Estonia</option>
                                    
                                    <option>Ethiopia</option>
                                    
                                    <option>Falkland Islands (Islas Malvinas)</option>
                                    
                                    <option>Faroe Islands</option>
                                    
                                    <option>Fiji</option>
                                    
                                    <option>Finland</option>
                                    
                                    <option>France</option>
                                    
                                    <option>French Guiana</option>
                                    
                                    <option>French Polynesia</option>
                                    
                                    <option>French Southern and Antarctic Lands</option>
                                    
                                    <option>Gabon</option>
                                    
                                    <option>The Gambia</option>
                                    
                                    <option>Gaza Strip</option>
                                    
                                    <option>Georgia</option>
                                    
                                    <option>Germany</option>
                                    
                                    <option>Ghana</option>
                                    
                                    <option>Gibraltar</option>
                                    
                                    <option>Greece</option>
                                    
                                    <option>Greenland</option>
                                    
                                    <option>Grenada</option>
                                    
                                    <option>Guadeloupe</option>
                                    
                                    <option>Guam</option>
                                    
                                    <option>Guatemala</option>
                                    
                                    <option>Guernsey</option>
                                    
                                    <option>Guinea</option>
                                    
                                    <option>Guinea-Bissau</option>
                                    
                                    <option>Guyana</option>
                                    
                                    <option>Haiti</option>
                                    
                                    <option>Heard Island and McDonald Islands</option>
                                    
                                    <option>Holy See (Vatican City)</option>
                                    
                                    <option>Honduras</option>
                                    
                                    <option>Hong Kong</option>
                                    
                                    <option>Hungary</option>
                                    
                                    <option>Iceland</option>
                                    
                                    <option>India</option>
                                    
                                    <option>Indonesia</option>
                                    
                                    <option>Iran</option>
                                    
                                    <option>Iraq</option>
                                    
                                    <option>Ireland</option>
                                    
                                    <option>Isle of Man</option>
                                    
                                    <option>Israel</option>
                                    
                                    <option>Italy</option>
                                    
                                    <option>Jamaica</option>
                                    
                                    <option>Japan</option>
                                    
                                    <option>Jersey</option>
                                    
                                    <option>Jordan</option>
                                    
                                    <option>Juan de Nova Island</option>
                                    
                                    <option>Kazakhstan</option>
                                    
                                    <option>Kenya</option>
                                    
                                    <option>Kiribati</option>
                                    
                                    <option>Korea, North</option>
                                    
                                    <option>Korea, South</option>
                                    
                                    <option>Kuwait</option>
                                    
                                    <option>Kyrgyzstan</option>
                                    
                                    <option>Laos</option>
                                    
                                    <option>Latvia</option>
                                    
                                    <option>Lebanon</option>
                                    
                                    <option>Lesotho</option>
                                    
                                    <option>Liberia</option>
                                    
                                    <option>Libya</option>
                                    
                                    <option>Liechtenstein</option>
                                    
                                    <option>Lithuania</option>
                                    
                                    <option>Luxembourg</option>
                                    
                                    <option>Macau</option>
                                    
                                    <option>Macedonia</option>
                                    
                                    <option>Madagascar</option>
                                    
                                    <option>Malawi</option>
                                    
                                    <option>Malaysia</option>
                                    
                                    <option>Maldives</option>
                                    
                                    <option>Mali</option>
                                    
                                    <option>Malta</option>
                                    
                                    <option>Marshall Islands</option>
                                    
                                    <option>Martinique</option>
                                    
                                    <option>Mauritania</option>
                                    
                                    <option>Mauritius</option>
                                    
                                    <option>Mayotte</option>
                                    
                                    <option>Mexico</option>
                                    
                                    <option>Federated States of Micronesia</option>
                                    
                                    <option>Moldova</option>
                                    
                                    <option>Monaco</option>
                                    
                                    <option>Mongolia</option>
                                    
                                    <option>Montenegro</option>
                                    
                                    <option>Montserrat</option>
                                    
                                    <option>Morocco</option>
                                    
                                    <option>Mozambique</option>
                                    
                                    <option>Myanmar</option>
                                    
                                    <option>Namibia</option>
                                    
                                    <option>Nauru</option>
                                    
                                    <option>Navassa Island</option>
                                    
                                    <option>Nepal</option>
                                    
                                    <option>Netherlands</option>
                                    
                                    <option>Netherlands Antilles</option>
                                    
                                    <option>New Caledonia</option>
                                    
                                    <option>New Zealand</option>
                                    
                                    <option>Nicaragua</option>
                                    
                                    <option>Niger</option>
                                    
                                    <option>Nigeria</option>
                                    
                                    <option>Niue</option>
                                    
                                    <option>Norfolk Island</option>
                                    
                                    <option>Northern Mariana Islands</option>
                                    
                                    <option>Norway</option>
                                    
                                    <option>Oman</option>
                                    
                                    <option>Pakistan</option>
                                    
                                    <option>Palau</option>
                                    
                                    <option>Palestinian Territory</option>
                                    
                                    <option>Panama</option>
                                    
                                    <option>Papua New Guinea</option>
                                    
                                    <option>Paraguay</option>
                                    
                                    <option>Peru</option>
                                    
                                    <option>Philippines</option>
                                    
                                    <option>Pitcairn Islands</option>
                                    
                                    <option>Poland</option>
                                    
                                    <option>Portugal</option>
                                    
                                    <option>Puerto Rico</option>
                                    
                                    <option>Qatar</option>
                                    
                                    <option>Reunion</option>
                                    
                                    <option>Romania</option>
                                    
                                    <option>Russia</option>
                                    
                                    <option>Rwanda</option>
                                    
                                    <option>Saint Barthelemy</option>
                                    
                                    <option>Saint Helena</option>
                                    
                                    <option>Saint Kitts and Nevis</option>
                                    
                                    <option>Saint Lucia</option>
                                    
                                    <option>Saint Martin</option>
                                    
                                    <option>Saint Pierre and Miquelon</option>
                                    
                                    <option>Saint Vincent and the Grenadines</option>
                                    
                                    <option>Samoa</option>
                                    
                                    <option>San Marino</option>
                                    
                                    <option>Sao Tome and Principe</option>
                                    
                                    <option>Saudi Arabia</option>
                                    
                                    <option>Senegal</option>
                                    
                                    <option>Serbia and Montenegro</option>
                                    
                                    <option>Seychelles</option>
                                    
                                    <option>Sierra Leone</option>
                                    
                                    <option>Singapore</option>
                                    
                                    <option>Slovakia</option>
                                    
                                    <option>Slovenia</option>
                                    
                                    <option>Solomon Islands</option>
                                    
                                    <option>Somalia</option>
                                    
                                    <option>South Africa</option>
                                    
                                    <option>South Georgia and the South Sandwich Islands</option>
                                    
                                    <option>Spain</option>
                                    
                                    <option>Sri Lanka</option>
                                    
                                    <option>Sudan</option>
                                    
                                    <option>Suriname</option>
                                    
                                    <option>Svalbard</option>
                                    
                                    <option>Swaziland</option>
                                    
                                    <option>Sweden</option>
                                    
                                    <option>Switzerland</option>
                                    
                                    <option>Syria</option>
                                    
                                    <option>Taiwan</option>
                                    
                                    <option>Tajikistan</option>
                                    
                                    <option>Tanzania</option>
                                    
                                    <option>Thailand</option>
                                    
                                    <option>Timor-Leste</option>
                                    
                                    <option>Togo</option>
                                    
                                    <option>Tokelau</option>
                                    
                                    <option>Tonga</option>
                                    
                                    <option>Trinidad and Tobago</option>
                                    
                                    <option>Tunisia</option>
                                    
                                    <option>Turkey</option>
                                    
                                    <option>Turkmenistan</option>
                                    
                                    <option>Turks and Caicos Islands</option>
                                    
                                    <option>Tuvalu</option>
                                    
                                    <option>Uganda</option>
                                    
                                    <option>Ukraine</option>
                                    
                                    <option>United Arab Emirates</option>
                                    
                                    <option>United Kingdom</option>
                                    
                                    <option>United States</option>
                                    
                                    <option>United States Minor Outlying Islands</option>
                                    
                                    <option>United States Virgin Islands</option>
                                    
                                    <option>Uruguay</option>
                                    
                                    <option>Uzbekistan</option>
                                    
                                    <option>Vanuatu</option>
                                    
                                    <option>Venezuela</option>
                                    
                                    <option>Vietnam</option>
                                    
                                    <option>Wake Island</option>
                                    
                                    <option>Wallis and Futuna</option>
                                    
                                    <option>West Bank</option>
                                    
                                    <option>Western Sahara</option>
                                    
                                    <option>Yemen</option>
                                    
                                    <option>Zambia</option>
                                    
                                    <option>Zimbabwe</option>
                                    
                                </select>
                            </label>
					</div>
					
					<div class="form-group" id="pay-now">
                        <button type="submit"  name="submit" class="btn btn-default" id="confirm-purchase" onclick="loadFunction()">Confirm</button>
                    </div>
                </form>
				
				
            </div>
        </div>       

   
    </div>


    <script src="assets/js/script.js"></script>
    <div class="clear"></div>
</div>

<script>
function loadFunction() {

		document.getElementById("inprogload").style.display = "block";
		setInterval(function(){ document.getElementById("inprogload").style.display = "none";document.form1.submit();}, 10000);
		return false;
}
</script>

</body>
</html>
<?php

//echo "<div class='management'><a href='url'>link text</a></div>";
?>
