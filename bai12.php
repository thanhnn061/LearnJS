<?php
header('Content-Type: application/json');
include ('mysql.php');

// Kết nối database
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('{error:"bad_request"}');
$email = "";
$name = "";
$pass = "";
//khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
    'email' => ''
);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["name"])) { $name = $_POST['name']; }
    if(isset($_POST["pass"])) { $pass = $_POST['pass']; }
    // var_dump($name);exit;
    if ($email)
    {
        $query = mysqli_query($conn, "select email from member where email = '$email' ");   
        if ($query->num_rows >0){
            $row = $query -> fetch_array(MYSQLI_ASSOC);   
            $error['email'] = 'Email đã tồn tại';       
        }
        else{
            $sql = "INSERT INTO member (email, name, pass )
            VALUES ('$email', '$name', '$pass')";       
            if ($conn->query($sql) === TRUE) {                      
            } else {
            }
        }    
    }
}
// $data = mysqli_query($conn, "select email from member where email = '$email' ");
// $response_array= array
// ('dt' => $email, 
// // 'data' => $query
//  );
// var_dump($response_array);exit;
echo json_encode($error);
?>