<!DOCTYPE html>
<html>
<head>
	<title>教師課程內容編輯</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php
session_start();
$T_id = $_SESSION['T_account'];
require_once("conect.php");
$db = new PDO('mysql:host=localhost;dbname=class_database',$connect_un,$connect_pw);
$q = "SELECT class_detail.Code FROM class_detail INNER JOIN teacher ON teacher.Name = class_detail.Teacher_Name and teacher.Teacher_id = '$T_id'";
$query = $db->query($q);
$datalist = $query->fetchAll();
foreach ($datalist as $datainfo)
	    	{
		       //echo $datainfo[0];
		       //echo "<br />";
	    	}
?>

<body>
	<h1>教師課程內容編輯</h1>
	<form name="myForm" action="course_view.php" method="post" >
		<h5 >請輸入課程代碼</h5>
		<input  align="center" type="submit" name="value" value="提交" />
		<select  name="Code">
            <?php
            foreach ($datalist as $datainfo)
            	{
            		print "<option value='$datainfo[0]'>$datainfo[0]</option>";
            	}

            ?>
        </select>
	</form>
<input type ="button" onclick="history.back()" value="回到上一頁">
</body>
</html>