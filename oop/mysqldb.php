<?php
class MySqlDb {
	const DB = 'localhost';
	const DBUSER = 'root';
	const DBPASS = '';
	const DBNAME = 'banhangdatabase';	
    protected $connection;
	protected $query;
    protected $show_errors = TRUE;
    protected $query_closed = TRUE;
	public $query_count = 0;

    public function connect() {
        $connection = new mysqli(self::DB, self::DBUSER,self::DBPASS,self::DBNAME);
        //check connect
		if ($connection->connect_error) {
  			die("Connection failed: " . $connection->connect_error);
		}
		$connection->set_charset('utf8');
		//var_dump($connection);
		return $connection;
		
    }
}

?>