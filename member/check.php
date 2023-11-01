<?php
include_once "session.php";



if ($_POST['acc']=='admin' && $_POST['pw'] == '1234') {

	$_SESSION['login']=$_POST['acc'];
	// session沒有特別函式 只是系統內建的陣列, 裏面[]自己取即可, 這裡將登入帳號存入 session 中
	
	header("location:member.php");
	// 導向到 member.php 頁面，表示登入成功


} else {
	$_SESSION['error']="帳號或密碼有誤,請重新登入";
	// 如果帳號或密碼有誤，設定錯誤訊息到會話變數
	header("location:login.php");
	// 導向回 login.php 頁面，讓使用者重新輸入帳號和密碼
	
}
?>
