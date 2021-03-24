<form action="bai11.php" method="POST">
	<label>Thêm sản phẩm vào file </label> <br/>
	<input type="text" name="text" placeholder=" Name " required><br/>
	<input type="int" name="price" placeholder="Price" required><br/>
	<input type="int" name="stock" placeholder="Stock" required><br/>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$myfile = fopen("products.csv", "a");
	$newLine = [$_POST['text'],$_POST['price'],$_POST['stock']];
	fputcsv($myfile, $newLine);
	fclose($myfile);
	echo 'success';
}
?>