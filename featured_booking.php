<?php
ini_set( "display_errors", 0); 
include("Include/header.php");
?>


<div id="main">
    <div class="container background-white box-shadow">
        <h1 class="page-header">Book Featured Rooms</h1>

        <div class="row">
	
            <div class="container">
  
              <form method="post" action ="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                    <div class="form-group row">
					
                        <label for="from-date" class="col-sm-3 col-form-label align-right">Check In</label>
                        <div class="col-sm-6">
                            <input type="date" id="from-date" name="fdate" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="to-date" class="col-sm-3 col-form-label align-right">Check Out</label>
                        <div class="col-sm-6">
                            <input type="date" id="to-date" name="tdate" class="form-control"/>
                        </div>
                    </div>

 
					


                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 col-form-label align-right">

                            Name
                        </label>
                        <div class="col-sm-6">
                            <input type="text" id="firstName" name="name" class="form-control"
                                   placeholder=" Name" required/>
                        </div>
                    </div>

                   

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label align-right">
                            Email
                        </label>
                        <div class="col-sm-6">
                            <input type="email" id="email" name="email" class="form-control"
                                   placeholder="Email" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mobile" class="col-sm-3 col-form-label align-right">
                            Mobile Number
                        </label>
                        <div class="col-sm-6">
                            <input type="text" id="mobile" name="mobile" class="form-control"
                                   placeholder="Mobile Number" required />
                        </div>
					</div>
					<div class="form-group row">
						
						<label for="mobile" class="col-sm-3 col-form-label align-right">
                            Code Word
                        </label>
                        <div class="col-sm-6">
                            <input type="text" id="codeword" name="codeword" class="form-control"
                                   placeholder="codeword" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label align-right">
                           room no
                        </label>
                        <div class="col-sm-6">
                            <input type="text" id="address" name="room_no" class="form-control"
                                   placeholder="Room no" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label align-right">
                            Address
                        </label>
                        <div class="col-sm-6">
                            <input type="text" id="address" name="address" class="form-control"
                                   placeholder="Address" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5"></div>
                        <input type="submit" name ="submit" value="Book Now" onclick="functionAlert()" class="btn btn-primary col-sm-2"/>
                        <div class="col-sm-5"></div>
                    </div>
                </form>
            </div>
        </div>

    </div>
	
		<?php
		include("Model/class_operations_data.php");
		include("Controller/class_input_check.php");
			

		
		//echo $id;
			
				if(isset($_POST['submit'])){

				
				
					
									
						//$filepath = check_input::test_img("roomimage",$loc);			
				  operations::insert_featured_book_table($_POST['fdate'],$_POST['tdate'],$_POST['name'],$_POST['email'],$_POST['mobile'],$_POST['codeword'],$_POST['address'],$_POST['room_no']);
				echo "Successfully Featured Rooms Booking Placed.";
				
				/*
				$flag = true;
				//include("Model/class_operations_data.php");
					if($flag){
								include("Model/class_operations_data.php"); 
							$id = operations::get_id($id);
							$y = "yes";
							operations::update_room_book($id,$y);
					}
					*/
					
					operations::pending_featured_booking_status($_POST['room_no']);
			
				
				}
			
				
		?>	


</div>
<?php 
	include("Include/footer.php");
?>
