

     <?php
	 //ini_set( "display_errors", 0); 
	 
		include("ainclude/header.php");
	 
	 ?>
<?php 
	if ( isset($_POST['submit']) ) {
		$id=$_REQUEST['id'];


		$amount=$_REQUEST['amount'];
		$details=$_REQUEST['details'];
	}
	else{
		echo"
		<div class='container'>
		    <div class='card card-register mx-auto mt-5'>
		      <div class='card-header'>Edit Expense Information</div>
		      <div class='card-body'>
		         <form action='#' method='post' enctype='multipart/form-data'>
		          <div class='form-group'>
		            <div class='form-row'>
		              <div class='col-md-8'>
		                <h4>Title *</h4>
		                <input class='form-control' name='title' type='text' aria-describedby='nameHelp' placeholder='Enter Title' required value='<?php echo $row['title'];?>'>
		              </div>
		            </div>
		          </div>
				  <div class='form-group'>
		            <div class='form-row'>
		              <div class='col-md-8'>
		                <h4>Amount *</h4>
		                <input class='form-control' name='amount' type='text' aria-describedby='nameHelp' placeholder='Enter Amount' required value='<?php echo $rows['amount'];?>'>
		              </div>
		            </div>
		          </div>
				  <div class='form-group'>
		            <div class='form-row'>
		              <div class='col-md-8'>
		                <h4>Details Note </h4>
		                <input class='form-control' name='details' type='text' aria-describedby='nameHelp' placeholder='Add A Note' value='<?php echo $rows['details'];?>'>
		              </div>
		            </div>
		          </div>
				  <div class='form-group'>
					<div class='form-row'>
						<div class='col-md-8'>
							<button type='submit' class='btn btn-primary col-md-12' name='submit' >Update Expense</button>
						</div>
					</div>
				  </div>
		        </form>

		      </div>
		    </div>
		  </div>
		  ";

	}

?>

  
			<?php
			require_once("../Model/class_operations_data.php");
			require_once("../Controller/class_input_check.php");
			

			date_default_timezone_set('Asia/Dhaka');
			$date = date('Y-m-d H:i:s');
	
			operations::update_expense_details($id,$_POST['title'],$date,$_POST['amount'],$_POST['details']);
		
			?>
 
	<?php
	include("ainclude/footer.php");
	?>