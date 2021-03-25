
<?php
	$tenmaychu="localhost";
	$tentaikhoan="root";
	$pass="";
	$csdl="webbanhang";
	$con=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl)or die('cant connect');
	mysqli_select_db($con,$csdl);
	$sgl1="select * from loai";
	$loai=mysqli_query($con,$sgl1);
	$row_loai=mysqli_fetch_array($loai); 

?>	
        	<p class="loai">Loại</p>
        	<ul>
            <?php 
				while($dong=mysqli_fetch_array($loai)){
			?>
            	<li><a href="index.php?xem=loai&id=<?php echo $dong['loai_id']?>"><?php echo $dong['tenloai'] ?></a></li>
   <?php
				}
   ?>                   
          </ul>
            <?php
          $sgl2="select * from hieu";
	$hieu=mysqli_query($con,$sgl2);
           	?>
			<p class="loai">Hiệu</p>
        	<ul>
            <?php
			while($dong=mysqli_fetch_array($hieu)){
			?>
            	<li><a href="index.php?xem=hieu&id=<?php echo $dong['hieu_id']?>"><?php echo $dong['tenhieu'] ?></a></li>
               
            <?php
			}
			?>
            </ul>
          
          
           
           
      