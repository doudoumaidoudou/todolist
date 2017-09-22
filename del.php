<?php
header("Content-Type:'text/html;charset=utf-8");
include "./link.php";
$id = $_POST['id'];
$sql = "DELETE  FROM message WHERE id= $id"; 
if($conn->query($sql) === TRUE){
	echo "1";
}else{
	echo "2";
}
?>