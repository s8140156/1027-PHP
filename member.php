<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>會員中心</title>
</head>
<body>
<?php
if($_GET['login']==1){
	echo "<h2>登入成功</h2>";
	echo "<a href='login.php?login=1'>回登入頁</a>";
	}else{
		header("locaion:login.php");
	}

	?>
</body>
</html>