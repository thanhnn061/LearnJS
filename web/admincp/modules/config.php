<?php
	$tenmaychu="localhost";
	$tentaikhoan="root";
	$pass="";
	$csdl="webbanhang";
	$con=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl)or die('cant connect');
	
	mysqli_select_db($con,$csdl);
	//mysqli_query("set names 'utf8'");
?>