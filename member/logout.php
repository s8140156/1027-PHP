<?php

session_start();
// 記得要使用session 最前面要先宣告

unset($_SESSION['login']);
// 要登出會員 直接刪除session login這個變數即可

header("location:login.php");
// 通常登出會回到首頁 所以轉址到登入頁

?>
