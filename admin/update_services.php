
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Information To Update Service</div>
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
			<div class="form-group">
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
          </div>
		  


		  

          <input type ="submit" name="submit" value="Update" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
  </div>
			<?php
			require_once("../Model/class_operations_data.php");
			

			
			
				if(isset($_POST['submit'])){
				
				if(($_POST['title'])==null ||($_POST['description'])==null || ($_FILES['img_loc'])==null){
				echo "error";
				}
				else{
						$loc = "images/service/";
						$filename = $_FILES['img_loc']['name'];
						$tmpname = $_FILES['img_loc']['tmp_name'];
						$filesize = $_FILES['img_loc']['size'];
						$filetype = $_FILES['img_loc']['type'];
						//check img type and size
						//if(){
						
						$filepath1 = $loc.$filename;
						$rslt = move_uploaded_file($tmpname,$filepath1);
						//error_reporting(E_ERROR | E_PARSE);
						
									if(!isset($rslt)){
									echo "Fail to Upload";
									echo "Try Again";
									
									exit();
									
									}
				operations::already_exists_services_table_checking($_POST['title'],$_POST['description'],$filepath1);
				echo "successfully added";
				
			}
			}
		
			?>
 
	<?php
	include("ainclude/footer.php");
	?>