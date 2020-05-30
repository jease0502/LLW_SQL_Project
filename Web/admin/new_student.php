<!DOCTYPE html>
<html>
<head>
	<title>新增學生資料</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<p><h1>新增學生名單</h1></p>
	<p><h4>一鍵匯入名單</h4></p>
	<form action="upload.php" method="post" enctype="multipart/form-data">檔案名稱:
		<input type="file" name="file" id="file" /><br />
		<input type="submit" name="submit" value="上傳檔案" />
	</form>
	<form action="add_student_data.php" method="post" >
		  <p>
		    <th>請輸入學號</th>
		    <th><input type="text" name="Student_id" ></th>
		  </p>
		  <p>
		    <td>請輸入學院</td>
		    <td><input type="text" name="College"></td>
		  </p>
		  <p>
		  	<td>請輸入系級</td>
		  	<td><input type="text"name="Department"></td>
		  </p>
		  <p>
		  	<td>請輸入年級</td>
		  	<td><input type="text"name="Class"></td>
		  </p>
		  <p>
		  	<td>請輸入班級</td>
		  	<td><input type="text"name="Grade"></td>
		  </p>
		  <p>
		  	<td>請輸入姓名</td>
		  	<td><input type="text"name="Name"></td>
		  </p>
		  <p>
		  	<td>請輸入信箱</td>
		  	<td><input type="text" name="Email" ></td>
		  </p>
		  <p>
		  	<td>請輸入密碼</td>
		  	<td><input type="text"name="Password"></td>
		  </p>
		  <p>
		  	<td>請輸入性別</td>
		  	<td><input type="text"name="gender"></td>
		  </p>
		<input type="submit" name="value" value="提交" />
		<input type="reset" name="value" value="清除" />
	</form>
</body>
</html>