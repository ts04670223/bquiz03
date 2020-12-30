<div class="rb tab ">
  <h3 class="ct">預告片清單</h3>
  <table width="100%">
    <tr>
      <td class="ct" width='30%' style="background: #999;">預告片海報</td>
      <td class="ct" width='30%' style="background: #999;">預告片片名</td>
      <td class="ct" width='10%' style="background: #999;">預告片排序</td>
      <td class="ct" width='25%' style="background: #999;">操作</td>
    </tr>
  </table>
  <div style="height: 200px;overflow:auto">
    <?php
    $posters = $Poster->all();
    foreach ($posters as $poster) {
    ?>
      <table width="100%" style="color:black">
        <tr>
          <td class="ct" width='30%' style="background: white;"><img style="width: 80px;" src="img/<?= $poster['img']; ?>" alt=""></td>
          <td class="ct" width='30%' style="background: white;"><input type="text" name="name" value="<?= $poster['name']; ?>"></td>
          <td class="ct" width='10%' style="background: white;">
            <input type="button" value="往上">
            <input type="button" value="往下">
          </td>
          <td class="ct" width='25%' style="background: white;">
            <input type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>顯示
            <input type="checkbox" name="del[]" value="<?= $poster['id']; ?>">刪除
            <select name="ani[]">
              <option value="1" <?= ($poster['ani'] == 1) ? "selected" : ''; ?>>淡入淡出</option>
              <option value="2" <?= ($poster['ani'] == 2) ? "selected" : ''; ?>>滑入滑出</option>
              <option value="3" <?= ($poster['ani'] == 3) ? "selected" : ''; ?>>縮放</option>
            </select>
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