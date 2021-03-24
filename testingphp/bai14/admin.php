<?php
  session_start();  
      if(isset($_SESSION["username"]))  
      {  
           if((time() - $_SESSION['last_login_timestamp']) > 5)  
           {  
                header("location:logout14.php");  
           }  
           else  
           {  
                $_SESSION['last_login_timestamp'] = time();  
              echo "Xin chào ADMIN đã đăng nhập thành công ! <a href=\"logout14.php\">  logout </a>" ;
           }  
      }  
      else  
      {  
            header("location:bai14.php"); 
      }  
?>