<?php
// sắp xếp nổi bọt tăng dần 
// $a = [1, 7, 5, 9];

// for ($i = 0; $i < count($a) -1; $i++){

// 	for ($j = $i + 1; $j < count($a); $j ++){
// 		if ($a[$i] > $a[$j]){
// 			$tmp = $a[$i];
// 			$a[$i] = $a[$j];
// 			$a[$j] = $tmp; 
// 		}
// 	}
// }
// echo '<pre>';
// print_r ($a); 



// tìm kiếm 1 dữ liệu có trang mảng 
function kiemTraTrongMang($mang, $value){
	$result = false;
	foreach ($mang as $val) {
		if ($val == $value){
			$result = true;
			break;
		}
	}
	return $result;
}
function inSoLe($mang){
	foreach ($mang as  $value) {
		if ($value % 2 != 0 ){
			echo $value . "<br/>";
		}
	}
}
$mang = [321,312,3,4,5,15,45,7,64,45,17,89,65];
$flag = inSoLe($mang);
var_dump($flag);

?>