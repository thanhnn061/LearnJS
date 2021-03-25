<?php
	include('../config.php');
		$id=$_GET['id'];
		$tenbaiviet=$_POST['tenbaiviet'];
		$noidung=$_POST['noidung'];
		$tomtat=$_POST['tomtat'];
		$anhminhhoa=$_FILES['anhminhhoa']['name'];
        $anhminhhoa_tmp=$_FILES['anhminhhoa']['tmp_name'];
        move_uploaded_file($anhminhhoa_tmp,"uploads/".$anhminhhoa);
		
	if(isset($_POST['them'])){
		//them
		 $sql_tintuc="insert into tintuc (tenbaiviet,noidung,tomtat,anhminhhoa) value('$tenbaiviet','$noidung','$tomtat','$anhminhhoa')";
		mysqli_query($con,$sql_tintuc) or die('ko the insert');
		header('location:../../index.php?quanly=tintuc&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		if($anhminhhoa!=''){
		$sql="update tintuc set tenbaiviet='$tenbaiviet',anhminhhoa='$anhminhhoa',tomtat='$tomtat',noidung='$noidung' where id_baiviet='$id'";
		}else{
		$sql="update tintuc set tenbaiviet='$tenbaiviet',tomtat='$tomtat',noidung='$noidung' where id_baiviet='$id'";
		}
		mysqli_query($con,$sql);
		header('location:../../index.php?quanly=tintuc&ac=sua&id='.$id);
	}else{
	//xóa
	$sql="delete from tintuc where id_baiviet='$id'";
	mysqli_query($con,$sql);
	header('location:../../index.php?quanly=tintuc&ac=them');
	}
?>