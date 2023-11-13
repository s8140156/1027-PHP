<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
// 建立pdo物件

$pdo=new PDO($dsn,'root','');
// 建立pdo物件 =右邊


// $sql="select * from students";
// $rows=$pdo->query($sql)->fetchAll();

// "新增(insert)"欄位 看localhost畫面不會有任何回應 但可以從資料庫中刷新看是否有更新上去
// 可是如果一直刷新localhost會一直新增會計喔
// $sql="insert into `dept`(`code`,`name`) values('801','會計科');";

// $pdo->query($sql);

//  update是修改(編輯)喔 不是新增
// $sql="update `dept` set `code`='901',`name`='演藝科' where `id`='9'";
// $pdo->query($sql);

// $sql="update `students` set `birthday`='1984-05-10' where `id`='1'";
// $pdo->query($sql);

// 這是刪除指令
// $sql="delete from `dept` where `id`='9'";
// $pdo->query($sql);

// exec指令 執行後(會依crud指令執行) 並告訴你執行後影響了幾筆資料, 用在updat, insert, delete
// $sql="delete from `dept` where `id`='7'";
// echo $pdo->exec($sql);

$sql="update `students` set `birthday`='1984-07-07' where `id`='4'";
$pdo->exec($sql);


// echo "<pre>";
// print_r($rows[0][2]);
// print_r($rows[0]['parents']);
// echo "</pre>";

// 組成物件的方式

// class A{

// $aa
// $bb
// // 成員

// function cc(){
// 	// 方法

// }

// }