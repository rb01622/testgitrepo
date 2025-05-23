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
    <?php include('get_subscription.php');?>
    <div class="clear"></div>
</div>



</body>
</html>
<?php

//echo "<div class='management'><a href='url'>link text</a></div>";
?>