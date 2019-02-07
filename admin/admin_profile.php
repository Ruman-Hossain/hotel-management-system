
     <?php
	 
		include("ainclude/header.php");
	 
	 ?>



     
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table of Admin Profile</div>
        <div class="card-body">
          <div class="table-responsive">
             admin profile
			 <?php echo $_SESSION['name'];?>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    
	<?php
	include("ainclude/footer.php");
	?>