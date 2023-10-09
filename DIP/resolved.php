<?php

interface DBConnectionInterface{
	public function connect(){
    
    }
}

class PostgreSQLCoonection implements DBConnectionInterface{

	public function connect(){
    
    }
}

class UserDB{

	private $dbConnection;
    
    public function __construct(DBConnectionInterface $dbConnection){
    	$this -> dbConnection = $dbConnection;
    }
}
?>
