
     <?php
	 //ini_set( "display_errors", 0); 
	 
		include("ainclude/header.php");
	 
	 ?>


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">New Head Information</div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-8">
                <h4>Head Title *</h4>
                <input class="form-control" name="head_title" type="text" aria-describedby="nameHelp" placeholder="Enter A Head Title" required>
              </div>
            </div>
          </div>
		  <div class="form-group">
			<div class="form-row">
				<div class="col-md-8">
					<input type ="submit" name="submit" value="Add" class="btn btn-primary btn-block">
				</div>
			</div>
		  </div>
        </form>

      </div>
    </div>
  </div>
			<?php
			include("../Model/class_operations_data.php");
			include("../Controller/class_input_check.php");
			

			
			
				if(isset($_POST['submit'])){
				
					if($_POST['head_title']!== null){
						
						//$filepath = check_input::test_img("roomimage",$loc);			
						operations::insert_employee_title($_POST['head_title']);
						echo "Successfully Added Head Title.";
					}
					else{
						echo 'Adding Head Title Failed';
						echo 'Try Again.';
										
					}

			}
		
			?>
 
	<?php
	include("ainclude/footer.php");
	?>