<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>會員登入</title>
	<style>
		.login-block {
			padding: 30px 40px;
			border: 1px solid #999;
			box-shadow: 2px 2px 15px #999;
			margin: 10px auto;
			width: 280px;
		}
		.login-input[type='text']{
			border: blue;
		}
		
	</style>
</head>

<body>
	<div class='login-block'>
		<?php
		if(isset($_GET['m'])){
			echo "<span style='color:red'>".$_GET['m']."</span>";
		}
		if(isset($_GET['login']) && $_GET['login']==1){
			echo "歡迎你";
		}else{
			// else底下先包登入頁,因為程式碼長,所以php先切插入html然後再開php碼把}寫完

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
				<input type="submit" value="送出">
				<input type="reset" value="重置">
			</div>
		</form>
		<?php
		}

		?>



	</div>
</body>

</html>