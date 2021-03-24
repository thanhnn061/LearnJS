<?php
$array1=['red', 'red','red'];
$array2=['green', 'green', 'green', 'green'];
$array=[];
for($i=0; $i < count($array1+$array2); $i++){
	if (isset($array1[$i])) {
		$array=array_merge($array, [$array1[$i],$array2[$i]]);
	}else{
		if(isset($array2[$i])){
			$array=array_merge($array, [$array2[$i]]);

		}
	}

}
echo '<pre>';
print_r ($array);
?>