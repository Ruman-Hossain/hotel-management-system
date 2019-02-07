
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>



     
          <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Change Phone</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">



		     <div class="form-group">
            <div class="form-row">
              
                <label >Current Contact</label>
                <input class="form-control" name ="old_phn" type="phone" placeholder="Current Contact No" required>
           </div>
              <div class="form-row">
                <label >New Contact</label>
                <input class="form-control" name="new_phn" type="phone" placeholder="New Contact No" required >
              </div>
			   <div class="form-row">
                <label >Confirm Contact</label>
                <input class="form-control" name="final_phn" type="phone" placeholder="Retype Contact" required >
              </div>
            </div>
          </div>
		  


		  

          <input type ="submit" name ="submit" value ="Register" class="btn btn-primary btn-block">
        </form>

      </div>
    </div>
				<?php
				require_once("../Controller/class_data_validation.php");
				
				if(isset($_POST['submit'])){
					
					data_validation::phone_add($_POST['old_phn'],$_POST['new_phn'],$_POST['final_phn']);
				}
				
				
				?>
	
	
    
	<?php
	include("ainclude/footer.php");
	?>