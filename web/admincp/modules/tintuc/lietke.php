<?php
	
	$sql="select * from tintuc order by id_baiviet asc";
	$tintuc=mysqli_query($con,$sql);
?>
<table width="100%" height="124" border="1">
  <tr>
    <td colspan="6"><div align="center">Liệt kê tin tức</div></td>
  </tr>
  <tr>
    <td width="60">ID</td>
    <td width="56">Tên bài viết</td>
    <td width="56">Hình </td>
    <td width="56">Tóm tắt</td>
    <td colspan="2">Quản lý</td>
  </tr>
    <?php
   	$i=0;
  	while($dong_tintuc=mysqli_fetch_array($tintuc)){
  ?>
  <tr>

    <td><?php echo $i; ?></td>
    <td><?php echo $dong_tintuc['tenbaiviet']?></td>
    <td><img src="modules/tintuc/uploads/<?php echo $dong_tintuc['anhminhhoa'] ?>" width="40" height="40" /></td>
    <td><?php echo $dong_tintuc['tomtat'] ?></td>
    <td width="25"><a href="index.php?quanly=tintuc&ac=sua&id=<?php echo $dong_tintuc['id_baiviet'] ?>">Sửa</a></td>
    <td width="170"><a href="modules/tintuc/xuly.php?id=<?php echo $dong_tintuc['id_baiviet'] ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>

