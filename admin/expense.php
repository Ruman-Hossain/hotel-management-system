
     <?php
	 //ini_set( "display_errors", 0); 
	 
		include("ainclude/header.php");
	 
	 ?>


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">New Expense Information</div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-8">
                <span><h4>Head Title *</h4></span>
					<?php
						include("../Model/class_operations_data.php");
						include("../Controller/class_input_check.php");
						operations::select_head_title();
					?>
              </div>
            </div>
          </div>
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-8">
                <h4>Amount *</h4>
                <input class="form-control" name="amount" type="text" aria-describedby="nameHelp" placeholder="Enter Amount" required>
              </div>
            </div>
          </div>
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-8">
                <h4>Details Note </h4>
                <input class="form-control" name="details" type="text" aria-describedby="nameHelp" placeholder="Add A Note">
              </div>
            </div>
          </div>
		  <div class="form-group">
			<div class="form-row">
				<div class="col-md-8">
					<button type="submit" class="btn btn-primary col-md-12" name="submit" >Add Expense</button>
				</div>
			</div>
		  </div>
        </form>

      </div>
    </div>
  </div>
			<?php
			require_once("../Model/class_operations_data.php");
			require_once("../Controller/class_input_check.php");
			

			date_default_timezone_set('Asia/Dhaka');
			$date = date('Y-m-d H:i:s');
			
			if ( isset($_POST['submit']) ) {
				$id = trim($_POST['id']);
				$amount = trim($_POST['amount']);
				$details = trim($_POST['details']);
				
				operations::insert_expense_details($_POST['id'],$date,$_POST['amount'],$_POST['details']);
			
			}
		
			?>
 
	<?php
	include("ainclude/footer.php");
	?>