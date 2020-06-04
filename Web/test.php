<?php
$timeout = "1";
$services = array();
$services[] = array("port" => "80","service" => "Web server","ip" => "127.0.0.1") ;
if($services['ip']=="")
	{
		$services['ip'] = "localhost";
	}
	$data = "<tr><td>" . $services['service'] . "</td><td>". $services['port'];
	$fp = @fsockopen($services['ip'], $services['port'], $errno, $errstr, $timeout);
			if (!$fp)
			{
				$data .= "</td><td class='table-danger'>Offline </td></tr>";
			  //fclose($fp);
			} else
			{
				$data .= "</td><td class='table-success'>Online</td></tr>";
				fclose($fp);
			}
	echo $data;
?>