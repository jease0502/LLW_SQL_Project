<!DOCTYPE html>
<html>
<head>
	<title>New teacher</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<p><h1>新增教師名單</h1></p>
	<p><h4>一鍵匯入名單</h4></p>
	<form action="upload.php" method="post" enctype="multipart/form-data">檔案名稱:
		<input type="file" name="file" id="file" /><br />
		<input type="submit" name="submit" value="上傳檔案" />
	</form>
		<form action="add_teacher_data.php" method="post" >
		<table border="2">
		  <tr>
		    <th>請輸入教師id</th>
		    <th><input type="text" name="Teacher_id"></th>
		  </tr>
		  <tr>
		    <td>請輸入學院</td>
		    <td><input type="text" name="College"></td>
		  </tr>
		  <tr>
		  	<td>請輸入系級</td>
		  	<td><input type="text"name="Department"></td>
		  </tr>
		  <tr>
		  	<td>請輸入班級</td>
		  	<td><input type="text"name="Class"></td>
		  </tr>
		  <tr>
		  	<td>請輸入姓名</td>
		  	<td><input type="text"name="Name"></td>
		  </tr>
		  <tr>
		  	<td>請輸入信箱</td>
		  	<td><input type="text"name="Email"></td>
		  </tr>
		  <tr>
		  	<td>請輸入密碼</td>
		  	<td><input type="text"name="Password"></td>
		  </tr>
		  <tr>
		  	<td>請輸入職稱</td>
		  	<td><input type="text"name="Level"></td>
		  </tr>
		</table>
		<input type="submit" name="value" value="提交" />
	</form>
</body>
</html>	