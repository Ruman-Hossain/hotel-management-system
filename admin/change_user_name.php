
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>



     
         <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Change User Name</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">



		     <div class="form-group">
			 <div class="form-row">
              
                <label >Enter ID No</label>
                <input class="form-control" name ="userid" type="text" placeholder="User ID" required>
           </div>
            <div class="form-row">
              
                <label >Current User name</label>
                <input class="form-control" name ="olduser" type="text" placeholder="User Name" required>
           </div>
              <div class="form-row">
                <label >New User Name</label>
                <input class="form-control" name="newuser" type="text" placeholder="New User Name" required >
              </div>
			   <div class="form-row">
                <label >Confirm User Name</label>
                <input class="form-control" name="confirmuser" type="text" placeholder="Retype User Name" required >
              </div>
            </div>
          </div>
		  


		  

          <input type ="submit" name ="submit" value ="Submit" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
			<?php
            include("../Model/class_operations_data.php");
			if(isset($_POST['submit'])){
				
				
				operations::update_admin_name($_POST['userid'],$_POST['olduser'],$_POST['newuser'],$_POST['confirmuser']);
				
			}
			
			?>
    
	<?php
	include("ainclude/footer.php");
	?>