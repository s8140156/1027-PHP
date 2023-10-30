<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>會員中心</title>
</head>
<body>
<?php
session_start();
// 告訴伺服器我要使用session了, 寫在最外面

if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
	echo "<h2>登入成功</h2>";
	echo "<a href='login.php'>回登入頁</a>";
	}else{
		// header("locaion:login.php");
	}

	?>
</body>
</html>