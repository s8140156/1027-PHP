<?php

// print_r($_POST);
// 可以先確認在login畫面輸入資料是否成功
// 因為是陣列所以用print_r取用

if ($_POST['acc'] == 'admin' && $_POST['pw'] == '1234') {
	header("location:member.php?login=1");
	// echo "登入成功";

	// header("location:member.php?m=登入成功");
} else {
	header("location:login.php?m=帳號或密碼有務請重新登入");
	// echo "帳號或密碼錯誤, 請重新登入";
	// header("location:login.php?m=請輸入正確帳號密碼");
}



// $acc=$_GET['acc'];
// $pw=$_GET['pw'];
