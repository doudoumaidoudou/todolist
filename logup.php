<?php
header("Content-Type:text/html;charset=utf-8");
include './link.php';
$username  = $_POST['username'];
$email  = $_POST['email'];
$password  = $_POST['password'];
$sql = "INSERT INTO user VALUES(
	'','$username','$email','$password','now()'
)";
if($conn->query($sql)===TRUE){
	echo "1";
}else{
	echo "2";
};
?>