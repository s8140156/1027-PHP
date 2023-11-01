

<?php

if($_POST['acc']=='admin' && $_POST['pw']=="1234"){
    $_SESSION['login']=$_POST['acc'];
    header("location:member.php");
}else{
    $_SESSION['error']="帳號或密碼有誤, 請重新輸入";
    header("location:login.php");
}

?>