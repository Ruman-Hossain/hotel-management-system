
     <?php
	 ob_start();
   error_reporting(0);
		include("ainclude/header.php");
	 
	 ?>

	<html>
	<h1>Booked Events</h1><hr>
	<table class="table table-striped table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Room</th>
                  <th>Check In</th>
                  <th>Check Out</th>
                  <th>Name</th>
                  <th>Phone No</th>
                  <th>Code</th>
                  <th width=15%>Address</th>
				  <th>Booking</th>
                  <th width=20%>Action</th>
                </tr>
              </thead>
              <?php
		          include("../Model/class_operations_data.php");
		          operations::show_event_booking();
	           ?>
              <tfoot>
                <tr>
                  <th>Room</th>
                  <th>Check In</th>
                  <th>Check Out</th>
                  <th>Name</th>
                  <th>Phone No</th>
                  <th>Code</th>
                  <th width=15%>Address</th>
				  <th>Booking</th>
                  <th width=20%>Action</th>
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