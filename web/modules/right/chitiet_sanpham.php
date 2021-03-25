<?php
$tenmaychu="localhost";
	$tentaikhoan="root";
	$pass="";
	$csdl="webbanhang";
	$con=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl)or die('cant connect');
	mysqli_select_db($con,$csdl);
	$sql="select * from products where product_id=$_GET[id]";
	$chitiet=mysqli_query($con,$sql);
	$row_chitiet=mysqli_fetch_array($chitiet); 
	
?>

	
   <?php
   		echo 
		'<form action="cart_update.php" method="post" enctype="multipart/form-data">';
		echo '<div class="content_right" style="width:100%; padding-top:10px;">';
   		$current_url=base64_encode($url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		$id=$_GET['id'];
					echo '<img src="admincp/modules/sanpham/uploads/'.$row_chitiet['product_image'].'" width="120" height="150"/>';
		echo '<input type="hidden" name="product_id" value="'.$id.'"/>';
		echo '<input type="hidden" name="type" value="add"/>';
		echo '<input type="hidden" name="return_url" value="'.$current_url.'"/>';
					
  		 echo '<p style="margin-bottom:10px;font-size:20px">Tên sản phẫm:'.$row_chitiet['product_title'].'</p>';
    echo '<p>Giá:'.$row_chitiet['product_price'].'</p>';
    echo' <p style="font-weight:bold">Mô tả:'.$row_chitiet['product_desc'].'</p>';
   echo' <p>Số lượng <input type="text" name="qty" value="1" size="3" /></p>';
	echo '<input type="submit" name="add" value="Đặt Hàng" style="margin-top:20px;float:right" />';
   	
echo '</div>';	
echo '</form>';
echo '<a href="index.php" style="float:right">Quay lại</a></p>';
?>
 <?php
	if(isset($_SESSION['product'])){
		$count=count($_SESSION['product']);
		echo $count;
	}
	?>
<!--Bình luận-->   

<?php

	if(isset($_POST['binhluan'])){
		$id=$_GET['id'];
		$name=$_POST['ten'];
		$comment=$_POST['noidung'];
		$name_length=strlen($name);
		$comment_length=strlen($comment);
		if($name_length>0&&$comment_length>0){
		
			$sql="insert into comment (id_sanpham,name,comment) values('$id','$name','$comment')  ";
			mysqli_query($con,$sql);
		}else{
			echo 'Làm ơn điền đầy đủ thông tin';
		}
		
	}
	
?>	

    <form action="" method="post" enctype="multipart/form-data">

   <table width="200" border="0" style="margin-bottom:40px;">
  <tr>
    <td colspan="2" style="font-size:16px; font-weight:bold">Bình luận sản phẫm</div></td>
    
  </tr>
  <tr>
    <td width="68">Tên</td>
    <td width="122"><label for="ten"></label>
    <input type="text" name="ten" id="ten" size="30" placeholder="Tên bạn..." /></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><label for="noidung"></label>
    <textarea name="noidung" id="noidung" cols="45" rows="5" placeholder="Nội dung bình luận..."></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="binhluan" id="binhluan" value="Bình luận" /></td>
   
  </tr>
</table>

</form>
<?php
	$fine_comment="select name,comment,id_sanpham,product_id,date from comment,products where id_sanpham=$_GET[id] and products.product_id=comment.id_sanpham order by id desc";
	$ketqua_comment=mysqli_query($con,$fine_comment);
	while($dong_comment=mysqli_fetch_array($ketqua_comment)){
		$comment_name=$dong_comment['name'];
		$comment=$dong_comment['comment'];
		echo '<p  style="border-bottom:1px solid #ccc">';
		echo "<p style='font-weight:bold;'>$comment_name</p>  $comment<p>";
		echo '<p style="opacity:0.5">'.$dong_comment["date"].'</p>';
		echo '</p >';
	}
?>
