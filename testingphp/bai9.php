<!DOCTYPE html>
<html>
<head>
	<title>bai9</title>
</head>
<body>
	<form action="bai9.php" method="POST" enctype="multipart/form-data">
		<label>File</label>
		<input type="file" name="fileToUpload" id="fileToUpload">
 		<input type="submit" value="Upload Image" name="submit">
	</form>

</body>
</html>
<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
var_dump($_FILES);
//sleep(10000);
exit;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// check file size 
if ($_FILES["fileToUpload"]["size"] > 2000000) {
  echo "  Sorry, file của bạn vượt quá 2MB.   ";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" 
	&& $imageFileType != "gif" ) {
  echo "    Sorry, chỉ cho phép file : jpg, png, gif    ";
  $uploadOk = 0;
}
// check  $upload 
if ($uploadOk == 0) {
  echo "  Xin lỗi, tệp của bạn không được tải lên.   ";
// if everything is ok, try
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "   The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " đã được tải lên.   ";
  } else {
    echo "   Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên.   ";
  }
}

?>