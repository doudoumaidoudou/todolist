<html>
	<head>
		<title>todolist</title>
	</head>
	<body>
		<form action="./add.php" method="post">
			<input type="text" name="user" id="" value="" /><br />
			<input type="text" name="title" id="" value="" /><br />
			<input type="text" name="content" id="" value="" /><br />
			<input type="submit" value="发表" name=""/><br />
		</form>		
		<!---->
		<a href="logout.php">退出登录</a>
	</body>
	<script src="js/jquery.js"></script>
	
</html>
<?php
	include './link.php';
	include './isLogin.php';
	$sql = "SELECT * FROM message";
	$result =  $conn->query($sql);
	while ($row = mysqli_fetch_array($result)){?>
	    <ul>
			<li>
				<p>用户：<?php echo $row['user'];?></p>
				<p>主题：<?php echo $row['title'];?></p>
				<p>内容：<?php echo $row['content'];?></p>
				<p>时间：<?php echo $row['timeStamp'];?></p>
				<button value="<?php echo $row['id'];?>">删除</button>
			</li>
		</ul>
 <?php } 
	$conn->close();
?>
<script>
		$('button').on('click',function(){
			var val =$(this).val()
			$.ajax({
				type:"POST",
				url:"./del.php",
				dataType:"json",
				data:{
					id:val
				},
				success:function(data){
					if(data===1){
						location.reload()
						alert("删除成功！");
					}
				},
				error:function(err){
					alert(2+err)
				}
			})
		})
	</script>
