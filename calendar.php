<style>
	* {
		font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	}

	table, tr,th,td {
		border: 3px double;
		/* double其實是三條線 但中間線是白色 看起來像雙線 */
		border-collapse: collapse;
	}



	td {
		border: 3px double;
		text-align: right;
		padding: 5px 10px;
	}
</style>



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

echo "<h3 style='text-align:center'>";
echo date("西元 {$year} 年 {$month} 月");
echo "</h3>";

$thisFirstday = date("{$year}-{$month}-1");
// echo $thisFirstday;
$thisFirstDate = date('w', strtotime($thisFirstday));
// echo $thisFirstDate;
$thisMonthDays = date("t");
// echo $thisMonthDays; 
$thisLastDay = date("{$year}-{$month}-$thisMonthDays");
// echo $thisLastDay;
$weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
// echo $weeks;
$firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstday)));
?>
	<!-- < ? = 等於 < ? php echo的縮寫 加入$next; 然後在正常結尾 ? > -->
	<!-- 因在html下 要把變數嵌在裡面使用這樣寫法 適合只echo一個變數時寫法 -->
<div style='width:264px;display:flex;margin:auto;justify-content:space-between'>
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
	<a href="?year=<?=$prevYear;?>&?month<?=$prev;?>">上一個月</a>
	<a href="?year=<?=$nextYear;?>&?month<?=$next;?>">下一個月</a>
</div>
<table style='width:264px;display:block;margin:auto'>
	<tr>
		<th>sun</th>
		<th>mon</th>
		<th>tue</th>
		<th>wed</th>
		<th>thu</th>
		<th>fri</th>
		<th>sat</th>
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