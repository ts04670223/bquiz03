<div class="rb tab ">
  <h3 class="ct">預告片清單</h3>
  <table width="100%">
    <tr>
      <td class="ct" width='25%' style="background: #999;">預告片海報</td>
      <td class="ct" width='30%' style="background: #999;">預告片片名</td>
      <td class="ct" width='15%' style="background: #999;">預告片排序</td>
      <td class="ct" width='30%' style="background: #999;">操作</td>
    </tr>
  </table>
  <form action="api/edit_poster.php" method="post">
    <div style="height: 200px;overflow:auto">
      <?php
      $posters = $Poster->all(' order by `rank` ');
      foreach ($posters as $key => $poster) {
      ?>
        <table width="100%" style="color:black;border-collapse:collapse;border-bottom: 1px solid black;">
          <tr>
            <td class="ct" width='25%' style="background: white;"><img style="width: 80px;" src="img/<?= $poster['img']; ?>" alt=""></td>
            <td class="ct" width='30%' style="background: white;"><input type="text" name="name[]" value="<?= $poster['name']; ?>"></td>
            <td class="ct" width='15%' style="background: white;">
              <?php
              if ($key != 0) {
              ?>
                <input type="button" value="往上" onclick="sw(<?=$poster['id'];?>,<?=$posters[$key-1]['id'];?>)">
              <?php
              }
              ?>
              <?php
              if ($key!=(count($posters)-1)) {
              ?>
                <input type="button" value="往下"onclick="sw(<?=$poster['id'];?>,<?=$posters[$key+1]['id'];?>)">
              <?php
              }
              ?>
            </td>
            <td class="ct" width='30%' style="background: white;">
              <input type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>顯示
              <input type="checkbox" name="del[]" value="<?= $poster['id']; ?>">刪除
              <select name="ani[]">
                <option value="1" <?= ($poster['ani'] == 1) ? "selected" : ''; ?>>淡入淡出</option>
                <option value="2" <?= ($poster['ani'] == 2) ? "selected" : ''; ?>>滑入滑出</option>
                <option value="3" <?= ($poster['ani'] == 3) ? "selected" : ''; ?>>縮放</option>
              </select>
              <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
            </td>
          </tr>
        </table>
      <?php
      }

      ?>
    </div>
    <div class="ct">
      <input type="submit" value="編輯確定">
      <input type="reset" value="重置">
    </div>
  </form>
  <hr>
  <h3 class="ct">新增預告片海報</h3>
  <form action="api/add_poster.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td>預告片海報:</td>
        <td><input type="file" name="poster" id=""></td>
        <td>預告片片名:</td>
        <td><input type="text" name="name" id=""></td>
      </tr>
    </table>
    <div class="ct">
      <input type="submit" value="新增">
      <input type="reset" value="重置">
    </div>
  </form>
</div>
<script>
  function sw(idx,idy){
    $.post("api/sw.php",{table:'poster',idx,idy},function(){
    location.reload()
    })
  }
</script>