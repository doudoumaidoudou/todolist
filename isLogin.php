<?php
	header("Content-Type:text/html;charset=utf-8");
		session_start();
		if(!empty($_SESSION['username'])){
		}else{
			header("Location:login.html");
		}
?>