<?php
	include "./link.php";
	$user = $_POST['user'];
	$title = $_POST['title'];
	$content = $_POST['content'];
//创建数据库
	$dbname ="todolist";
//	create_database($dbname);
//	创建表
	$table_name ="message";
//	create_table($table_name)
	
	//插入数据
	$sql = "INSERT INTO message VALUES('','$user','$title','$content',now())";
	if($conn->query($sql)==TRUE){
		echo "<script>alert('提交成功!');
				location.href='list.php';
			 </script>";
	}else{
		echo "<script>
				alert('提交失败!');
				location.href='list.php';
			  </script>";
	}
	$conn->close();
?>