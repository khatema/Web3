<?php 
error_reporting(0);
class db{
	private $host ="localhost";
	private $usr ="root";
	private $pass="";
	private $db ="onlinelibrary";
	public $con ="";
	
	function __construct(){
		
		$connection = mysqli_connect($this->host, $this->usr, $this->pass, $this->db);
		if (!$connection) {
			echo "Opps ! You are having trouble with your connection: ".mysqli_error($connection);
		} else{
			$this->con = $connection;
		}
	}
}

?>