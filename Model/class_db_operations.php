<?php
    require_once("connect.php");
   
   
   final class db_operations{
	   
	   // insert into doctors table
	   public static  function insert_doc_table($fname,$lname,$expertise,$qualification,$phone_one,$phone_two,$chamber,$district){
		    Global $pdo;
		   $sql = "INSERT INTO doctors(firstname,lastname,expertise,qualification,phone_one,phone_two,chamber,district)
								 VALUES	(:firstname,:lastname,:expertise,:qualification,:phone_one,:phone_two,:chamber,:district)";
									
		    $stmt = $pdo->prepare($sql);
		    $stmt->bindParam(':firstname',$fname,PDO::PARAM_STR);
			$stmt->bindParam(':lastname',$lname,PDO::PARAM_STR);
			$stmt->bindParam(':expertise',$expertise,PDO::PARAM_STR);
			$stmt->bindParam(':qualification',$qualification,PDO::PARAM_STR);
			$stmt->bindParam(':phone_one',$phone_one,PDO::PARAM_STR);
			$stmt->bindParam(':phone_two',$phone_two,PDO::PARAM_STR);
			$stmt->bindParam(':chamber',$chamber,PDO::PARAM_STR);
			$stmt->bindParam(':district',$district,PDO::PARAM_STR);
			
			
			$stmt->execute();
									
			$pdo = null;
	   }
	   // insert into hospital tables
	   public static function insert_hos_table($hospital_name,$phone_one,$phone_two,$district,$address){
		    Global $pdo;
		   $qry = "INSERT INTO hospitals(hospital_name,phone_one,phone_two,	district,address)
		                        VALUES (:hospital_name,:phone_one,:phone_two,:district,:address)";
								
			$stmt = $pdo->prepare($qry);
		    $stmt->bindParam(':hospital_name',$hospital_name,PDO::PARAM_STR);	
			$stmt->bindParam(':phone_one',$phone_one,PDO::PARAM_STR);
			$stmt->bindParam(':phone_two',$phone_two,PDO::PARAM_STR);
			$stmt->bindParam(':district',$district,PDO::PARAM_STR);
			$stmt->bindParam(':address',$address,PDO::PARAM_STR);
			$stmt->execute();
									
			//$pdo = null;
	   }
	   
	   //inserting data about ambulance 
	   public static function insert_am_table($agency,$phone_one,$phone_two,$district){
		    Global $pdo;
		   $sql = "INSERT INTO ambulance(hospital_name,phone_one,phone_two,district)
		                        VALUES(:hospital_name,:phone_one,:phone_two,:district)";
			$stmt = $pdo->prepare($sql);
		    $stmt->bindParam(':hospital_name',$agency,PDO::PARAM_STR);
            $stmt->bindParam(':phone_one',$phone_one,PDO::PARAM_STR);
            $stmt->bindParam(':phone_two',$phone_two,PDO::PARAM_STR);
             $stmt->bindParam(':district',$district,PDO::PARAM_STR);	
             $stmt->execute();
									
			//$pdo = null;			 
	   }
	   // inseting questions and ans in health tips
	   public static function insert_health_table($question,$ans){
		  
		  Global $pdo;
         $sql = "INSERT INTO health_tips(qustion,answers) VALUES(:qustion,:answers)";
			
			$stmt = $pdo->prepare($sql);
			 $stmt->bindParam(':qustion',$question,PDO::PARAM_STR);
			  $stmt->bindParam(':answers',$ans,PDO::PARAM_STR);
			  $stmt->execute();
									
			//$pdo = null;
		   
	   }
   
   public static  function insert_admin($name,$pass,$phone){
	  // require_once("/connect.php");
	   Global $pdo;
	   $security = "?..H@Si./n/?";
	   
	   $tst = $pdo->prepare("SELECT * FROM admin");
	   $tst->execute();
	   $row = $tst->fetch(PDO::FETCH_ASSOC);
	   
	   if(!$row){
			$pass = md5($pass,PASSWORD_DEFAULT).$security;
			$sql = "INSERT INTO admin(username,password,phone) VALUES(:username,:password,:phone)";
			
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':username',$name,PDO::PARAM_STR);
				$stmt->bindParam(':password',$pass,PDO::PARAM_STR);
				$stmt->bindParam(':phone',$phone,PDO::PARAM_STR);
				$stmt->execute();
									
			//$pdo = null;
	   
	   }
	   else{
		   //echo "ase to ";
	   }
   }
   
   public static function update_admin_name($name){
	    Global $pdo;
	  // $security = "?..H@Si./n/?"; 
	   
	   
	   $sql = "UPDATE admin SET username =:username WHERE id =1";
			
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':username',$name,PDO::PARAM_STR);
				
				$stmt->execute();
	   
   }	 

      public static function update_admin_pass($pass){
	    Global $pdo;
	  $security = "?..H@Si./n/?"; 
	  $pass = md5($pass,PASSWORD_DEFAULT).$security;
	   
	   $sql = "UPDATE admin SET password =:password WHERE id =1";
			
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':password',$pass,PDO::PARAM_STR);
				
				$stmt->execute();
	   
   }	
   
      public static function update_admin_phone($phone){
	   Global $pdo;
	  
	   
	   $sql = "UPDATE admin SET phone =:phone WHERE id =1";
			
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':phone',$phone,PDO::PARAM_STR);
				
				$stmt->execute();
	   
   }
   
   
   
  public static function delete_doctor($id){
	  Global $pdo;
	  $sql = "DELETE FROM doctors WHERE id = :id";
	  $stmt = $pdo->prepare($sql);
				$stmt->bindParam(':id',$id,PDO::PARAM_INT);
				$stmt->execute();
				
				if($stmt->execute()){
					echo "Successfully deleted";
				}
	  
  }

 public static function delete_hospital($id){
	   Global $pdo;
	  $sql = "DELETE FROM hospitals WHERE id = :id";
	  $stmt = $pdo->prepare($sql);
				$stmt->bindParam(':id',$id,PDO::PARAM_INT);
				$stmt->execute();
				
				if($stmt->execute()){
					echo "Successfully deleted";
				}
	  
  }

 public static function delete_ambulance($id){
	   Global $pdo;
	  $sql = "DELETE FROM ambulance WHERE id = :id";
	  $stmt = $pdo->prepare($sql);
				$stmt->bindParam(':id',$id,PDO::PARAM_INT);
				$stmt->execute();
				
				if($stmt->execute()){
					echo "Successfully deleted";
				}
	  
  }
  
