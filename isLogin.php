<?php
	header("Content-Type:text/html;charset=utf-8");
		session_start();
		if(!empty($_SESSION['username'])){
		}else{
			echo "
				<script>
					location.href='login.html';
				</script>
			";
		}
?>