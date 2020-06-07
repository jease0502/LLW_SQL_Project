<!DOCTYPE html>
<html>
<head>
	<title>新增學生資料</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script src="bootstrap-3.3.7-dist\js/bootstrap.min.js"></script>
	<Style>
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
		input[type=text], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		#class td{
			vertical-align: middle;
			text-align:center;
		}
		#sub{
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		
		#sub2{
			width: 100%;
			background-color: #E8FFE8;
			color: black;
			padding: 8px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}		
		
	</style>	
</head>
<body>
	<?php
		include "admin_nav.php";
	    nav_in();
	?>
	<script>
		department=new Array();
		department[1]=["資訊系","自控系","通訊系","電機系","電子系","資電不分系"];	// 資電學院
		department[2]=["國貿系", "會計系", "國貿系全英班", "商學院", "財稅系","合經系","統計系","經濟系","企管系","行銷系","商學學士學位學程"];	// 商學院
		department[3]=["通識中心"];			//通識中心
		function renew(index)
		{
			for(var i=0;i<department[index].length;i++)
			document.myForm.Department.options[i]=new Option(department[index][i], department[index][i]);	// 設定新選項
			document.myForm.Department.length=department[index].length;	// 刪除多餘的選項
		}
	</script>
	<div id="topContent">
		<h1>新增學生名單</h1>
	</div>
	<h4>一鍵匯入名單</h4>
	<form action="upload.php" method="post" enctype="multipart/form-data">檔案名稱:
		<input type="file" name="file" id="file"><br />
		<input type="submit" name="submit" value="上傳檔案">
	</form>
	
	<form name="myForm" action="add_student_data.php" method="post" >
		  <p>
		    <th><font size="5">請輸入學號</font></th>
		    <th><input type="text" name="Student_id" ></th>
		  </p>
		  <tr>
		    <td><font size="5">請輸入學院</font></td>
		  </tr>
		  <select name="College"  onChange="renew(this.selectedIndex);">
		  	<option value="">請選擇</option>
　			<option value="資電學院">資電學院</option>
　			<option value="商學院">商學院</option>
　			<option value="通識中心">通識中心</option>
		  </select>
		</p>
		  <p>
		  	<tr>
		  		<td><font size="5">請輸入系級</font></td>
		 	</tr>
			<select name="Department" >
				<option value="">
			</select>
		  </p>
		  <p>
		  	<td><font size="5">請輸入年級</font></td>
		  	<td><input type="text"name="Grade"></td>
		  </p>
		  <p>
		  	<td><font size="5">請輸入班級</font></td>
		  	<td><input type="text"name="Class"></td>
		  </p>
		  <p>
		  	<td><font size="5">請輸入姓名</font></td>
		  	<td><input type="text"name="Name"></td>
		  </p>
		  <p>
		  	<td><font size="5">請輸入信箱</font></td>
		  	<td><input type="text" name="Email" ></td>
		  </p>
		  <p>
		  	<td><font size="5">請輸入密碼</font></td>
		  	<td><input type="text"name="Password"></td>
		  </p>
		  <p>
		  	<td><font size="5">請輸入性別</font></td>
		  	<td><input type="text"name="gender"></td>
		  </p>
		
		<input type="submit" id="sub" name="value" value="提交" />
		<input type="reset" id="sub2" name="value" value="清除" />
	
	</form>
</body>
</html>