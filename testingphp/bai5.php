<!DOCTYPE html>
<html>
<head>
	<title>bai5</title>
</head>
<body>
	<form action="bai5.php" method="POST">
		<label >Nhập số n </label>
		<input type="text" name="int" required>
		<button> Nhập</button>
		
	</form>

</body>
</html>
<?php
$n=$_POST['int'];
for($i=0; $i < $n; $i++){
	$array[]= rand(0,100);

}
echo '<pre>';
print_r ($array);
?>