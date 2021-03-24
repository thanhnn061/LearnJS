<?php
$array=[];
if (($myfile = fopen("countries.csv", "r")) !== FALSE) {
    $arr=[];
$input = $_POST["value"];
    while (($data = fgetcsv($myfile)) !== FALSE){
        $arr[]=$data[0];
    }
    $resultArrays = preg_filter('~' . $input.'~', null, $arr);
    foreach($resultArrays as $key => $value ){
        $array[]=$arr[$key];
    }
    // print_r($rusult);exit;
}

echo json_encode($array);
?>