<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<form action="modules/tintuc/xuly.php" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2">Thêm tin tức</td>
  </tr>
  <tr>
    <td>Tên bài viết</td>
    <td>
    <input type="text" name="tenbaiviet" id="tenbaiviet"></td>
  </tr>
  <tr>
    <td>Ảnh minh họa</td>
    <td>
      <input type="file" name="anhminhhoa" id="anhminhhoa" /></td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td><label for="tomtat"></label>
      <textarea name="tomtat" id="tomtat" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><label for="noidung"></label>
      <textarea name="noidung" id="noidung" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" name="them" value="Thêm">    </td>
  </tr>
</table>
</form>



