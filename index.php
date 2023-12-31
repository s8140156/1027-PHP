<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>網頁傳值</title>
</head>

<body>
	<h2>get ?</h2>
	<form action="?" method="get">
		<!-- get預設method就是get -->
		<div>
			<label for="acc">帳號</label>
			<input type="text" name="acc" id="acc">
		</div>
		<div>
			<label for="pw">密碼</label>
			<input type="password" name="pw" id="pw">
		</div>
		<div>
			<input type="submit" value="送出">
			<input type="reset" value="重置">
		</div>
	</form>
	<h2>post</h2>
	<form action="?" method="post">
		<div>
			<label for="acc">帳號</label>
			<input type="text" name="acc" id="acc">
		</div>
		<div>
			<label for="pw">密碼</label>
			<input type="password" name="pw" id="pw">
		</div>
		<div>
			<input type="submit" value="送出">
			<input type="reset" value="重置">
		</div>
	</form>

	<h2>檔案上傳(大多數會選擇post)</h2>
	<form action="?" method="post" enctype="multipart/form-data">
		<!-- ecn: encode編碼 -->
		<div>
			<label for="acc">帳號</label>
			<input type="text" name="acc" id="acc">
		</div>
		<div>
			<label for="pw">密碼</label>
			<input type="password" name="pw" id="pw">
		</div>
		<div>
			<label for="img">檔案上傳</label>
			<input type="file" name="file" id="file">
		</div>
		<div>
			<input type="submit" value="送出">
			<input type="reset" value="重置">
		</div>
	</form>
	<!-- 要重新寫過 -->
</body>

</html>