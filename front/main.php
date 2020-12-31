<div class="half" style="vertical-align:top;">
  <h1>預告片介紹</h1>
  <div class="rb tab" style="width:95%;">
    <div id="abgne-block-20111227">
      <ul class="lists">
      </ul>
      <ul class="controls">
      </ul>
    </div>
  </div>
</div>
<div class="half">
  <h1>院線片清單</h1>
  <div class="rb tab" style="width:95%;display:flex;flex-wrap:wrap">
    <?php
    $count=$Movie->count();
    $div=4;
    $pages=ceil($count/$div);
    $now = (isset($_GET['p'])) ? $_GET['p'] : 1;
    $start = ($now - 1) * $div;
    $movies = $Movie->all(['sh' => 1], " order by rank limit $start,$div");

    foreach ($movies as $movie) {

      $date = strtotime($movie['year'] . "-" . $movie['month'] . "-" . $movie['day']);
      $today = strtotime(date("Y-m-d"));


      if ($date <= $today && $date >= strtotime("-2 days", $today)) {
    ?>
        <div style="width:50% ">
          <div>片名:<?= $movie['name']; ?></div>
          <div style="display:flex">
            <a href="javascript:location.href='index.php?do=intro&id=<?= $movie['id']; ?>'"><img src="img/<?= $movie['poster']; ?>" style="width: 80px;height:100px"></a>
            <div>分級:
              <img src="icon/<?= $movie['level']; ?>.png"><?= $movie['level']; ?>
              上映日期:<?= $movie['year'] . "-" . $movie['month'] . "-" . $movie['day']; ?>
            </div>
          </div>
          <div>
            <button onclick="javascript:location.href='index.php?do=intro&id=<?= $movie['id']; ?>'">劇情簡介</button>
            <button onclick="javascript:location.href='index.php?do=order&id=<?= $movie['id']; ?>'">線上訂票</button>
          </div>
        </div>

      <?php
      }
      ?>

    <?php
    }

    ?>
  </div>
  <div class="ct">
  <?php
  if (($now-1)>0) {
    echo "<a href='index.php?do=movie&p=".($now-1)."'> &lt; </a>";
  }
  for ($i=1; $i <=$pages ; $i++) {
    $fontsize=($i==$now)?"28px":"18px";

    echo "<a href='index.php?do=movie&p=$i' style='font-size:$fontsize'>$i</a>";
  }
  if (($now+1)<=$pages) {
    echo "<a href='index.php?do=movie&p=".($now+1)."'> &gt; </a>";
  }
?>
  </div>
</div>