
<?php
$product = [
	'pl' => [
		'name' => 'shirt',
		'price' => 2
	],
	'p2' => [
		'name' => 'watch',
		'price' => 2.99
	],
	'p3' => [
		'name' => 'phone',
		'price' => 5.99
	],
	'p4' => [
		'name' => 'book',
		'price' => 1.5
	]
];
$array=[];
foreach ($product as $key => $value) {

	$array[] = $value['price'];

}
echo '<pre>';
print_r ($array);
echo "  max là ::   ".max($array). " <br/>";

echo "  min là:   " . min($array);
?>
