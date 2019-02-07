
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>

	<html>
	<h1>Expense List</h1><hr>
	<table class="table table-striped table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Date</th>
                  <th>Title</th>
                  <th>Amount</th>
                  <th>Details</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
		          include("../Model/class_operations_data.php");
		          operations::show_expense_list();
	           ?>
              <tfoot>
                <tr>
                  <th>SN</th>
                  <th>Date</th>
                  <th>Title</th>
                  <th>Amount</th>
                  <th>Details</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                
              </tbody>
            </table>
	</html>

 
<?php
	include("ainclude/footer.php");
?>

