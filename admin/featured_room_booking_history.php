
     <?php
		ob_start();
    error_reporting(0);
		include("ainclude/header.php");
	 
	 ?>

	<html>
	<h1>Featured Room Booking History</h1><hr>
	<table class="table table-striped table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Room</th>
                  <th>Check In</th>
                  <th>Check Out</th>
                  <th>Name</th>
                  <th>Phone No</th>
                  <th>Code</th>
                  <th>Address</th>
                  <th>Price</th>
                </tr>
              </thead>
              <?php
		          include("../Model/class_operations_data.php");
				  try{
					operations::show_featured_room_booking_history();
				  }
				  catch(Exception $e) {
					  echo 'Message: ' .$e->getMessage();
					}
	           ?>
              <tfoot>
                <tr>
                  <th>Room</th>
                  <th>Check In</th>
                  <th>Check Out</th>
                  <th>Name</th>
                  <th>Phone No</th>
                  <th>Code</th>
                  <th>Address</th>
                  <th>Price</th>
                </tr>
              </tfoot>
              <tbody>
                
              </tbody>
            </table>
	</html>

 
	<?php
	include("ainclude/footer.php");
	ob_end_flush();
	?>