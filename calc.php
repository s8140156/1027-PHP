<?php

if(!empty($_GET)){
	$weight=(!empty($_GET['weight']))?$_GET['weight']:'沒有體重資料';
	$height=(!empty($_GET['height']))?$_GET['height']:'沒有身高資料';

	$bmi=round($weight/($height*$height),2);
// echo 'by $weight,$height: ';
// echo "體重:" .$weight;
// echo "身高:" .$height;
// echo "BMI:" .$bmi;

header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
// echo "<br>";
// echo 'by $_GET: ';
// echo "體重:" .$_GET['weight'];
// echo "身高:" .$_GET['height'];
}else{

	header("location:bmi.php?m=請輸入必要的資訊");
	// echo "請輸入必要的資訊";
}




?>