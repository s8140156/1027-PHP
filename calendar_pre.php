<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
	* {
		font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	}

	table,tr,td{
		border: 3px double #999;
		/* double其實是三條線 但中間線是白色 看起來像雙線 */
		border-collapse: collapse;
	}

	td {
		border: 1px solid #999;
		text-align: center;
		padding: 5px 10px;
	}
    </style>
</head>
<body>
<?php

if(isset($_GET['month']) && isset($_GET['year'])){
	$month=$_GET['month'];
	$year=$_GET['year'];
	// 如果有那拿到月份變數, 則就顯示變數的那個月;
}else{
	$month=date('m');
	$year=date('Y');
	// 如果沒拿到變數, 則顯示當前月;
}
// 雖然這邊寫法一樣僅變數不同, 也不需合併簡寫 還是獨立分開寫 因為大致上點選月曆時不會同時看上個月, 下個月
// 透過網頁傳值,可以讓程式自己去跑月份出來

switch ($month) {
    case "jan":
        $Bg = "bg01.gif";
        break;
    case "feb":
        $Bg = "bg02.gif";
        break;
    case "mar":
        $Bg = "bg03.gif";
        break;
    case "apr":
        $Bg = "bg04.gif";
        break;
    case "may":
        $Bg = "bg05.gif";
        break;
    case "jun":
        $Bg = "bg06.gif";
        break;
    case "jun":
        $Bg = "bg06.gif";
        break;
}


echo "<h3 style='text-align:center'>";
echo date("西元 {$year} 年 {$month} 月");
echo "</h3>";

$thisFirstday = date("{$year}-{$month}-1");
// 
$thisFirstDate = date('w', strtotime($thisFirstday));
// 
$thisMonthDays = date("t");
// 
$thisLastDay = date("{$year}-{$month}-$thisMonthDays");
// 
$weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
// 
$firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstday)));
?>
	<!-- < ? = 等於 < ? php echo的縮寫 加入$next; 然後在正常結尾 ? > -->
	<!-- 因在html下 要把變數嵌在裡面使用這樣寫法 適合只echo一個變數時寫法 -->
<div style='width:310px;display:flex;margin:auto;justify-content:space-between'>
<?php
$nextYear=$year;
$prevYear=$year;
// 因變數$nextYear & $prevYear在先前未被使用過 如果未先宣告變數 在下面判斷是無法使用 需要在程式開始前先宣告
if(($month+1)>12){
	$next=1;
	$nextYear=$year+1;
}else{
	$next=$month+1;
	$nextYear=$year;
}

if(($month-1)<1){
	$prev=12;
	$prevYear=$year-1;
}else{
	$prev=$month-1;
}
?>

<a href="?year=<?=$prevYear;?>&month=<?=$prev;?>">上一個月</a>
<a href="?year=<?=$nextYear;?>&month=<?=$next;?>">下一個月</a>
</div>
<table style='width:310px;display:block;margin:auto'>
	<tr>
		<td>sun</td>
		<td>mon</td>
		<td>tue</td>
		<td>wed</td>
		<td>thu</td>
		<td>fri</td>
		<td>sat</td>
	</tr>
<?php
	for ($i = 0; $i < $weeks; $i++) {
		echo "<tr>";
		for ($j = 0; $j < 7; $j++) {
			$addDays = 7 * $i + $j;
			// 計算日期格是第一週開始後的哪一天
			$thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
			// 計算每個日期格的實際日期，基於第一週的第一格的時間
			if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
				echo "<td style='background: lightcoral'>";
			} else {
				echo "<td>";
			}
			if (date("m", $thisCellDate) == date("m", strtotime($thisFirstday))) {
				// 檢查日期格是否在本月範圍內 月份有符合本月則可以顯示
				echo date("j", $thisCellDate);
			}
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>


    
</body>
</html>