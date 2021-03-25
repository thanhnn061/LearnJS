<?php
include ('mysqldb.php');
abstract class ViewTemplate
{
	public function __construct(){
		$mysql = new MySqlDb();
		$this->connection = $mysql->connect();
	}
    abstract  function renderTableHtml();


}
?>