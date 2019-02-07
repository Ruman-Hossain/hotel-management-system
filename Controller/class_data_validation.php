<?php
require_once("../Model/class_operations_data.php");
require_once("check.php");
require_once("../Model/connect.php");
final class data_validation{
	  
	public static function phone_add($cphn,$nwphn,$finphn){
		
		   Global $pdo;
		   $qry = "SELECT phone FROM admin  where Id=1";
				$stmt = $pdo->prepare($qry);
				$stmt->execute();
				$obj = $stmt->fetchObject();
				$user_phone = $obj->phone;
				$id = 1;
				
				if($cphn == $user_phone){
				
					if($nwphn == $finphn){
						db_operations::update_admin_phone($finphn);
						//header("Location:/medicare/admin_profile.php");
						echo"successfully added";
					}
					else{
						//header("Location:/medicare/change_phone.php");
				       //echo "Phone number is not matched";
					}
					
				}
				
				else{
					
					
				//header("Location:/medicare/change_phone.php");
				//echo "Phone number is not matched";
				}
		
		
	} 
	 public static function username_add($uname,$nuname,$final){
		 
		  Global $pdo;
		   $qry = "SELECT username FROM admin  where Id=1";
				$stmt = $pdo->prepare($qry);
				$stmt->execute();
				$obj = $stmt->fetchObject();
				$user_name = $obj->username;
				$id = 1;
				
				if($uname==$user_name){
					
					if($nuname == $final){
						
					db_operations::update_admin_name($final);
					echo "Successfully Added";
					
					}
					else{
						echo "New Name is not matched with confirmation";
					}
					
				}
				else{
					//echo "<h3>User Name is not matched</h3>";
				}
		 
		
	 }
	  
	 public static function change_pass($opass,$npass,$fpass){
		 
		 Global $pdo;
		   $qry = "SELECT password FROM admin  where Id=1";
				$stmt = $pdo->prepare($qry);
				$stmt->execute();
				$obj = $stmt->fetchObject();
				$user_pass = $obj->password;
				$id = 1;
				
				$security = "?..H@Si./n/?"; 
	            $opass = md5($opass,PASSWORD_DEFAULT).$security;
				
				if($opass == $user_pass){
					
					if($npass==$fpass){
					 db_operations::update_admin_pass($fpass);
					 echo "successfully changed";
						
					}
					else{
						echo"password is not matched";
					}
					
				}
				else{
					echo "Password incorrect";
				}
		 
		 
		 
		 
	 } 
  }



?>