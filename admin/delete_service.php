
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Deletion Service Information</div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype = "multipart/form-data">
            <div class="form-group">
				<div class="form-row">
				  <div class="col-md-6">
					<label >Title</label>
					<input class="form-control" name="title" type="text" aria-describedby="nameHelp" placeholder="Enter a service title" required >
				  </div>
				</div>
            </div>
<!-- 			<div class="form-group">
            <div class="form-row">

              <div class="col-md-6">
                <label >Description</label>
                <input class="form-control" name="description" type="text" aria-describedby="nameHelp" placeholder="Enter service description" required >
              </div>
            </div>
          </div>

		    <div class="form-group">
				<div class="form-row">
				  <div class="col-md-6">
					<label >Image</label>
					<input class="form-control" name ="img_loc" type="file" placeholder="" required>
				  </div>
				</div>
          </div> -->
		  


		  

          <input type ="submit" name="submit" value="Delete" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
  </div>
			<?php
			require_once("../Model/class_operations_data.php");
			

			
			
				if(isset($_POST['submit'])){
				
				if(($_POST['title'])==null){
				echo "error";
				}
				else{
				operations::delete_from_services_table($_POST['title']);
				
				
			}
			}
		
			?>
 
	<?php
	include("ainclude/footer.php");
	?>