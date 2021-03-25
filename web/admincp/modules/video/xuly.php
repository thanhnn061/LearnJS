<?php
	include('../config.php');
		$id=$_GET['id'];
		$tenvideo=$_POST['tenvideo'];
		 $linkvideo=$_POST['linkvideo'];
		$anhvideo=$_FILES['anhvideo']['name'];
		$newlink=substr($linkvideo,16);
        $anhvideo_tmp=$_FILES['anhvideo']['tmp_name'];
        move_uploaded_file($anhvideo_tmp,"uploads/".$anhvideo);
		
	if(isset($_POST['them'])){
		//them
		$sql_video="insert into video (tenvideo,anhvideo,linkvideo) value('$tenvideo','$anhvideo','$newlink')";
		mysqli_query($sql_video) or die('ko the insert');
		header('location:../../index.php?quanly=video&ac=them');
		
	}else{
	//xóa
	$sql="delete from video where id_video='$id'";
	mysqli_query($con,$sql);
	header('location:../../index.php?quanly=video&ac=them');
	}
?>