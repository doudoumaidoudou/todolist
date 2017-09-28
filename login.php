<?php
include './link.php';
header("Content-Type:text/html;charset=utf-8");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$check_query = $conn->query($sql);
$result = mysqli_fetch_array($check_query);
if($result){
	echo "1";
	//开启session
    session_start();
	//创建session
    $_SESSION['username']=$username;	
    $_SESSION['password']=$password;
		
}else{
	echo "2";
};
$conn->close();
?>