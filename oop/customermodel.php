<?php
include ('abstractmodel.php');
class CustomerModel extends AbstractModel{
	public $customerID;
	public function __construct(){
		parent::__construct();
		$this->tableName = 'customer';
		$this->tableID = 'customer_id';
	}
	public function getBuyOrder($customerId){
		$sql = "SELECT id, total, customer_id FROM order";
		$result = $this->connection->query("SELECT * FROM `".$this->tableName."` WHERE `customer_id` =". $customerId);
		if ($result->num_rows >0){
			while ($row = $result->fetch_assoc()) {
				echo "id: ".$row["id"]. "<br/>". "total: ".$row["total"]."<br/>"."customer_id: ".$row["customer_id"]. "<br/>";
			}
		}else{
			echo "0 results";
		}
	}
	
	
}
?>