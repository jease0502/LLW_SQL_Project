<!DOCTYPE html>
<html>
<head>
	<title>Delete Student data</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script src="bootstrap-3.3.7-dist\js/bootstrap.min.js"></script>
	<style>
		#topContent {
			background-image: url('./Images/login_banner.jpg');
			background-repeat: no-repeat;
			text-align: right;
			background-color: #006699;
			color: White;
			font-size: x-large;
			text-decoration: none;
			font-weight: bold;
			padding: 10px;
			height: 75px;
			min-width: 970px;	
		}	
	</style>
</head>
<body>
    <?php
	    include "admin_nav.php";
        nav_in();
    ?>
	<div id="topContent">
		<h1>修改教師資料</h1>
	</div>
	<form action="DT.php" method="post">
		<select name="search_item" style="font-size:25px;">
		　<option value="id">教師id</option>
		　<option value="name">姓名</option>
		</select>
		<input type="text" name="Teacher_id">
		<input type="submit" id="button_s" value="查詢"/>
    </form>
</body>
</html>
