<?php
include ('mysqldb.php');
abstract class AbstractModel{
	protected $tableName;
	protected $productID;
	protected $tableID;
	protected $connection;
	// câu 16
	public function __construct(){
		$mysql = new MySqlDb();
		$this->connection = $mysql->connect();
	}
	// câu 18
	public function getByID($id){
		$sql = "SELECT customer_id, name, email FROM customer";
		$result = $this->connection->query("SELECT * FROM `".$this->tableName."` WHERE `customer_id` =". $id);
		if ($result->num_rows >0){
			while ($row = $result->fetch_assoc()) {
				echo "customer_id: ".$row["customer_id"]. "<br/>". "name: ".$row["name"]."<br/>"."email: ".$row["email"]. "<br/>";
			}
		}else{
			echo "0 results";
		}
	}
	public function getOrder(){
		
	}

	public function getBuyOrder($customerId){
		
	}
	// câu 19
	public function getBestSeller(){
		
	}
}
?>