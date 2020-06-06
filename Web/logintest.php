<?php
	require_once("conect.php");
	if ( isset($_POST['account']) && isset($_POST['password'])){
		$account = $_POST['account'];
		$pwd = $_POST['password'];
		$account_T = substr($account,0,1);		
		switch($account_T){
			case 'D':
				try{
					$db = new PDO('mysql:host=localhost;dbname=class_database',$connect_un,$connect_pw);
					$cusr=$db->query("SELECT Student_id FROM student WHERE Student_id = '$account';");
					$row1=$cusr->fetch(PDO::FETCH_BOTH);
					if(empty($row1[0])){
						$db=null;
						alert("使用者不存在");
					}else {
						$cpwd=$db->query("SELECT Password FROM student WHERE Student_id = '$account';");
						$row2=$cpwd->fetch(PDO::FETCH_BOTH);
						if(!password_verify( $pwd ,$row2[0])){
							alert("使用者名稱或密碼錯誤");
						}else{
							session_start();
							$_SESSION['account'] = $account;
							$_SESSION['pwd'] = $pwd;
							header("refresh:0;url=welcome.php");
						}
						$db=null;
					}
				}catch (PODException $e){
					print "couldn't to connect to db " . $e->getMessage();
				}
			break;
			case 'T':
				try{
					$db = new PDO('mysql:host=localhost;dbname=class_database',$connect_un,$connect_pw);
					$cusr=$db->query("SELECT Password FROM admin WHERE Admin_id = '$account';");
					$row=$cusr->fetch(PDO::FETCH_BOTH);
				}catch (PODException $e){
					print "couldn't to connect to db " . $e->getMessage();
				}
			break;
			case 'A':
				$db = new PDO('mysql:host=localhost;dbname=class_database',$connect_un,$connect_pw);
				$cusr=$db->query("SELECT Password FROM admin WHERE Admin_id = '$account';");
				$row=$cusr->fetch(PDO::FETCH_BOTH);
				if($pwd == $row['Password']){
					session_start();
					$_SESSION['A_account'] = $account;
					$_SESSION['A_pwd'] = $pwd;
					header("refresh:0;url=admin\admin.php");
					$db=null;
				}else{
					alert("使用者名稱或密碼錯誤");
				}
			break;
		}
	}else{
		alert("輸入不正確請重新輸入");
	}
?>