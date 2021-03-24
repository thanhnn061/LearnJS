<!DOCTYPE html>
<html>
<head>
	<title>bai1</title>
</head>
<body>
	<form action="bai1.php" method="POST">
		<label >Nhập số n </label>
		<input type="text" name="int" required>
		<button> Nhập</button>
		
	</form>

</body>
</html>
<?php
function soNguyenTo($n){
	// só nguyên n < 2 không phải là số nguyên tố
	if ($n < 2) {
		return false;	
	}
	// check sô nguyên tố khi n >= 2
	$squareRoot = sqrt($n);
	for ($i=2; $i <= $squareRoot; $i++){
		if ($n % $i == 0){
			return false;
		}
	}
	return true;
}
$array=[];

for ($i=0; $i<= $_POST['int']; $i++){
	if (soNguyenTo($i) == true){
		$array[]= $i;
	}
}
echo "Các số nguyên tố trong khoảng ".$_POST['int']." là ". max($array);
?>