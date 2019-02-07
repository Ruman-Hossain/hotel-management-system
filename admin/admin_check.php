<?php
	require_once("../Model/connect.php");
	require_once("check.php");
	
	final class check_admin {
		public static function admin_check($username,$password){
			$security = "?..H@Si./n/?";
			$name =$username;
			$name = check_input::test_input($name);
			$pass = $password;
			$pass = md5($pass,PASSWORD_DEFAULT).$security;
			$user_pass = md5("ruman",PASSWORD_DEFAULT).$security;
				
			Global $pdo;
					$qry = "SELECT name,password FROM admin WHERE id=1";
					$stmt = $pdo->prepare($qry);
					$stmt->execute();
					$obj = $stmt->fetchObject();
					$user_name = $obj->name;
					//$user_pass = $obj->password;
					$id = 1;
					
						if($name == $user_name && $pass == $user_pass){
								$_SESSION['name'] =$username;
								$_SESSION['id'] = $id;
								if(isset($_SESSION['name']) && isset($_SESSION['id'])){
								
								//echo"ddddddddd";
								header("Location:/hotel/admin/first.php");
							
						}
						else{
							echo "Incorrect Username or Password";
							echo "Try Again.";
							
						}
							
			}
		}
	}
?>