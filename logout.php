<?php

session_start();

unset($_SESSION['login']);

header("locaion:login.php");

?>
