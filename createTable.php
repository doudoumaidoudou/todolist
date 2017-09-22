<?php
include "./link.php";
header("Content-Type:text/html;charset=utf-8");


//创建message表
//$sql = "CREATE TABLE $table_name(
//			id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//			user VARCHAR(20) NOT NULL,
//			title VARCHAR(50) NOT NULL,
//			content VARCHAR(200) NOT NULL,
//			timeStamp TIMESTAMP NOT NULL
//		)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

//创建username表
//$sql_username = "CREATE TABLE user(
//	userId INT(6) AUTO_INCREMENT PRIMARY KEY,
//	username VARCHAR(20) NOT NULL,
//	email VARCHAR(20) NOT NULL,
//	password VARCHAR(20) NOT NULL,
//	login_time TIMESTAMP NOT NULL 
//	)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";


	
	if($conn->query($sql)===TRUE){
		echo "表创建成功";
	}else{
		echo "表创建失败 $conn->connect_errno";
	}

?>