<?php

class connect
{
	private $host = "localhost";
	private $user = "root";
	private $pass = "w4lt3r04";
	private $db = "obituary";

	public function connection()
	{
		$conexion=mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		return $conexion;
	}
}

?>