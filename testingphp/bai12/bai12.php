<?php
// Opening a directory 
// $dir_handle = opendir("/wamp64/www/images/"); 
  
// if(is_resource($dir_handle)) {
	
// }
//  else{ 
//     echo ("mở thư mục thất bại"); 
// 	}  
// echo "<pre>";
// // print_r(glob("*.png*"));

// $path = getcwd();
// $items = scandir($path);
// foreach ($items as $item) {

// }
// echo "<p>Content of $path</p>". "<ul>";
// print_r(glob("*.png*"));
// closedir($dir_handle); 

$images = glob('img/*.png');
// var_dump($img);exit;
foreach($images as $img){
	echo $img.'<br>';
}

?>