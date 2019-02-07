
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>

	<html>
	<h1>Booked Rooms</h1><hr>
	<table class="table table-striped table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>UserName</th>
                  <th>Password</th>
                </tr>
              </thead>
              <?php
		          include("../Model/class_operations_data.php");
		          operations::show_users();
	           ?>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>UserName</th>
                  <th>Password</th>
                </tr>
              </tfoot>
              <tbody>
                
              </tbody>
            </table>
	</html>

 
	<?php
	include("ainclude/footer.php");
	?>