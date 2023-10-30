<?php

date_default_timezone_set("Asia/Taipei");

// session_start();
// 告訴伺服器我要使用session了, 寫在最外面
// 但網站規模大 需要的時候才開 不會一直掛著

// print_r($_POST);
// 可以先確認在login畫面輸入資料是否成功
// 因為是陣列所以用print_r取用

if ($_POST['acc']=='admin' && $_POST['pw'] == '1234') {

	setcookie("login","juliechen",time()+300);
	
	// $_SESSION['login']=$_POST['acc'];

	header("location:member.php");
	// echo "登入成功";

	// header("location:member.php?m=登入成功");
} else {
	setcookie("error","帳號或密碼有誤,請重新登入",time()+5);
	header("location:login.php");
	// echo "帳號或密碼錯誤, 請重新登入";
	// header("location:login.php?m=請輸入正確帳號密碼");
}



// $acc=$_GET['acc'];
// $pw=$_GET['pw'];

?>
