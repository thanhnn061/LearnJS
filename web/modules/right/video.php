<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<div class="content_right" style="width:100%;">
	    <?php
          $sgl3="select * from video";
	$run_video=mysqli_query($con,$sgl3);
           	?>
			<p class="loai">Video</p>
        	<ul>
            <?php
			while($dong_video=mysqli_fetch_array($run_video)){
			?>
            	
            	<li>
                <?php
                echo '<p class="hoverplay"><img src="admincp/modules/video/uploads/'.$dong_video['anhvideo'].'" width="150" height="150" /></p>';
                ?>
                <div class="clear"></div>
				<p style="font-weight:bold"><a href="index.php?xem=playvideo&id=<?php echo $dong_video['id_video']?>"><?php echo $dong_video['tenvideo'] ?></a></li></p>
               
            <?php
			}
			?>
</div>