<?php
class connect
{
	protected $username="root";
	protected $password="";
	protected $database="hotel";
	protected $server="localhost";
	protected $db_found;
	public function __construct()
	{
		$this->db_found=mysqli_connect($this->server,$this->username,$this->password,$this->database);
	}
}