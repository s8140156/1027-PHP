<?php include_once "session.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>會員登入</title>
	<link rel="stylesheet" href="style.css">
	<style>
		.login-block {
			padding: 30px 40px;
			border: 1px solid #999;
			box-shadow: 2px 2px 15px #999;
			margin: 10px auto;
			width: 280px;
		}

		.login-input {
			margin: 10px;
		}

		.login-input input[type='text'] {
			border: 1px solid blue;
		}

		.login-input input {
			font-size: 20px;
			padding: 5px;
		}

		.btn {
			text-align: center;
			margin-top: 15px;
		}

		.btn input[type='reset'],
		.btn input[type='submit'] {
			padding: 5px 10px;
			border: 1px solid green;
			border-radius: 5px;
			margin: 5px;
		}
	</style>
</head>

<body>
	<?php
	if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
		include_once "header.php";
	}

	?>

	<div class='login-block'>
		<?php

		if (isset($_SESSION['error'])) {
			// 如果 'error' 變數存在，則顯示錯誤訊息(在check已設定錯誤顯示)
			echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
			unset($_SESSION['error']);
			 // 清除 'error' 變數，以避免重複顯示
		}

		if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
			// 如果這個session_login變數是存在的, 並且不是空值
			echo $_SESSION['login'] . " 歡迎你";
			echo "<a href='logout.php'>登出</a>";
			 // 顯示使用者歡迎訊息和登出連結
		} else {
			// 如果 'login' 變數不存在或為空，顯示登入表單以下html表單

		?>
			<form action="check.php" method="post">
				<!-- 會員密碼confidential 使用post -->
				<div class='login-input'>
					<label for="acc">帳號:</label>
					<input type="text" name="acc" id="acc">
				</div>
				<div class='login-input'>
					<label for="pw">密碼:</label>
					<input type="password" name="pw" id="pw">
				</div>
				<div class='btn'>
					<input type="submit" value="登入">
					<input type="reset" value="重置">
				</div>
			</form>
		<?php
		}

		?>



	</div>
</body>

</html>