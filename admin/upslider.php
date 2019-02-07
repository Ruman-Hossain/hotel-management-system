
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add A Service</div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype = "multipart/form-data">
          <div class="form-group">
            <div class="form-row">

              <div class="col-md-6">
                <label >image one</label>
                <input class="form-control" name="img_loc_one" type="file" aria-describedby="nameHelp" placeholder="" required >
              </div>
            </div>
			            <div class="form-row">

              <div class="col-md-6">
                <label >image two</label>
                <input class="form-control" name="img_loc_two" type="file" aria-describedby="nameHelp" placeholder="" required >
              </div>
            </div>            <div class="form-row">

              <div class="col-md-6">
                <label >image three</label>
                <input class="form-control" name="img_loc_three" type="file" aria-describedby="nameHelp" placeholder="" required >
              </div>
            </div>
          </div>



		  


		  

          <input type ="submit" name="submit" value="Add" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
  </div>
			<?php
			require_once("../Model/class_operations_data.php");
			
			
				if(isset($_POST['submit'])){
				
				if($_FILES['img_loc_one']== null || $_FILES['img_loc_two']== null || $_FILES['img_loc_three']== null){
					echo "";
				}
				else{
					$loc = "images/slide/";
						$filename = $_FILES['img_loc_one']['name'];
						$tmpname = $_FILES['img_loc_one']['tmp_name'];
						$filesize = $_FILES['img_loc_one']['size'];
						$filetype = $_FILES['img_loc_one']['type'];
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
											$filename = $_FILES['img_loc_two']['name'];
											$tmpname = $_FILES['img_loc_two']['tmp_name'];
											$filesize = $_FILES['img_loc_two']['size'];
											$filetype = $_FILES['img_loc_two']['type'];
											//check img type and size
											//if(){
						
											$filepath2 = $loc.$filename;
											$rslt = move_uploaded_file($tmpname,$filepath2);
											//error_reporting(E_ERROR | E_PARSE);
						
													if(!isset($rslt)){
														echo "Fail to Upload";
															echo "Try Again";
									
															exit();
									
									}
									
						$filename = $_FILES['img_loc_three']['name'];
						$tmpname = $_FILES['img_loc_three']['tmp_name'];
						$filesize = $_FILES['img_loc_three']['size'];
						$filetype = $_FILES['img_loc_three']['type'];
						//check img type and size
						//if(){
						
						$filepath3 = $loc.$filename;
						$rslt = move_uploaded_file($tmpname,$filepath3);
						//error_reporting(E_ERROR | E_PARSE);
						
									if(!isset($rslt)){
									echo "Fail to Upload";
									echo "Try Again";
									
									exit();
									
									}					
						//$filepath = check_input::test_img("roomimage",$loc);			
				    operations::update_slide_table($filepath1,$filepath2,$filepath3);
				echo "successfully added";
				
				
			}
				}
		
			

			?>
 
	<?php
	include("ainclude/footer.php");
	?>