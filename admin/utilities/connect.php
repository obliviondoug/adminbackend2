<?php
// php connection class 
  class Db_Connect
	  function __construct()
		try{
			$this->conn = new PDO('mysql:host=localhost;dbname=frantom_dev', DB_USER, DB_PASS);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo 'connected to db';
			}
		catch(PDOExcepton $e)
		{