<?php include_once "session.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>會員中心</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	include_once "header.php";
	?>

	<?php

	if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
		// 如果這個session_login變數是存在的, 並且不是空值
		echo "<h3>登入成功</h3>";
		echo "<a href='login.php'>回登入頁</a>";
		echo "<a href='logout.php'>登出</a>";
	} else {
		// 如果以上session組合沒被偵測到, 則會將告知使用者錯誤訊息(會顯示在login畫面)
		$_SESSION['error'] = "沒有登入相關驗證，非法登入";
		// 用於如果沒有登入成功卻硬闖會員中心者的訊息
		header("location:login.php");
		// 會被導回登入頁
	}

	?>
</body>

</html>