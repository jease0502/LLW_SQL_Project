<?php
$hostname = 'localhost';
$username = 'liu';
$password = 'iwanttologin';
$db_name="class_database";

try{
    $db=new PDO("mysql:host=".$hostname.";
                dbname=".$db_name, $username, $password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                //PDO::MYSQL_ATTR_INIT_COMMAND 設定編碼
               
    //echo '連線成功';
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //錯誤訊息提醒
   
    //Query SQL
    $sql="Select * from act where num=3";
    $result=$db->query($sql);   
    while($row=$result->fetch(PDO::FETCH_OBJ)){   
        //PDO::FETCH_OBJ 指定取出資料的型態
        echo $row->num."\n"; 
        echo $row->cn_title."\n";  
    }
   
    //Insert
    $count=$db->exec("insert into act(cn_title,eng_title) values('新聞', 'troy')");
    echo $count;       
   
   
    //Update
    $count=$db->exec("update act set cn_title='中文' where num=3");
   
    $db=null; //結束與資料庫連線
}
catch(PDOException $e){
    //error message
    echo $e->getMessage();
}
?>
?>