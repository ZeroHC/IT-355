<?php

class Database extends PDO 
{
	public function __construct() 
	{	    
	    try 
	    {
	   		// Build PDO data source name for MySQL connection
		    $dsn = "mysql:host=".localhost.";dbname=".hliu_grcc;

		    // Open database connection
			parent::__construct($dsn, hliu_grccuser, hliu123);	
		}
		catch (PDOException $exception) 
		{
			die($exception->getMessage());
		}
	}
}