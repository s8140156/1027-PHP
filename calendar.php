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

if(isset($_GET['next'])){
	$month=$_GET['next'];
}
if(isset($_GET['prev'])){
	$month=$_GET['prev'];
}

echo "<h3 style='text-align:center'>";
echo date("西元Y年 {$month} 月");
echo "</h3>";
$thisMonth = date("Y");
// echo $thisMonth;
$thisFirstday = date("Y-{$month}-1");
// echo $thisFirstday;
$thisFirstDate = date('w', strtotime($thisFirstday));
// echo $thisFirstDate;
$thisMonthDays = date("t");
// echo $thisMonthDays; 
$thisLastDay = date("Y-{$month}-$thisMonthDays");
// echo $thisLastDay;
$weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
// echo $weeks;
$firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstday)));
?>
<div style='width:264px;display:flex;margin:auto;justify-content:space-between'>
	<a href="?prev=9">上一個月</a>
	<a href="?next=11">下一個月</a>
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