public static function delete_health_tips($id){
	   Global $pdo;
	  $sql = "DELETE FROM health_tips WHERE id = :id";
	  $stmt = $pdo->prepare($sql);
				$stmt->bindParam(':id',$id,PDO::PARAM_INT);
				$stmt->execute();
				
				if($stmt->execute()){
					echo "Successfully deleted";
				}
	  
  }
  public static function show_doctor(){
	  
	  Global $pdo;
	  $qry = "SELECT * FROM doctors ORDER BY Id ASC";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
				$fname = $obj->firstname;
				$lname= $obj->lastname;
				$expertise= $obj->expertise;
				$qualification= $obj->qualification;
				$phn1 = $obj->phone_one;
				$phn2 =$obj->phone_two;
				$chem =$obj->chamber;
				$dis = $obj->district;
				$id = $obj->id;
				
				
			
             echo"
					<tr>
					<td>$fname $lname </td>
					<td>$expertise</td>
					<td>$qualification</td>
					<td>$chem</td>
					<td>$dis</td>
					<td>$phn1</td>
					<td><a href='/medicare/doc_delete.php?id=$id'>delete</a></td>
					
					</tr>";
				
				}
	  
	  
  }
  
  public static function show_ambulance(){
	  Global $pdo;
	  $qry = "SELECT * FROM ambulance ORDER BY Id ASC";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
					$agency = $obj->hospital_name;
					$district = $obj->district;
					$phn1 = $obj->phone_one;
					$phn2 = $obj->phone_two;
					$id = $obj->id;
					echo"
					<tr>
					<td>$agency </td>
					<td>$district</td>
					<td>$phn1</td>
					<td>$phn2</td>
					<td><a href='/medicare/amb_delete.php?id=$id'>delete</a></td>
					</tr>";
					
					
				}
	  
	  
	  
	  
	  
  }
  public static function show_hospitals(){
	  Global $pdo;
	  $qry = "SELECT * FROM hospitals ORDER BY Id ASC";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
					$agency = $obj->hospital_name;
					$district = $obj->district;
					$phn1 = $obj->phone_one;
					$phn2 = $obj->phone_two;
					$address = $obj->address;
					$id = $obj->id;
					
					echo"
					<tr>
					<td>$agency </td>
					<td>$district</td>
					<td>$address</td>
					<td>$phn1</td>
					<td>$phn2</td>
					<td><a href='/medicare/hos_delete.php?id=$id'>delete</a></td>
					</tr>";
					
				}
	  
	  
	  
  }
  
  public static function show_health_tips(){
	  Global $pdo;
	  $qry = "SELECT * FROM health_tips ORDER BY Id ASC";
	  $stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
					$question = $obj->qustion;
					$answers = $obj->answers;
					$id = $obj->id;
					
					echo"
					<tr>
					<td>$question</td>
					<td>$answers</td>
					<td><a href='/medicare/tips_delete.php?id=$id'>delete</a></td>
					</tr>";
					
				}
	  
	  
	  
  }
  
}
?>