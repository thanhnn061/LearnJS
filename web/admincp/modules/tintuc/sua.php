<?php 
	$sql="select * from tintuc where id_baiviet='$_GET[id]'";
	$run_tintuc=mysqli_query($con,$sql);
	$sua_baiviet=mysqli_fetch_array($run_tintuc);
?>

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<form action="modules/tintuc/xuly.php?id=<?php echo $sua_baiviet['id_baiviet'] ?>" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2">Sửa tin tức</td>
  </tr>
  <tr>
    <td>Tên bài viết</td>
    <td>
    <input type="text" name="tenbaiviet" id="tenbaiviet" value="<?php echo $sua_baiviet['tenbaiviet'] ?>"></td>
  </tr>
  <tr>
    <td>Ảnh minh họa</td>
    <td>
      <input type="file" name="anhminhhoa" id="anhminhhoa"  />
      	<?php 
			
		echo '<img src="modules/tintuc/uploads/'.$sua_baiviet['anhminhhoa'].'" width="40" height="40"/> ';
	?>
		
      </td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td><label for="tomtat"></label><textarea name="tomtat" id="tomtat" cols="45" rows="5"><?php echo $sua_baiviet['tomtat'] ?></textarea>
      </td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><label for="noidung"></label>
      <textarea name="noidung" id="noidung" cols="45" rows="5"><?php echo $sua_baiviet['noidung'] ?></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" name="sua" value="Sửa">    </td>
  </tr>
</table>
</form>



