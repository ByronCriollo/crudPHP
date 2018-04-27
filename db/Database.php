<?php
class Database extends PDO
{

	//dbname
	private $dbname = "blog";
	//host
	private $host = "10.131.12.107";
	//user database
	private $user = "userPHP";
	//password user
	private $pass = '2092acer';
	//port
	private $port = 5432;
    //instance
	private $dbh;

	//connect with postgresql and pdo
	public function __construct()
	{
	    try {
	        $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
	    }
        catch(PDOException $e)
        {
	        echo  $e->getMessage();
	    }

	}

	//función para cerrar una conexión pdo
	public function close()
	{
    	$this->dbh = null;
	}

}
