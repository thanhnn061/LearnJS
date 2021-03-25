<?php
	
	$sql="select * from video order by id_video asc";
	$video=mysqli_query($con,$sql);
?>
<table width="100%" height="124" border="1">
  <tr>
    <td colspan="5"><div align="center">Liệt kê video</div></td>
  </tr>
  <tr>
    <td width="60">ID</td>
    <td width="56">Tên video</td>
    <td width="56">Linkvideo</td>
    <td width="56">Hình </td>
    <td>Quản lý</td>
  </tr>
    <?php
   	$i=0;
  	while($dong_video=mysqli_fetch_array($video)){
  ?>
  <tr>

    <td><?php echo $i; ?></td>
    <td><?php echo $dong_video['tenvideo']?></td>
    <td><?php echo $dong_video['linkvideo']?></td>
    <td><img src="modules/video/uploads/<?php echo $dong_video['anhvideo'] ?>" width="40" height="40" /></td>
    <td><a href="modules/video/xuly.php?id=<?php echo $dong_video['id_video'] ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>

