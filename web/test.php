<!DOCTYPE html>
<html>
<head>
	<title>testphp</title>
</head>
<body>
	<form action="test.php" method="POST">
		<label >Nhập số n </label>
		<input type="text" name="int">
		<button> Nhập</button>
		
	</form>

</body>
</html>
<?php 
function soNguyenTo($n){
	// só nguyên n< 2 không phải là số nguyên tố
	if ($n < 2) {
		return false;	
	}
	// check sô nguyên tố khi n>2=
	$squareRoot = sqrt($n);
	for ($i=2; $i <= $squareRoot; $i++){
		if ($n % $i ==0){
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
echo "Các số nguyên tố trong khoảng ".$_POST['int']." là ".max($array);

	// $array = [
	// 	1, 2, 3, 7, 11, 13, 17, 19, 23
	// ];
	// // giả định phần tử đầu tiên là lớn nhất
	// $max = $array[0];

	// for ($i=0; $i < count($array) ; $i++) { 
	// 	if ($array[$i] > $max) {
	// 		$max= $array[$i];
	// 	}		
	// }
	// echo $max;
	// $i=1;
	// while ( $i<= 100) {
	// 	if ($i % 2 ==0){
	// 		echo $i . '<br/>';
	// 	}
		
	// 	$i++;
	// 	# code...
	// }
// 	$array = [];
// 	function isPrimeNumber($n) {
//     // so nguyen n < 2 khong phai la so nguyen to
//     if ($n < 2) {
//         return false;
//     }
//     // check so nguyen to khi n >= 2
//     $squareRoot = sqrt ( $n );
//     for($i = 2; $i <= $squareRoot; $i ++) {
//         if ($n % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }
 
// echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
// for($i = 0; $i < 100; $i ++) {
//     if (isPrimeNumber ( $i )) {
//         // echo ($i . " ");
//         $array[]=$i;

//     }
// }
// print_r($array);
// echo max($array);

//  function veHinhVuong($n){
//  	return $n;

//  }
//  echo veHinhVuong('');
 ?>