<!DOCTYPE html>
<html>
<head>
	<title>bai2</title>
</head>
<body>
	<form action="bai2.php" method="POST">
		<label >Nhập số cạnh </label>
		<input type="text" name="int" required>
		<button> Nhập</button>
		
	</form>

</body>
</html>
<?php

function veHinhVuong2CanhDau($n){
	for($i = 0; $i < $n; $i ++) {
		if($i==$n-1){
			echo "*". "<br/>";
		}
		else{
			echo "*";
		}
	}
}
function veHinhVuongCanhGiua($n){
	for ($i = 0; $i <$n; $i++){
		if ($i==0){
			echo "*";
		}elseif ($i==$n-1) {
			echo "*" . "<br/>";
		}
		else{
			echo "..";
		}
	}
}
$n=$_POST["int"];
for ($i=0; $i<=$n-1; $i++){
	if($i==0 || $i==$n-1){
		veHinhVuong2CanhDau($n);
	}else {
		veHinhVuongCanhGiua($n);
	}	
}

?>