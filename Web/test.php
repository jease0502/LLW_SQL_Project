<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<title>Admin</title>
	</head>
	<body>
		<h1>管理者介面</h1>

<?php

	print "<div class=\"container\">";
	$data = "";
	$data .= '
	<div class="card my-2">
	  <h4 class="card-header text-center">
	    Service status
	  </h4>
	<div class="card-body pb-0">
	';

	$timeout = "1";

	$services = array();


	$services[] = array("port" => "80",       "service" => "Web server",              "ip" => "") ;
	$services[] = array("port" => "21",       "service" => "FTP",                     "ip" => "") ;
	$services[] = array("port" => "3306",     "service" => "MYSQL",                   "ip" => "") ;
	// $services[] = array("port" => "3000",     "service" => "Mastodon web",                   "ip" => "") ;
	// $services[] = array("port" => "4000",     "service" => "Mastodon streaming",                   "ip" => "") ;
	$services[] = array("port" => "22",       "service" => "Open SSH",				"ip" => "") ;
	$services[] = array("port" => "58846",     "service" => "Deluge",             	"ip" => "") ;
	$services[] = array("port" => "8112",     "service" => "Deluge Web",             	"ip" => "") ;
	$services[] = array("port" => "80",       "service" => "Internet Connection",     "ip" => "google.com") ;
	$services[] = array("port" => "8083",     "service" => "Vesta panel",             	"ip" => "") ;


	//begin table for status
	$data .= "<small><table  class='table table-striped table-sm '><thead><tr><th>Service</th><th>Port</th><th>Status</th></tr></thead>";
	foreach ($services  as $service) {
		if($service['ip']==""){
		   $service['ip'] = "localhost";
		}
		$data .= "<tr><td>" . $service['service'] . "</td><td>". $service['port'];

		$fp = @fsockopen($service['ip'], $service['port'], $errno, $errstr, $timeout);
		if (!$fp) {
			$data .= "</td><td class='table-danger'>Offline </td></tr>";
		  //fclose($fp);
		} else {
			$data .= "</td><td class='table-success'>Online</td></tr>";
			fclose($fp);
		}

	}
	//close table
	$data .= "</table></small>";
	$data .= '
	  </div>
	</div>
	';
	echo $data;
?>
</body>
</html>