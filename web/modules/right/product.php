
<?php

	$tenmaychu="localhost";
	$tentaikhoan="root";
	$pass="";
	$csdl="webbanhang";
	$con=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl)or die('cant connect');
	mysqli_select_db($con,$csdl);
	$sanpham=mysqli_query($con,"select * from products");
?>
<p class="loai">Tất cả sản phẫm</p>
<ul>

<?php
while($row=mysqli_fetch_array($sanpham)){
?>
             <li><a href="#">
                <?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$row['product_image'].'" width="120" height="150"/>';
					?>
                    <p>Tên sản phẫm: <?php echo $row['product_title'] ?></p>
                    <p>Giá:<?php echo $row['product_price'] ?></p>
                    <p style="color:#900;margin-left:20px;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>" style="color:#09C;">Chi tiết</p></a>
                 
                </a></li>
               
            <?php
}
			?>
            <div class="clear"></div>
           
            </ul>
          