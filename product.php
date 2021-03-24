<?php
include ('mysql.php');
// Kết nối database
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('{error:"bad_request"}');
// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_GET['add']) && $_GET['add'] == 1){
        $qty = $_POST['qty'];
        $price = $_POST['price'];

        $oldTotal = $_POST['oldTotal'];
        $oldTax = $_POST['oldTax'];
        $oldTotalInclTax = $_POST['oldTotalInclTax'];
        
        $total = $qty * $price + $oldTotal;
        if($oldTotal > 0){
            $tax = $oldTax + (($total*0.1) - $oldTax);
        }else{
            $tax = $total*0.1;
        }

        if($oldTotalInclTax > 0){
            $totalInclTax = $oldTotalInclTax + (($total + $tax) - $oldTotalInclTax);
        }else{
            $totalInclTax= $total + $tax;
        }
               
        $result = [
            'total' =>  $total,
            'tax' => $tax,
            'totalInclTax' => $totalInclTax
        ];
        $_SESSION["cartTotal"] = $result;
        echo json_encode($result);
    }
    elseif(isset($_GET['remove']) && $_GET['remove'] == 1) {
        $productId = $_POST['value'];

        $query = mysqli_query($conn, "select * from product where id = '$productId' ");  
        if ($query->num_rows > 0) {
            $sql = "DELETE FROM `product` WHERE `product`.`id` = '$productId' ";
            if ($conn->query($sql) === TRUE) {
                $qty = $_POST['qty'];
                $price = $_POST['price'];

                $oldTotal = $_POST['oldTotal'];
                $oldTax = $_POST['oldTax'];
                $oldTotalInclTax = $_POST['oldTotalInclTax'];
                $total = $oldTotal-($qty * $price);
                $tax = $oldTax-(($qty * $price)*0.1);
                $totalInclTax= $oldTotalInclTax-(($qty * $price) + (($qty * $price)*0.1));
                    
                $result = [
                    'total' =>  $total,
                    'tax' => $tax,
                    'totalInclTax' => $totalInclTax
                ];
                $_SESSION["cartTotal"] = $result;
                echo json_encode($result);
            } else {
                echo "Error";
            }
        }
        else{   
            echo ('Không có dữ liệu product được xóa');
        }     
    }
    else{
        $productId = $_POST['value'];
        $productName = $_POST['name'];
        $query = mysqli_query($conn, "select * from product where id = '$productId' ");   
        //  var_dump($query);exit; 
        if ($query->num_rows >0){
            $row = $query -> fetch_array(MYSQLI_ASSOC);
            echo ("Product đã tồn tại");
        }
        else{
            $sql = "INSERT INTO product (id, productname, qty, price )
            VALUES ('$productId', '$productName', 0, 0)";  
            // echo $sql;exit;     
            if ($conn->query($sql) === TRUE) {                
                echo "Thêm dữ liệu thành công";
            } else {
                echo "Error";
            }
        }
        $conn->close();
    }    
}
?>