<!DOCTYPE html>
<html>
<head>
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
		.button {
			display: inline-block;
			text-align: center;
			vertical-align: middle;
			padding: 12px 25px;
			border: 1px solid #3c3939;
			border-radius: 8px;
			background: #726b6b;
			background: -webkit-gradient(linear, left top, left bottom, from(#726b6b), to(#3c3939));
			background: -moz-linear-gradient(top, #726b6b, #3c3939);
			background: linear-gradient(to bottom, #726b6b, #3c3939);
			-webkit-box-shadow: #898080 0px 0px 40px 0px;
			-moz-box-shadow: #898080 0px 0px 40px 0px;
			box-shadow: #898080 0px 0px 40px 0px;
			text-shadow: #242222 1px 1px 1px;
			font: normal normal bold 20px times new roman;
			color: #ffffff;
			text-decoration: none;
		}
		.button:hover,
		.button:focus {
			border: 1px solid #474343;
			background: #898080;
			background: -webkit-gradient(linear, left top, left bottom, from(#898080), to(#484444));
			background: -moz-linear-gradient(top, #898080, #484444);
			background: linear-gradient(to bottom, #898080, #484444);
			color: #ffffff;
			text-decoration: none;
		}
		.button:active {
			background: #3c3939;
			background: -webkit-gradient(linear, left top, left bottom, from(#3c3939), to(#3c3939));
			background: -moz-linear-gradient(top, #3c3939, #3c3939);
			background: linear-gradient(to bottom, #3c3939, #3c3939);
		}		
</style>
	<title>教師管理頁面</title>
</head>
<div id="topContent">
<h1>教師管理頁面</h1>
</div>
<table>
	<tr>
		<td><input type="button" class="button" value="課程編輯" onclick="location.href='teacher_course.php'">
	<tr>
		<td><input type="button" class="button" value="課程選課狀態" onclick="location.href='teacher_course_status.php'">
	<tr>
		<td><input type="button" class="button" value="教師資料編輯" onclick="location.href='teacher_contact.php'">
	<tr>
</table>
</html>