<?php
session_start();
 if($_SESSION['username'])
 {
 	echo "Xin chào ADMIN đã đăng nhập thành công ! <a href=\"logout14.php\">  logout </a>" ;
 }else
 header("location:bai14.php");
?>