<style>
  .posters {
    width: 200px;
    height: 260px;
    margin: auto;
    text-align: center;
    position: relative;
  }

  .posters>div {
    position: absolute;
  }

  .posters img {
    width: 100%;
  }

  .buttons {
    display: flex;
    width: 400px;
    justify-content: center;
    align-items: center;
    margin: auto;
  }
.list{
  display: flex;
  width: 320px;
  overflow: hidden;
}
  .buttons .btn {
    width: 80px;
    height: 100px;
    text-align: center;
    flex-shrink: 0;
    position: relative;

  }

  .btn img {
    width: 70px;
  }
  .arrow{
    height: 0px;
    width: 0px;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
  }
  .left{
    border-right: 20px solid yellow;
  }
  .right{
    border-left: 20px solid yellow;
  }
</style>
<div class="half" style="vertical-align:top;">
  <h1>預告片介紹</h1>
  <div class="rb tab" style="width:95%;">
    <div class="posters">
      <?php
      $posters = $Poster->all(['sh' => 1], " order by rank");
      foreach ($posters as $key => $poster) {
        echo "<div class='po' id='p{$key}' data-ani='{$poster['ani']}'>";
        echo "<img src='img/{$poster['img']}'>";
        echo "<span >{$poster['name']}</span>";
        echo "</div>";
      }
      ?>
    </div>
    <div class="buttons">
      <div class="arrow left"></div>
      <div class="list">
      <?php

      $posters = $Poster->all(['sh' => 1], " order by rank");
      foreach ($posters as $key => $poster) {
        echo "<div class='btn' id='b{$key}' data-ani='{$poster['ani']}'>";
        echo "<img src='img/{$poster['img']}'>";
        echo "<span>{$poster['name']}</span>";
        echo "</div>";
      }
      ?>
      </div>
      <div class="arrow right"></div>
    </div>
  </div>
  <script>
    let p=0;
    let pos = $(".po").length;

    $(".arrow").on("click",function(){
      if ($(this).hasClass('right')) {
        console.log("aaa")
        // 點右邊
        if((p+1)<=(pos-4)){
          p++;
        }
      }else{
        if((p-1)>=0){
          p--;
        }
      }
      $(".btn").animate({right:p*80})

        // $(".btn").hide();
        // for(i=p;i<p+4;i++){
        //   $('#b'+i).show()
        // }
        
    })

    $(".po").hide();
    $("#p0").show();
    let t = setInterval('ani()', 2500);

    function ani() {
      let now = $(".po:visible");
      let ani = $(now).data('ani');
      let next
      if ($(now).next().length) {
        next = $(now).next()
      } else {
        next = $("#p0")
      }
      switch (ani) {
        case 1:
          $(now).fadeOut(1000)
          $(next).fadeIn(1000)
          break
        case 2:
          $(now).slideUp(1000)
          $(next).slideDown(1000)
          break
        case 3:
          $(now).hide(1000)
          $(next).show(1000)
          break
      }
    }
  </script>
</div>
<div class="half">
  <h1>院線片清單</h1>
  <div class="rb tab" style="width:95%;display:flex;flex-wrap:wrap">
    <?php
    $today = date("Y-m-d");
    $startDate = date("Y-m-d", strtotime("-2 day", strtotime($today)));

    $count = $Movie->count(['sh' => 1], " && `ondate` between '$startDate' and '$today' ");
    $div = 4;
    $pages = ceil($count / $div);
    $now = (isset($_GET['p'])) ? $_GET['p'] : 1;
    $start = ($now - 1) * $div;

    $movies = $Movie->all(['sh' => 1], " && `ondate` between '$startDate' and '$today' order by rank limit $start,$div");
    // $movies = $Movie->all(['sh' => 1], " && `ondate`>='$startDate' && `ondate`<='$today' order by rank");

    foreach ($movies as $movie) {

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

  </div>
  <div class="ct">
    <?php
    if (($now - 1) > 0) {
      echo "<a href='index.php?do=movie&p=" . ($now - 1) . "'> &lt; </a>";
    }
    for ($i = 1; $i <= $pages; $i++) {
      $fontsize = ($i == $now) ? "28px" : "18px";
      echo "<a href='index.php?do=movie&p=$i' style='font-size:$fontsize'>$i</a>";
    }
    if (($now + 1) <= $pages) {
      echo "<a href='index.php?do=movie&p=" . ($now + 1) . "'> &gt; </a>";
    }
    ?>
  </div>
</div>