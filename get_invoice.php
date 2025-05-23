<?php
$ini_array = parse_ini_file("config.ini", true);
extract($ini_array);
$api_key;
$api_root_url;
$zone_id;
$port;
include('session.php');
$seesion  = $_SESSION['session_id'] ="$session_id";
$response_id = $_SESSION['response_id'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$api_root_url/ceapi/v2/billing/invoicedetails?accountid=$response_id&reporttype=xml",
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
    "Postman-Token: 7c64ab35-1484-4419-9d28-59e164deb036,e1ea63f4-3c03-4707-9cf3-9120aed8d909",
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
	 	echo "<pre>";
		//print_r($response);
		echo "</pre>"; 
		 $count = $response->Invoices->invoice->count();
		$name = $response->Invoices->invoice->name;
		$productname = $response->Invoices->invoice->productname;
		$accountguid = $response->Invoices->invoice->accountguid;
$liveaccountid = $response->Invoices->invoice->liveaccountid;
$liveinvoiceid = $response->Invoices->invoice->liveinvoiceid;
		$_SESSION['liveaccountid'] ="$liveaccountid"; 
		 	 $_SESSION['liveinvoiceid'] ="$liveinvoiceid"; 
		$id = $response->Invoices->invoice->id;
		$date = $response->Invoices->invoice->date;
		$paymentstatus = $response->Invoices->invoice->paymentstatus;
		$paymentDate = $response->Invoices->invoice->paymentDate;
		$productid = $response->Invoices->invoice->productid;
		$price = $response->Invoices->invoice->price;
		$credit_adjustment = $response->Invoices->invoice->credit_adjustment;

}
?>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  font-family: Segoe UI Semibold,Calibri, Arial, Tahoma, Helvetica, sans-serif;
  font-size:12px;
}
td {padding:8px 6px;}
table thead tr {background:#0E689E !important;color:#ffffff;font-weight:bolder;}
tbody tr:nth-child(odd) {background-color: #E0EFF8;}
</style>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="paging.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="scripts/jquery.table.hpaging.min.js"></script>
    <style>
    body { background-color:#fafafa;}
   
    table { margin:10px 0;}
    </style>
</head>
<body>

    <div class="container">
   </br></br>
   <h5> List of Tenant Invoice</h5>
        <!--<table>
            <tr>
                <td>
                    <input id="pglmt" placeholder="Page Limit" title="Page Limit" value="10" class="form-control">
                </td>
                <td>
                    <button id="btnApply" class="btn btn-danger">Apply</button>
                </td>
            </tr>
        </table>-->
        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>
                        Invoice Number 
                    </th>
                    <th>
                        Subscription Plan Name
                    </th>
                    <th>
                       Invoice Date
                    </th>
                    <th>
                       	Invoice Amount ($)
                    </th>
                    <th>
                       Payment Status
                    </th>
					<th>
                      	Paid Date
                    </th>
                </tr>
            </thead>
            <tbody>
                	<?php

for ($x = 0; $x <= $count; $x++) {

?>
		<tr>
			<td><a href="/sugarcrm/invoice_details.php?id=<?php echo $id = $response->Invoices->invoice[$x]->liveinvoiceid;  ?>"><?php echo $id = $response->Invoices->invoice[$x]->id;  ?></a></td>
			<td><?php echo $productname = $response->Invoices->invoice[$x]->productname;  ?></td>
			<td><?php echo $date = $response->Invoices->invoice[$x]->date; ?></td>
			<td><?php echo $price = $response->Invoices->invoice[$x]->price; ?></td>
			<td><?php echo $paymentstatus = $response->Invoices->invoice[$x]->paymentstatus; ?></td>
			<td><?php echo $paymentDate = $response->Invoices->invoice[$x]->paymentDate; ?></td>
		</tr>
<?php } ?>
             
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        $(function () {
            $("#table1").hpaging({ "limit": 10 });
        });

        $("#btnApply").click(function () {
            var lmt = $("#pglmt").val();
            $("#table1").hpaging("newLimit", lmt);
        });
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
