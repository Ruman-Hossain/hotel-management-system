<?php

	
	$me = "root";
	$password ="";
	
		try{
		$pdo = new PDO('mysql:host=localhost;dbname=hotel',$me,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		}
		catch(PDOException $e){
		echo"Error!:".$e->getMessage()."<br>";
		die();
		
		
	
	
	
	}


?>