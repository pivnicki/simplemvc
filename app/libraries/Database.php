<?php

class Database{

	private $host=DBHOST;
	private $dbname=DBNAME;
	private $dbuser=DBUSER;
	private $dbpass=DBPASS;

	private $dbh;
	private $stmt;
	private $error;

	public function __construct(){
		$dsn='mysql:host='.$this->host.';dbname='.$this->dbname;
		$options=array(
		PDO::ATTR_PERSISTENT=>true,
		PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
		);

		try{
			$pdo=new PDO($dsn,$this->dbuser,$this->dbpass,$options);
		}catch(PDOException $e){
			$this->error=$e->getMessage();
			echo $this->error;
		}
	}
}