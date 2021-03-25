<?php  
include ('ordermodel.php');
// include ('customermodel.php');

$orderModel= new OrderModel();
// $result = $orderModel->getOrder();
// $result = $orderModel->getBuyOrder('1');

$result = $orderModel-> getBestSeller();

// $customerModel = new CustomerModel();
// $result=$customerModel->getByID('1');
var_dump($result);

?>

