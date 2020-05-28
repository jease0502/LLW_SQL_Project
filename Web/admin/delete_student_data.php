<?php
	require_once("conect.php");
	if(isset($_POST['Student_id']))
	{
		$db = new PDO('mysql:host=localhost;dbname=class_database',$connect_un,$connect_pw);
		$Student_id = $_POST['Student_id'];
		$q = "DELETE FROM student WHERE Student_id=$Student_id";
		$result = $db->exec($q);
	}
	else
	{
		
	}
?>