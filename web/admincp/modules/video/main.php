<div class="content_left" >
<?php

	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}
	if($tam=='them'){
		include('modules/video/them.php');
	}else if($tam=='sua'){
		include('modules/video/sua.php');
	}
?>
</div>
<div class="content_right">
	<?php
		include('modules/video/lietke.php');
	?>
</div>