
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">About Hotel Royal</div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <h4 >Description</h4>
                <!--<input class="form-control" name="description" type="text" aria-describedby="nameHelp" placeholder="Enter about us description" required >  -->
				<textarea name="description" rows="10" cols="80" placeholder="Enter About Us Description" required></textarea>
              </div>
            </div>
          </div>

		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
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
			

			
			
				if(isset($_POST['submit'])){
				if($_POST['description']== null){
					echo "error";
				}
				
				else{
				operations::insert_about_table($_POST['description']);
				echo "successfully added";
				
			}
			}
		
			?>

	<?php
	include("ainclude/footer.php");
	?>