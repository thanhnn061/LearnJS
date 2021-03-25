<?php
include ('orderreport.php');
$orderReport = new OrderReport();
$result = $orderReport-> renderTableHtml();
var_dump($result);


?>