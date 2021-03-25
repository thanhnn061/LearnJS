<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<div class="content_right" style="width:100%;">
	    <?php
          $sgl3="select * from tintuc";
	$run_tintuc=mysqli_query($con,$sgl3);
           	?>
			<p class="loai">Tin tức</p>
        	<ul>
            <?php
			while($dong_tintuc=mysqli_fetch_array($run_tintuc)){
			?>
            	
            	<li>
                <?php
                echo '<img src="admincp/modules/tintuc/uploads/'.$dong_tintuc['anhminhhoa'].'" width="150" height="150" />';
                ?>
                <div class="clear"></div>
				<p style="font-weight:bold"><a href="index.php?xem=chitiettintuc&id=<?php echo $dong_tintuc['id_baiviet']?>"><?php echo $dong_tintuc['tenbaiviet'] ?></a></li></p>
               
            <?php
			}
			?>
</div>