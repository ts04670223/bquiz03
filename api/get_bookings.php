<?php
include_once "../base.php";

$sess = [
  1 => "14:00~16:00",
  2 => "16:00~18:00",
  3 => "18:00~20:00",
  4 => "20:00~22:00",
  5 => "22:00~24:00",
];


$movie = $Movie->find($_GET['movie']);
$date = $_GET['date']; //把今天的日期轉為秒數
$session = $_GET['session']; //把今天的日期轉為秒數

?>
<style>
  .seat {
    width: 62px;
    height: 85px;
    text-align: center;
    position: relative;
  }

  .booked {
    background: url('icon/03D03.png') no-repeat center;
  }

  .empty {
    background: url('icon/03D02.png') no-repeat center;
    position: relative;
  }

  .chk {
    display: block;
    position: absolute;
    bottom: 5px;
    right: 5px;
  }

  .booking-block {
    margin: auto;
    width: 540px;
    height: 370px;
    background: url('icon/03D04.png') no-repeat;
    padding-top: 20px;
  }

  .seat-block {
    width: 310px;
    height: 328px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
  }
</style>
<div class="booking-block">
  <div class="seat-block">
    <?php
    for ($i = 0; $i < 20; $i++) {
      echo "<div class='seat empty'>";
      echo (floor($i / 5) + 1) . "排" . ($i % 5 + 1) . "號";
      echo "<input type='checkbox' value='$i' class='chk'>";
      echo "</div>";
    }
    ?>
  </div>
</div>
<div style="padding:10px 20%;background:#ccc">
  <div>您選擇的電影是：<?= $movie['name']; ?></div>
  <div>您選擇的時刻是：<?= $date; ?> <?= $sess[$session]; ?></div>
  <div>您已經勾選<span id='ticket'></span>張票，最多可以購買四張票</div>
  <div class="ct">
    <button onclick="javascript:$('.order,.booking').toggle()">上一步</button><button>訂購</button>
  </div>
</div>