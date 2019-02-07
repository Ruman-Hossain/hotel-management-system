<?php

   final class db_create{

  


public function __construct(){
	   $servername = "localhost";
       $username = "root";
       $password = "";
	 
try {
    $conn = new PDO("mysql:host=$servername;dbname=", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS hotelroyal"; //create our database
    // use exec() because no results are returned
    $conn->exec($sql);
   // echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
		public function create_tables(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db_name = "hotelroyal";
			
				try{
					$conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					// sql to create rooms table
					$sql1 = "CREATE TABLE rooms (
					id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					room_no VARCHAR(30) NOT NULL,
					description VARCHAR(500) NOT NULL,
					price VARCHAR(50),
					img_loc VARCHAR(50) NOT NULL,
					booking VARCHAR(4),
					room_type VARCHAR(10) NOT NULL
					
					)";
					// sql to create event table
					$sql2 = "CREATE TABLE events (
					id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					description VARCHAR(500) NOT NULL,
					img_loc VARCHAR(50) NOT NULL,
					title VARCHAR(10) NOT NULL
					)";
					
					// sql to create about table
					$sql3 = "CREATE TABLE about (
					id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					description VARCHAR(500) NOT NULL
					
					)";
					// sql to create service table
					$sql4 = "CREATE TABLE service (
					id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					description VARCHAR(500) NOT NULL,
					img_loc VARCHAR(50) NOT NULL
					
					)";
					
					// sql to create slide table
					$sql5 = "CREATE TABLE slider (
					id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					img_loc_one VARCHAR(50) NOT NULL,
					img_loc_two VARCHAR(50) NOT NULL,
					img_loc_three VARCHAR(50) NOT NULL
					
					)";
					
					// sql to create admin table
					$sql6 = "CREATE TABLE admin (
					id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					name VARCHAR(50) NOT NULL,
					password VARCHAR(50) NOT NULL
					
					)";
					
					$sql8 = "CREATE TABLE booking(
					id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					fdate VARCHAR(50) NOT NULL,
					tdate VARCHAR(50) NOT NULL,
					name VARCHAR(50) NOT NULL,
					mail VARCHAR(50) NOT NULL,
					phone VARCHAR(50) NOT NULL,
					code VARCHAR(50) NOT NULL,
					address VARCHAR(50),
					room_no VARCHAR(10)


					
					)";
					
					
					// use exec() because no results are returned
					$conn->exec($sql1);
					$conn->exec($sql2);
					$conn->exec($sql3);
					$conn->exec($sql4);
					$conn->exec($sql5);
					$conn->exec($sql6);
					$conn->exec($sql8);
				}catch(PDOException $e){
					
				}
			
			
			
		}
   }

?>