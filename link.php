<?php
	header("Content-Type:text/html;charset=utf-8");
//链接数据库
	$severname = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "todolist";
	$conn = new mysqli($severname,$username,$password,$dbname);
	if($conn ->connect_errno){
		die("链接失败".$conn->connect_error);
	};
//	echo "链接成功";
//创建数据库
	function create_database($dbname) {
		global $conn;
		$sql= "CREATE DATABASE $dbname";
		if($conn->query($sql)===FALSE){
			echo "数据库创建失败".$conn->connect_errno;
		}else{
			echo "创建成功";
		}
	}
	
?>