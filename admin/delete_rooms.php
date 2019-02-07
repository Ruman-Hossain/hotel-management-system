
     <?php
	 //ini_set( "display_errors", 0); 
	 
		include("ainclude/header.php");
	 
	 ?>


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Delete A Room</div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label >Room No</label>
                <input class="form-control" name="room_no" type="text" aria-describedby="nameHelp" placeholder="Enter room no" required>
              </div>
              
          </div>

          <br>
          <input type ="submit" name="submit" value="Delete" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
  </div>
			<?php
			include("../Model/class_operations_data.php");
			include("../Controller/class_input_check.php");
			

			
			
				if(isset($_POST['submit'])){
				
				if($_POST['room_no']== null ){
					echo "";
				}
				else{
							
				    operations::delete_rooms_table($_POST['room_no']);
				
				
				
			}
				}
		
			?>
 
	<?php
	include("ainclude/footer.php");
	?>