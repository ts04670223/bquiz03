<div class="rb tab " >
      <h3 class="ct">預告片清單</h3>
      <table width="100%">
        <tr>
        <td class="ct" width='30%' style="background: #999;">預告片海報</td>
        <td class="ct" width='30%' style="background: #999;">預告片片名</td>
        <td class="ct" width='10%' style="background: #999;">預告片排序</td>
        <td class="ct" width='20%' style="background: #999;">操作</td>
        </tr>
      </table>
      <div style="height: 200px;overflow:auto">

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