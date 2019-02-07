<?php
	include("connect.php");
	
	
	final class operations{

		public static function room_already_exist_checking($room_no,$description,$price,$img_loc,$booking,$room_type){
			Global $pdo;
			$sql="SELECT * from rooms WHERE rooms.room_no=$room_no";
			$stmt = $pdo->prepare($sql);
		    $stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
			$stmt->bindParam(':description',$description,PDO::PARAM_STR);
			$stmt->bindParam(':price',$price,PDO::PARAM_STR);
			$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
			$stmt->bindParam(':booking',$booking,PDO::PARAM_STR);
			$stmt->bindParam(':room_type',$room_type,PDO::PARAM_STR);
		    $stmt->execute();

		   $n=$stmt->rowCount();
		   if(!$n){
		   	operations::insert_rooms_table($room_no,$description,$price,$img_loc,$booking,$room_type);
		   }
		   else{
		   		echo"Room Already exists. Try inserting Another Room";
		   }
		}
		
		public static function insert_rooms_table($room_no,$description,$price,$img_loc,$booking,$room_type){
		
		Global $pdo;
	
		$sql = "INSERT INTO rooms(room_no,description,price,img_loc,booking,room_type)
							VALUES(:room_no,:description,:price,:img_loc,:booking,:room_type)";
									
		    $stmt = $pdo->prepare($sql);
		    $stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
			$stmt->bindParam(':description',$description,PDO::PARAM_STR);
			$stmt->bindParam(':price',$price,PDO::PARAM_STR);
			$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
			$stmt->bindParam(':booking',$booking,PDO::PARAM_STR);
			$stmt->bindParam(':room_type',$room_type,PDO::PARAM_STR);
			
			
			$stmt->execute();

									
			echo "successfully added";

			
		}

		public static function event_already_exist_checking($room_no,$description,$price,$img_loc,$booking,$room_type){
			Global $pdo;
			$sql="SELECT * from events WHERE events.room_no=$room_no";
			$stmt = $pdo->prepare($sql);
		    $stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
			$stmt->bindParam(':description',$description,PDO::PARAM_STR);
			$stmt->bindParam(':price',$price,PDO::PARAM_STR);
			$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
			$stmt->bindParam(':booking',$booking,PDO::PARAM_STR);
			$stmt->bindParam(':room_type',$room_type,PDO::PARAM_STR);
		    $stmt->execute();

		   $n=$stmt->rowCount();
		   if(!$n){
		   	operations::insert_events_table($room_no,$description,$price,$img_loc,$booking,$room_type);
		   }
		   else{
		   		echo"Event Already exists. Try inserting Another Event";
		   }
		}
		public static function insert_events_table($room_no,$description,$price,$img_loc,$booking,$room_type){
		
		Global $pdo;
		
		$sql = "INSERT INTO events(room_no,description,price,img_loc,booking,room_type)
							VALUES(:room_no,:description,:price,:img_loc,:booking,:room_type)";
									
		    $stmt = $pdo->prepare($sql);
		    $stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
			$stmt->bindParam(':description',$description,PDO::PARAM_STR);
			$stmt->bindParam(':price',$price,PDO::PARAM_STR);
			$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
			$stmt->bindParam(':booking',$booking,PDO::PARAM_STR);
			$stmt->bindParam(':room_type',$room_type,PDO::PARAM_STR);
			
			
			$stmt->execute();
									
				
			echo "successfully added";
			
		}
		
		public static function insert_featured_rooms_table($description,$price,$img_loc,$room_type){
		
		Global $pdo;
		
		$sql = "INSERT INTO featured_rooms(description,price,img_loc,room_type)
							VALUES(:description,:price,:img_loc,:room_type)";
									
		    $stmt = $pdo->prepare($sql);
			$stmt->bindParam(':description',$description,PDO::PARAM_STR);
			$stmt->bindParam(':price',$price,PDO::PARAM_STR);
			$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
			$stmt->bindParam(':room_type',$room_type,PDO::PARAM_STR);
			
			
			$stmt->execute();
									
				
			
			
		}
		
		
		
		
		public static function insert_employee_title($head_title){
		
				Global $pdo;
		
				$sql = "INSERT INTO employee_title(title)
							      VALUES(:head_title)";
									
					$stmt = $pdo->prepare($sql);
					
					$stmt->bindParam(':head_title',$head_title,PDO::PARAM_STR);
					$stmt->execute();
									
				
			
			
		}
		public static function insert_expense_details($id,$date,$amount,$details){
		
				Global $pdo;
				$sql="INSERT INTO expense_details(emp_id, date, amount, details)
						VALUES('$id','$date','$amount','$details')";
									
					$stmt = $pdo->prepare($sql);
					
					$stmt->bindParam(':id',$id,PDO::PARAM_INT);
					$stmt->bindParam(':date',$date,PDO::PARAM_STR);
					$stmt->bindParam(':amount',$amount,PDO::PARAM_INT);
					$stmt->bindParam(':details',$details,PDO::PARAM_STR);
					$stmt->execute();
									
		}
			
			
		public static function select_head_title(){
			
					Global $pdo;
					$sql="select * from employee_title";
					$stmt = $pdo->prepare($sql);
					$stmt->bindParam(':title',$title,PDO::PARAM_STR);
					$stmt->execute();

					echo "<html>";
					echo "<select name='id'>";

					while ($row = $stmt->fetch()) {
						unset($id, $title);
						$id = $row['emp_id'];
						$title = $row['title']; 
						echo "<option value='" . $id."' class='col-md-8'>" . $title ."</option>";
					}

					echo "</select>";
					echo "</html>";
			
		}
		
		
		
		
		
								public static function insert_about_table($description){
		
								Global $pdo;
		
								$sql = "TRUNCATE TABLE about; INSERT INTO about(description)
													VALUES(:description)";
									
								$stmt = $pdo->prepare($sql);
					
								$stmt->bindParam(':description',$description,PDO::PARAM_STR);
								$stmt->execute();
									
				
			
			
		}
		public static function insert_services_table($title,$description,$img_loc){
		
				Global $pdo;
		
				$sql = "INSERT INTO services(title,description,img_loc)
								VALUES(:title,:description,:img_loc)";
				$stmt = $pdo->prepare($sql);
					
				$stmt->bindParam(':title',$title,PDO::PARAM_STR);
				$stmt->bindParam(':description',$description,PDO::PARAM_STR);
				$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
	
				$stmt->execute();
									
		}
		
									public static function insert_slider_table($img_loc_one,$img_loc_two,$img_loc_three){
		
									Global $pdo;
		
									$sql = "INSERT INTO slider(img_loc_one,img_loc_two,img_loc_three)
														VALUES(:img_loc_one,:img_loc_two,:img_loc_three)";
									
									$stmt = $pdo->prepare($sql);
					
									$stmt->bindParam(':img_loc_one',$img_loc_one,PDO::PARAM_STR);
									$stmt->bindParam(':img_loc_two',$img_loc_two,PDO::PARAM_STR);
									$stmt->bindParam(':img_loc_three',$img_loc_three,PDO::PARAM_STR);
				
									$stmt->execute();
									
				
			
			
		}
		
					public static function insert_admin_table($name,$password){
		
					Global $pdo;
					$security = "?..H@Si./n/?";
	   
					$tst = $pdo->prepare("SELECT * FROM admin");
					$tst->execute();
					$row = $tst->fetch(PDO::FETCH_ASSOC);
	   
						if(!$row){
							$pass = md5($password,PASSWORD_DEFAULT).$security;
							$sql = "INSERT INTO admin(name,password) VALUES(:name,:password)";
			
									$stmt = $pdo->prepare($sql);
									$stmt->bindParam(':name',$name,PDO::PARAM_STR);
									$stmt->bindParam(':password',$password,PDO::PARAM_STR);
									
									$stmt->execute();
									
			//$pdo = null;
	   
	   }
	   else{
		   //echo "ase to ";
	   }
									
				
			
			
		}
		
	public static function delete_rooms_table($room_no){
		
	   Global $pdo;
	 	$sql = "DELETE FROM rooms WHERE room_no = :room_no";
	  	$stmt = $pdo->prepare($sql);
	  	$stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
	 	$stmt->execute();
				
		if($stmt->execute()){
			echo "Successfully deleted";
		}
	  
  }
  
			public static function delete_events_table($room_no){
		
			Global $pdo;
			$sql = "DELETE FROM events WHERE room_no = :room_no";
			$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
				$stmt->execute();
				
				if($stmt->execute()){
					echo "Successfully deleted";
				}
	  
  }	
  
						public static function delete_about_table($id){
		
							Global $pdo;
							$sql = "DELETE FROM about WHERE id = :id";
							$stmt = $pdo->prepare($sql);
							$stmt->bindParam(':id',$id,PDO::PARAM_INT);
							$stmt->execute();
				
									if($stmt->execute()){
										echo "Successfully deleted";
									}
	  
 						 }
  
						public static function delete_service_table($id){
		
							Global $pdo;
							$sql = "DELETE FROM service WHERE id = :id";
							$stmt = $pdo->prepare($sql);
							$stmt->bindParam(':id',$id,PDO::PARAM_INT);
							$stmt->execute();
				
							if($stmt->execute()){
								echo "Successfully deleted";
							}
	  
  						}
  
							public static function delete_slider_table($id){
		
										Global $pdo;
										$sql = "DELETE FROM slider WHERE id = :id";
										$stmt = $pdo->prepare($sql);
										$stmt->bindParam(':id',$id,PDO::PARAM_INT);
										$stmt->execute();
				
												if($stmt->execute()){
													echo "Successfully deleted";
												}
	  
							}
				public static function exists_to_update_room_checking($room_no,$description,$price,$img_loc,$booking,$room_type){
					Global $pdo;
					$sql="SELECT * from rooms WHERE rooms.room_no=$room_no";
					$stmt = $pdo->prepare($sql);
				    $stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
					$stmt->bindParam(':description',$description,PDO::PARAM_STR);
					$stmt->bindParam(':price',$price,PDO::PARAM_STR);
					$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
					$stmt->bindParam(':booking',$booking,PDO::PARAM_STR);
					$stmt->bindParam(':room_type',$room_type,PDO::PARAM_STR);
				    $stmt->execute();

				   $n=$stmt->rowCount();
				   if($n){
				   	operations::update_rooms_table($room_no,$description,$price,$img_loc,$booking,$room_type);
				   }
				   else{
				   		echo"Room Doesn't exists to Update.Try Another";
				   }
				}
				public static function update_rooms_table($room_no,$description,$price,$img_loc,$booking,$room_type){
					Global $pdo;
					// $security = "?..H@Si./n/?"; 
					$sql = "UPDATE rooms SET description=:description, price=:price,img_loc=:img_loc,booking=:booking,room_type=:room_type WHERE room_no = :room_no";
					$stmt = $pdo->prepare($sql);
					$stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
					$stmt->bindParam(':description',$description,PDO::PARAM_STR);
					$stmt->bindParam(':price',$price,PDO::PARAM_STR);
					$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
					$stmt->bindParam(':booking',$booking,PDO::PARAM_STR);
					$stmt->bindParam(':room_type',$room_type,PDO::PARAM_STR);
					$stmt->execute();

					echo "Room Updated Successfully.";
				}

				public static function exists_to_update_event_checking($room_no,$description,$price,$img_loc,$booking,$room_type){
					Global $pdo;
					$sql="SELECT * from events WHERE events.room_no=$room_no";
					$stmt = $pdo->prepare($sql);
				    $stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
					$stmt->bindParam(':description',$description,PDO::PARAM_STR);
					$stmt->bindParam(':price',$price,PDO::PARAM_STR);
					$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
					$stmt->bindParam(':booking',$booking,PDO::PARAM_STR);
					$stmt->bindParam(':room_type',$room_type,PDO::PARAM_STR);
				    $stmt->execute();

				   $n=$stmt->rowCount();
				   if($n){
				   	operations::update_events_table($room_no,$description,$price,$img_loc,$booking,$room_type);
				   }
				   else{
				   		echo"Event Doesn't exists to Update.Try Another";
				   }
				}
				public static function update_events_table($room_no,$description,$price,$img_loc,$booking,$room_type){
					Global $pdo;
					// $security = "?..H@Si./n/?"; 
					$sql = "UPDATE events SET description=:description, price=:price,img_loc=:img_loc,booking=:booking,room_type=:room_type WHERE room_no = :room_no";
					$stmt = $pdo->prepare($sql);
					$stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
					$stmt->bindParam(':description',$description,PDO::PARAM_STR);
					$stmt->bindParam(':price',$price,PDO::PARAM_STR);
					$stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);
					$stmt->bindParam(':booking',$booking,PDO::PARAM_STR);
					$stmt->bindParam(':room_type',$room_type,PDO::PARAM_STR);
					$stmt->execute();

					echo "Event Updated Successfully.";
				}
				public static function update_admin_name($id,$olduser,$name,$confirmuser){
							
							if($name!=$confirmuser){
								echo'Try again. New user Confirmation is not matching.';
							}
							else if($olduser==$name){
								echo 'Try again giving a different User Name.';
							}
							else{
							Global $pdo;
							// $security = "?..H@Si./n/?"; 
							$sql = "UPDATE admin SET name = :name WHERE id = :id";
							$stmt = $pdo->prepare($sql);
							$stmt->bindParam(':id',$id,PDO::PARAM_INT);
							$stmt->bindParam(':name',$name,PDO::PARAM_STR);
							$stmt->execute();
							}							
				}
			
	public static function update_admin_password($id,$oldpass,$password,$confirmpass){
			if($confirmpass!=$password){
				echo'Try again. New Password Confirmation is not matching.';
			}
			else if($oldpass==$password){
				echo 'Try again giving a different Password.';
			}
			else{
				Global $pdo;
				//$security = "?..H@Si./n/?"; 
				//$password = md5($password,PASSWORD_DEFAULT).$security;
		   
					$sql = "UPDATE admin SET password =:password WHERE id =:id";
				
					$stmt = $pdo->prepare($sql);
					$stmt->bindParam(':id',$id,PDO::PARAM_INT);
					$stmt->bindParam(':password',$password,PDO::PARAM_STR);
					
					$stmt->execute();
			}
	   
   }

	public static function show_rooms(){
		
		Global $pdo;
		operations::date_compare_booking_update();
	  $qry = "SELECT * FROM rooms  WHERE booking IN('No','Pending','no','pending')";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
				$id = $obj->id;	
				$room_no = $obj->room_no;
				$description = $obj->description;
				$price = $obj->price;
				$img_loc = $obj->img_loc;
				$room_type = $obj->room_type;
				$img_loc = "admin/".$img_loc;
				
						echo  " 
        
				            <div class='col-md-4 no-underline'>
                                <a href=''>
                                    <div class='card'>
                                        <img class='card-img-top' src='$img_loc' alt='Card image cap'>
                                        <div class='card-body'>
                                            <h6 class='card-title'>Room No - $room_no</h6>
											<h6 class='card-title'>Room Type - $room_type</h6>
                                            <p class='card-text'><b>Price : $price BDT</b></p>
                                            <a class='btn btn-primary' href='booking.php?id=$id'>Book Now</a>
                                        </div>
                                    </div>
                                </a>
							</div>
       
							";
				
				}
	  
		
		
	}
	public static function show_featured_rooms(){
		
		Global $pdo;
	  $qry = "SELECT * FROM featured_rooms";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
				$id = $obj->id;	
				$description = $obj->description;
				$price = $obj->price;
				$img_loc = $obj->img_loc;
				$room_type = $obj->room_type;
				$img_loc = "admin/".$img_loc;
				
						echo  " 
        
				            <div class='col-md-4 no-underline'>
                                <a href=''>
                                    <div class='card'>
                                        <img class='card-img-top' src='$img_loc' alt='Card image cap'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$room_type</h5>
                                            <p class='card-text'>Tk:$price </p>
                                           
                                        </div>
                                    </div>
                                </a>
							</div>
       
							";
				
				}
	  
		
		
	}
	
	
	
	
	
		public static function show_events(){
		
		Global $pdo;
		operations::date_compare_event_update();
	  $qry = "SELECT * FROM events  WHERE booking IN('No','Pending','no','pending')";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
				$id = $obj->id;	
				$room_no = $obj->room_no;
				$description = $obj->description;
				$price = $obj->price;
				$img_loc = $obj->img_loc;
				$room_type = $obj->room_type;
				$img_loc = "admin/".$img_loc;
				
						echo  " 
        
				            <div class='col-md-4 no-underline'>
                                <a href=''>
                                    <div class='card'>
                                        <img class='card-img-top' src='$img_loc' alt='Card image cap'>
                                        <div class='card-body'>
                                            <h6 class='card-title'>Event No - $room_no</h6>
											<h6 class='card-title'>Event Type - $room_type</h6>
                                            <p class='card-text'><b>Price : $price BDT</b></p>
                                            <a class='btn btn-primary' href='event_booking.php?id=$id'>Book Now</a>
                                        </div>
                                    </div>
                                </a>
							</div>
       
							";
				
				}
	  
		
		
	}

   
					public static function show_about(){
						
						Global $pdo;
						$qry = "SELECT * FROM about";
						$stmt = $pdo->prepare($qry);
						$stmt->execute();
						while($obj = $stmt->fetchObject()){
								
								$description = $obj->description;
								echo "<pre>$description</pre>";
								
								
						}
						
						
					}
								public static function show_slider(){
								Global $pdo;
								$qry = "SELECT * FROM slider WHERE id = 1";
								$stmt = $pdo->prepare($qry);
								$stmt->execute();
								while($obj = $stmt->fetchObject()){
								
								$img_loc_one= $obj->img_loc_one;
								$img_loc_two = $obj->img_loc_two;
								$img_loc_three = $obj->img_loc_three;
								$img_loc_one = "admin/".$img_loc_one;
								$img_loc_two = "admin/".$img_loc_two;
								$img_loc_three = "admin/".$img_loc_three;
								echo"
								<div class='carousel-item active'>
								<img class='first-slide'
								src=' $img_loc_one'
								alt='First slide'>
         
								</div>
								<div class='carousel-item'>
								<img class='second-slide'
								src=' $img_loc_two'
								alt='Second slide'>
            
								</div>
							<div class='carousel-item'>
							<img class='third-slide'
							src='$img_loc_three'
							alt='Third slide'>

							</div>";
								}
								
								
								
									
								}
								
		public static function show_services(){
										
			Global $pdo;
			$qry = "SELECT * FROM services";
			$stmt = $pdo->prepare($qry);
			$stmt->execute();
			while($obj = $stmt->fetchObject()){
			$title = $obj->title;
			$description = $obj->description;
			$img_loc = $obj->img_loc;
			$img_loc = "admin/".$img_loc;

			
			echo"<div id='services' class='container'>
					<ul class='nav nav-tabs' id='myTab' role='tablist'>
						<li class='nav-item'>
							<a class='nav-link active' id='.$title' data-toggle='tab' href='#' role='tab'
							   aria-controls='$title' aria-selected='true'>$title</a>
						</li>
					</ul>
					<div class='tab-content' id='myTabContent'>
						<div class='tab-pane fade show active' id='restaurant' role='tabpanel' aria-labelledby='restaurant-tab'>
							<div class='row'>
								<div class='col-4'>
									<img src='$img_loc' alt='$title' class='img-fluid'/>
								</div>
								<div class='col-8'>
									<h3>$title</h3>
									<p style='text-align:justify;'>$description
									</p>
								</div>
								
							</div>
						</div>
					</div>
				</div>";
									
									
			}	
										
										
		}
									
						public static function update_slide_table($img_loc_one,$img_loc_two,$img_loc_three){
							 Global $pdo;
							
	   
	   
							$sql = "UPDATE slider SET img_loc_one =:img_loc_one,img_loc_two = :img_loc_two,img_loc_one=:img_loc_three WHERE id =1";
			
							$stmt = $pdo->prepare($sql);
							$stmt->bindParam(':img_loc_one',$img_loc_one,PDO::PARAM_STR);
							$stmt->bindParam(':img_loc_two',$img_loc_two,PDO::PARAM_STR);
							$stmt->bindParam(':img_loc_three',$img_loc_three,PDO::PARAM_STR);
				
							$stmt->execute();
							
						}		

		public static function update_service_table($description,$img_loc){
                Global $pdo;



                $sql = "UPDATE service SET description = :description, img_loc =:img_loc WHERE id =1";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':description',$description,PDO::PARAM_STR);
                $stmt->bindParam(':img_loc',$img_loc,PDO::PARAM_STR);

                $stmt->execute();
							
        }
						
        public static function get_id($id){
            Global $pdo;
			$id = $_GET['id'];
							
			return $id;
							
        }

					public static function show_book_room(){
						
						Global $pdo;
						$id = operations::get_id($id);
						$qry = "SELECT * FROM rooms  WHERE id = $id";
						$stmt = $pdo->prepare($qry);
						$stmt->execute();
								while($obj = $stmt->fetchObject()){
										//$id = $obj->id;	
										$room_no = $obj->room_no;
										$description = $obj->description;
										$price = $obj->price;
										//$img_loc = $obj->img_loc;
										$room_type = $obj->room_type;
										
									//echo "This room no is : ".$room_no. " .Room Type is : ".$room_type." And it demands:".$price." tk";
									echo "<i>$description</i>";
						
						
					}
					
					}
					
					public static function insert_book_table($fdate,$tdate,$name,$mail,$phone,$code,$address,$room_no){
						
						Global $pdo;
		
							$sql = "INSERT INTO booking(fdate,tdate,name,mail,phone,code,address,room_no)
							VALUES(:fdate,:tdate,:name,:mail,:phone,:code,:address,:room_no)";
									
							$stmt = $pdo->prepare($sql);
							$stmt->bindParam(':fdate',$fdate,PDO::PARAM_STR);
							$stmt->bindParam(':tdate',$tdate,PDO::PARAM_STR);
							$stmt->bindParam(':name',$name,PDO::PARAM_STR);
							$stmt->bindParam(':mail',$mail,PDO::PARAM_STR);
							$stmt->bindParam(':phone',$phone,PDO::PARAM_STR);
							$stmt->bindParam(':code',$code,PDO::PARAM_STR);
							$stmt->bindParam(':address',$address,PDO::PARAM_STR);
							$stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
			
			
							$stmt->execute();
							
						
						
						
						
					}
					
					public static function update_booking_status($room_no){
						Global $pdo;
						$sql="update rooms set booking='Success' where room_no=:room_no";
						$rslt=$pdo->prepare($sql);
						$rslt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
						$rslt->execute();
					}
					public static function cancel_booking_status($room_no){
						Global $pdo;
						$sql="update rooms set booking='No' where room_no=:room_no";
						$rslt=$pdo->prepare($sql);
						$rslt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
						$rslt->execute();
					}
					public static function pending_booking_status($room_no){
						Global $pdo;
						$sql="update rooms set booking='Pending' where room_no=:room_no";
						$rslt=$pdo->prepare($sql);
						$rslt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
						$rslt->execute();
					}
					public static function delete_from_booking_status($room_no){
						//echo $room_no;
						Global $pdo;
						$sql="delete from booking where room_no=:room_no";
						$rslt=$pdo->prepare($sql);
						$rslt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
						$rslt->execute();
					}
					public static function getid($number){
						return $number;
					}
					public static function date_compare_booking_update(){
						Global $pdo;

						$sql="UPDATE rooms,booking SET rooms.booking='No' where booking.tdate < CURDATE() and booking.room_no=rooms.room_no"; //Update booking status
						$st=$pdo->prepare($sql);
						$st->execute();

						$qry="SELECT rooms.room_no from rooms,booking where booking.tdate < CURDATE() and booking.room_no=rooms.room_no";//Catch the room_no
						$stmt = $pdo->prepare($qry);
						$stmt->execute();
						while($obj = $stmt->fetchObject()){
    						$room_no = $obj->room_no;
							operations::delete_from_booking_status($room_no);
						}
					}
				public static function show_booking(){
						Global $pdo;
						Global $pending_booking_statuso;
						operations::date_compare_booking_update();
						$qry="SELECT booking.room_no,booking.fdate,booking.tdate,booking.name,booking.phone,booking.code,booking.address,rooms.booking,rooms.assigned_to from booking left join rooms ON booking.room_no=rooms.room_no";
						//$qry = "SELECT * FROM booking ";
						$stmt = $pdo->prepare($qry);
						$stmt->execute();
						while($obj = $stmt->fetchObject()){
							$fdate = $obj->fdate;
							$tdate = $obj->tdate;
							$name = $obj->name;
							$phone=$obj->phone;
							$code = $obj->code;
							$address = $obj->address;
							$room_no = $obj->room_no;
							$booking = $obj->booking;
							$assigned_to=$obj->assigned_to;
										
							echo"
										
							<tr>
	                            <td>$room_no</td>
	                            <td>$fdate</td>
	                            <td>$tdate</td>
	                            <td>$name</td>
	                            <td>$phone</td>
	                            <td>$code</td>
	                            <td>$address</td>
								<td>$booking</td>
								<td>$assigned_to</td>
	                            <td>
									<form action='#' method='post'>
										<select name='todo'>
											<option value=''>----------</option>
											<option value='pending'>Pending</option>
											<option value='cancelled'>Cancelled</option>
											<option value='success'>Success</option>
										</select>
										<span><input type='submit' name='submit' value='Submit' class='btn btn-primary'></span>
									</form>
	                            </td>
							</tr>
							";

						}
							   
					if(isset($_POST['submit'])){
						if($_POST['todo']=='pending'){
							echo'pending';
							operations::pending_booking_status($room_no);
						}
						else if($_POST['todo']=='cancelled'){
							echo'cancelled';
							operations::cancel_booking_status($room_no);
							operations::delete_from_booking_status($room_no);
							header("Location:/royal_hotel/admin/booking.php");
						}
						else if($_POST['todo']=='success'){
							echo 'Success';
							operations::update_booking_status($room_no);
						}
						else{
							echo 'Nothing Selected Try Again';
						}
										
					}
				}
					public static function insert_event_book_table($fdate,$tdate,$name,$mail,$phone,$code,$address,$room_no){
						
						Global $pdo;
		
							$sql = "INSERT INTO event_booking(fdate,tdate,name,mail,phone,code,address,room_no)
							VALUES(:fdate,:tdate,:name,:mail,:phone,:code,:address,:room_no)";
									
							$stmt = $pdo->prepare($sql);
							$stmt->bindParam(':fdate',$fdate,PDO::PARAM_STR);
							$stmt->bindParam(':tdate',$tdate,PDO::PARAM_STR);
							$stmt->bindParam(':name',$name,PDO::PARAM_STR);
							$stmt->bindParam(':mail',$mail,PDO::PARAM_STR);
							$stmt->bindParam(':phone',$phone,PDO::PARAM_STR);
							$stmt->bindParam(':code',$code,PDO::PARAM_STR);
							$stmt->bindParam(':address',$address,PDO::PARAM_STR);
							$stmt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
			
			
							$stmt->execute();
							
						
						
						
						
					}
					
					public static function update_event_booking_status($room_no){
						Global $pdo;
						$sql="update events set booking='Success' where room_no=:room_no";
						$rslt=$pdo->prepare($sql);
						$rslt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
						$rslt->execute();
					}
					public static function cancel_event_booking_status($room_no){
						Global $pdo;
						$sql="update events set booking='No' where room_no=:room_no";
						$rslt=$pdo->prepare($sql);
						$rslt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
						$rslt->execute();
					}
					public static function pending_event_booking_status($room_no){
						Global $pdo;
						$sql="update events set booking='Pending' where room_no=:room_no";
						$rslt=$pdo->prepare($sql);
						$rslt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
						$rslt->execute();
					}
					public static function delete_from_event_booking_status($room_no){
						Global $pdo;
						$sql="delete from event_booking where room_no=:room_no";
						$rslt=$pdo->prepare($sql);
						$rslt->bindParam(':room_no',$room_no,PDO::PARAM_STR);
						$rslt->execute();
					}
					public static function date_compare_event_update(){
						Global $pdo;

						$sql="UPDATE events,event_booking SET events.booking='No' where event_booking.tdate < CURDATE() and event_booking.room_no=events.room_no"; //Update booking status
						$st=$pdo->prepare($sql);
						$st->execute();

						$qry="SELECT events.room_no from events,event_booking where event_booking.tdate < CURDATE() and event_booking.room_no=events.room_no";//Catch the room_no
						$stmt = $pdo->prepare($qry);
						$stmt->execute();
						while($obj = $stmt->fetchObject()){
    						$room_no = $obj->room_no;
							operations::delete_from_event_booking_status($room_no);
						}
					}
					public static function show_event_booking(){
						
									Global $pdo;
									$qry="SELECT event_booking.room_no,event_booking.fdate,event_booking.tdate,event_booking.name,event_booking.phone,event_booking.code,event_booking.address,events.booking from event_booking left join events ON event_booking.room_no=events.room_no";
									$stmt = $pdo->prepare($qry);
									$stmt->execute();
									while($obj = $stmt->fetchObject()){
									$fdate = $obj->fdate;
									$tdate = $obj->tdate;
									$name = $obj->name;
									$phone = $obj->phone;
									$code = $obj->code;
									$address = $obj->address;
									$room_no = $obj->room_no;
									$booking = $obj->booking;
									
									echo"
									
									<tr>
                                        <td>$room_no</td>
                                        <td>$fdate</td>
                                        <td>$tdate</td>
                                        <td>$name</td>
                                        <td>$phone</td>
                                        <td>$code</td>
                                        <td>$address</td>
										<td>$booking</td>
                                        <td>
											<form action='#' method='post'>
											<select name='todo'>
												<option value=''>----------</option>
												<option value='pending'>Pending</option>
												<option value='cancelled'>Cancelled</option>
												<option value='success'>Success</option>
											</select>
											<span><input type='submit' name='submit' value='Submit' class='btn btn-primary'></span>
										</form>
                                        </td>
									</tr>
									";

					           }
							   
									if(isset($_POST['submit'])){
										if($_POST['todo']=='pending'){
											echo'pending';
											operations::pending_event_booking_status($room_no);
										}
										else if($_POST['todo']=='cancelled'){
											echo'cancelled';
											operations::cancel_event_booking_status($room_no);
											operations::delete_from_event_booking_status($room_no);
											header("Location:/royal_hotel/admin/event_booking.php");
										}
										else if($_POST['todo']=='success'){
											echo 'Success';
											operations::update_event_booking_status($room_no);
										}
										else{
											echo 'Nothing Selected Try Again';
										}
										
									}
					}
					
		function show_expense_list(){
			Global $pdo;
			$sql="select * from expense_details order by Id desc";
			$query = $pdo->prepare($sql);
			
			$query->bindParam(':date',$date,PDO::PARAM_STR);
			$query->bindParam(':title',$title,PDO::PARAM_STR);
			$query->bindParam(':amount',$amount,PDO::PARAM_INT);
			$query->bindParam(':details',$details,PDO::PARAM_STR);

			
			$query->execute();
			
			if($obj = $query->fetchObject()){
				$sn=1;
				while($rows = $query->fetch()){?>

					<tr>
						<td><?php echo $sn; ?></td>
						<td><?php echo $rows['date']; ?></td>
						<td>
							<?php
								$id = $rows['emp_id']; 
								$sql="select title from employee_title where emp_id = $id";
								$rslt=$pdo->prepare($sql);
								$rslt->bindParam(':title',$title,PDO::PARAM_STR);
								$rslt->execute();
								
								$row = $rslt->fetch();
								//var_dump($row);
								echo $row['title'];

							?>
						</td>
						<td><?php echo $rows['amount']; ?></td>
						<td><?php echo $rows['details']; ?></td>
						<td>
						<?php $id = $rows['id'];?>
							
						<a rel="tooltip"  title="Delete" id="<?php echo $rows['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" href="delete_expense.php?id=<?php echo $rows['id'];?>" data-toggle="modal"    class="btn btn-danger"><i class="fa fa-trash" ></i></a>

						<a  rel="tooltip"  title="Edit" id="<?php echo $rows['id']; ?>" href="edit_expense.php?id=<?php echo $rows['id'];?>" class="btn btn-success"><i class="fa fa-pencil" "></i></a>
			  
						</td>
					</tr>


				<?php

					$sn++;
				}
			} 
		
		
		
	}
	

	
	public static function show_users(){
						
									Global $pdo;
									$qry = "SELECT * FROM admin ";
									$stmt = $pdo->prepare($qry);
									$stmt->execute();
									while($obj = $stmt->fetchObject()){
									$id = $obj->id;
									$name = $obj->name;
									$password = $obj->password;

									echo"
									<tr>
                                        <td>$id</td>
                                        <td>$name</td>
                                        <td>$password</td>
									</tr>
									";

					           }
							   
						
					}
	public static function show_rooms_images(){
		
		Global $pdo;
		
	  $qry = "SELECT * FROM rooms  WHERE booking IN('No','Pending','no','pending')";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
				$id = $obj->id;	
				$room_no = $obj->room_no;
				$description = $obj->description;
				$price = $obj->price;
				$img_loc = $obj->img_loc;
				$room_type = $obj->room_type;
				$img_loc = "admin/".$img_loc;
				
						echo  " 
        
				            <div class='col-md-4 no-underline'>
                                <a href=''>
                                    <div class='card'>
                                        <img class='card-img-top' src='$img_loc' alt='Card image cap'>
                                        <div class='card-body'>
                                            <h6 class='card-title'>Room No - $room_no</h6>
											<h6 class='card-title'>Room Type - $room_type</h6>
                                          
                                            
                                        </div>
                                    </div>
                                </a>
							</div>
       
							";
				
				}
	  
		
		
	}
					
		public static function show_image_from_rooms(){
		
				Global $pdo;
				$qry = "SELECT img_loc FROM rooms";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
				$img_loc = $obj->img_loc;
				$img_loc = "admin/".$img_loc;
				
						echo  " 
        
				            <div class='col-md-4 no-underline'>
                                <a href=''>
                                    <div class='card'>
                                        <img class='card-img-top' src='$img_loc' alt='Card image cap'>
                                    </div>
                                </a>
							</div>
       
							";
				
				}
	  
		
		
		}

		public static function show_events_images(){
		
		Global $pdo;
		//operations::date_compare_event_update();
	  $qry = "SELECT * FROM events  WHERE booking IN('No','Pending','no','pending')";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
				$id = $obj->id;	
				$room_no = $obj->room_no;
				$description = $obj->description;
				$price = $obj->price;
				$img_loc = $obj->img_loc;
				$room_type = $obj->room_type;
				$img_loc = "admin/".$img_loc;
				
						echo  " 
        
				            <div class='col-md-4 no-underline'>
                                <a href=''>
                                    <div class='card'>
                                        <img class='card-img-top' src='$img_loc' alt='Card image cap'>
                                        <div class='card-body'>
                                            <h6 class='card-title'>Event No - $room_no</h6>
											<h6 class='card-title'>Event Type - $room_type</h6>
                                            
                                            
                                        </div>
                                    </div>
                                </a>
							</div>
       
							";
				
				}
	  
		
		
	}
		public static function show_image_from_event(){
		
				Global $pdo;
				$qry = "SELECT img_loc FROM events";
	  			$stmt = $pdo->prepare($qry);
				$stmt->execute();
				while($obj = $stmt->fetchObject()){
				$img_loc = $obj->img_loc;
				$img_loc = "admin/".$img_loc;
				
						echo  " 
        
				            <div class='col-md-4 no-underline'>
                                <a href=''>
                                    <div class='card'>
                                        <img class='card-img-top' src='$img_loc' alt='Card image cap'>
                                    </div>
                                </a>
							</div>
       
							";
				
				}
	  
		
		
		}
	
	
	
}
	
		
	




?>