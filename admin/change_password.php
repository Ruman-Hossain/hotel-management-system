
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>



         <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Change Password</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">



		     <div class="form-group">
			<div class="form-row">
              
                <label >Enter User ID</label>
                <input class="form-control" name ="id" type="text" placeholder="Enter Old User ID No" required>
           </div>
            <div class="form-row">
              
                <label >Current Password</label>
                <input class="form-control" name ="old_pass" type="password" placeholder="Current Password" required>
           </div>
              <div class="form-row">
                <label >New Password</label>
                <input class="form-control" name="new_pass" type="password" placeholder="New Password" required >
              </div>
			   <div class="form-row">
                <label >Confirm Password</label>
                <input class="form-control" name="fin_pass" type="password" placeholder="Retype Password" required >
              </div>
            </div>
          </div>
		  


		  

          <input type ="submit" name="submit" value ="Submit" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
				<?php
				require_once("../Model/class_operations_data.php");
				
				if(isset($_POST['submit'])){
					
					operations::update_admin_password($_POST['id'],$_POST['old_pass'],$_POST['new_pass'],$_POST['fin_pass']);
				}
				
				
				?>
    
	<?php
	include("ainclude/footer.php");
	?>