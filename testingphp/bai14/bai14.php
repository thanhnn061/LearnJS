<form action='bai14.php' method="POST">
	<label>Username</label> <input type="text" name="username" placeholder="username" required /> <br/>
	<label>Password </label> <input type="password" name="password" placeholder="password" required /> <br/>
	<button type="submit">Submit</button>
</form>

<?php
ob_start();
	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$data = file_get_contents('.password');
		$username = explode(':', $data)[0];
		$password = explode(':', $data)[1];
		if($_POST['username'] == $username && md5($_POST['password']) == $password){ 
			$_SESSION['username']='admin';
      		$_SESSION['last_login_timestamp'] = time();
			header("location: admin.php");
		}
		else{
			echo "Login failed";
		}
		
	}
	//admin.php  
 if(isset($_POST["submit"]))  
 {  
      $_SESSION["username"] = $_POST["username"];  
      $_SESSION['last_login_timestamp'] = time();  
      header("location:admin.php");       
 }  
?>