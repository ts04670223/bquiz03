<?php
include_once "../base.php";

$sess=[
  1=>"14:00~16:00",
  2=>"16:00~18:00",
  3=>"18:00~20:00",
  4=>"20:00~22:00",
  5=>"22:00~24:00",
];


$movie=$Movie->find($_GET['movie']);
$date=$_GET['date'];//把今天的日期轉為秒數
$session=$_GET['session'];//把今天的日期轉為秒數

?>

<div style="margin:auto;width: 540px;height:370px;background:url('icon/03D04.png')">
</div>
<div style="width: 100%;padding:0 20%">
<div>您選擇的電影是:<?=$movie['name'];?></div>
<div>您選擇的時刻是:<?=$date;?><?=$sess[$session];?></div>
<div>您已經勾選:<span id="ticket"></span>張票，最多可以購買四張票</div>
<div class="ct">
<button onclick="javascript:$('.order,booking').toggle()">上一步</button>
<button>訂購</button>
</div>
</div>