<?php

class UserDB{
	private $dbConnection;
    
    public function __construct(MySQLConnection $dbConnection){
    	$this -> $dbConnection = $dbConnection;
    }
    
    public function store(User $user){
    
    }
}

?>
