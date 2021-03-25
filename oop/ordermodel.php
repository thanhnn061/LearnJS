<?php
include ('abstractmodel.php');
 class OrderModel extends AbstractModel{
 	public function __construct(){
		parent::__construct();
		$this->tableName ='order';
		
	}
	public function getOrder(){
		$sql = "SELECT id, total, customer_id FROM order";
		$result = $this->connection->query("SELECT * FROM `".$this->tableName."`");
		if ($result->num_rows >0){
			while ($row = $result->fetch_assoc()) {
				echo "id: ".$row["id"]. "<br/>". "total: ".$row["total"]."<br/>"."customer_id: ".$row["customer_id"]. "<br/>";
			}
		}else{
			echo "0 results";
		}
	}
	public function getBestSeller(){
		parent::getBestSeller();
		$this->productID = "order_item";
		$sql = "SELECT  MAX(qty) FROM order_item";
		$result = $this->connection->query("SELECT MAX(qty) AS qty FROM order_item `".$this->productID."`" );
		if ($result->num_rows >0){
			while ($row = $result->fetch_assoc()) {
				echo " sản phẩm bán chạy nhất là : qty = ". $row["qty"];
			}
		}else{
			echo "0 results";
		}
	}
 }

?>