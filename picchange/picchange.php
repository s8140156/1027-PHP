<?php
	$Weekday = gmdate("l");
	// 根據今天是星期幾決定要使用哪個背景圖片
	switch ($Weekday) {
		case "Sunday":
			$Bg = "bg0.gif";
			$Weekdayname = "星期日 ($Weekday)";
			break;
		case "Monday":
			$Bg = "bg1.gif";
			$Weekdayname = "星期一 ($Weekday)";
			break;
		case "Tuesday":
			$Bg = "bg2.gif";
			$Weekdayname = "星期二 ($Weekday)";
			break;
		case "Wednesday":
			$Bg = "bg3.gif";
			$Weekdayname = "星期三 ($Weekday)";
			break;
		case "Thursday":
			$Bg = "bg4.gif";
			$Weekdayname = "星期四 ($Weekday)";
			break;
		case "Friday":
			$Bg = "bg5.gif";
			$Weekdayname = "星期五 ($Weekday)";
			break;
		case "Saturday":
			$Bg = "bg6.gif";
			$Weekdayname = "星期六 ($Weekday)";
	}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body background="img/<?php echo $Bg; ?>">
    <p>今天為 <?php echo gmdate("Y/n/j"); ?>，<?php echo $Weekdayname; ?></p>
    <p>今天的背景圖片為 <b><i><?php echo $Bg; ?></i></b></p>
  </body>
</html>

