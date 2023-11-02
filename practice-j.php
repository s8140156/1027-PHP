

<?php

header("Content-type:text/html; charset=utf-8");

session_start();
echo "Session ID為" . session_id() . "<br>";
if(!isset($_SESSION['count'])){
    $_SESSION['count']=1;
}else{
    $_SESSION['count']++;
}
echo "這是你在本瀏覽器第{$_SESSION['count']}次載入本網頁";

session_destroy();

?>