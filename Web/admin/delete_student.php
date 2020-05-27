<?用php去印表格?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Teacher data</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<h1>刪除學生資料</h1>
	<form>
		<select name="查詢項目">
		　<option value="id">學生id</option>
		　<option value="name">姓名</option>
		</select>
		<input type="text" name="sth">
	</form>
	<td>
	<form action="delete_student.php" method="post" >
		<input type="submit" name="value" value="提交"/>
		<table border="2">
		  <tr>
		    <th>學生id</th>
		    <th width = 200px></th>
		  </tr>
		  <tr>
		    <td>學院</td>
		    <td></td>
		  </tr>
		  <tr>
		  	<td>系級</td>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td>年級</td>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td>班級</td>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td>姓名</td>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td>信箱</td>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td>密碼</td>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td>性別</td>
		  	<td></td>
		  </tr>
		</table>	
	</form>
</body>
</html>