<?php 


 class DB
 {
 	private $conn;

 	function __construct()
 	{
 		$this->conn = pg_connect("host=localhost dbname=dbs user=postgres password=postgres")
    		or die('Could not connect: ' . pg_last_error());
 	}

 	public function query($q)
 	{
 		return new DBResult(pg_query($this->conn, $q));
 	}
 }


 class DBResult
 {
 	
 	private $result = 0;

 	function __construct($r)
 	{
 		$this->result = $r;
 	}

 	public function fetchObject()
 	{
 		return pg_fetch_object($this->result);
 	}

 	public function fetchAll()
 	{
 		return pg_fetch_all($this->result);
 	}

 	public function fetchArray()
 	{
 		return pg_fetch_array($this->result);
 	}

 }

?>