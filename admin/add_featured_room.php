
     <?php
	 //ini_set( "display_errors", 0); 
	 
		include("ainclude/header.php");
	 
	 ?>


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add A Featured Room</div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
<!--			
              <div class="col-md-6">
                <label >Room No</label>
                <input class="form-control" name="room_no" type="text" aria-describedby="nameHelp" placeholder="Enter room no" required>
              </div>
-->			  
			  
              <div class="col-md-6">
                <label >Room_type</label>
                <input class="form-control" name="room_type" type="text" aria-describedby="nameHelp" placeholder="Enter room_type" required >
              </div>
            </div>
          </div>
		     <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label >Price</label>
                <input class="form-control" name="price" type="text" placeholder="Price" required >
              </div>
			  
<!--			  
              <div class="col-md-6">
                <label >Booking</label>
                <select class="form-control" name="booking" type="text" placeholder="Booking" required   >
				<option value="yes">yes</option>
				<option value="no">no</option>
				</select>
              </div>
			  
-->			  
            </div>
          </div>

		     <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label >Image</label>
                <input class="form-control"  type="file" name = "roomimage" required>
              </div>
              
            </div>
          </div>
		  

		     <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label >Description</label>
                <input class="form-control" name ="description" type="text" placeholder="Short Description" required>
              </div>
             
            </div>
          </div>
		  

          <input type ="submit" name="submit" value="Add" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
  </div>
			<?php
			include("../Model/class_operations_data.php");
			include("../Controller/class_input_check.php");
			

			
			
				if(isset($_POST['submit'])){
				
				if($_POST['description']== null || $_POST['price']== null || $_FILES['roomimage']== null ||$_POST['room_type']== null){
					echo "";
				}
				else{
					$loc = "images/featured_rooms/";
						$filename = $_FILES['roomimage']['name'];
						$tmpname = $_FILES['roomimage']['tmp_name'];
						$filesize = $_FILES['roomimage']['size'];
						$filetype = $_FILES['roomimage']['type'];
						//check img type and size
						//if(){
						
						$filepath = $loc.$filename;
						$rslt = move_uploaded_file($tmpname,$filepath);
						error_reporting(E_ERROR | E_PARSE);
						
									if(!isset($rslt)){
									echo "Fail to Upload";
									echo "Try Again";
									
									exit();
									
									}
						//$filepath = check_input::test_img("roomimage",$loc);			
				    operations::insert_featured_rooms_table($_POST['description'],$_POST['price'],$filepath,$_POST['room_type']);
				echo "successfully added";
				
				
			}
				}
		
			?>
 
	<?php
	include("ainclude/footer.php");
	?>