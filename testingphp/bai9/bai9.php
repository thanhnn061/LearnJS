<!DOCTYPE html>
<html>
<body>

<form action="bai9.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//tạo tập tải lên
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File đã chọn là image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File đã chọn không phải là image " ;
    $uploadOk = 0;
  }
}
// kiểm tra xem tệp đã tồn tại chưa
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// giới hạn kích thước tệp
if ($_FILES["fileToUpload"]["size"] > 2000000) {
  echo "Sorry, file của bạn vượt quá 2MB.";
  $uploadOk = 0;
}
// giới hạn loại tệp
if($imageFileType != "jpg" && $imageFileType != "png" 
	&& $imageFileType != "gif" ) {
  echo " Sorry, chỉ cho phép đinh đạng: jpg, png, gif";
  $uploadOk = 0;
}
echo '<pre>';
// var_dump($_FILES);

?>