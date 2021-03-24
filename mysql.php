<?php
class MySqlDb {
	const DB = 'localhost';
	const DBUSER = 'root';
	const DBPASS = '';
	const DBNAME = 'test';	
    protected $conn;
	protected $query;
    public function connect() {
        $conn = new mysqli(self::DB, self::DBUSER,self::DBPASS,self::DBNAME);
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}
		$conn->set_charset('utf8');
		return $conn;
		
    }
}

?>