<?php
	ob_start();
	include("Include/header.php");
	include ("Model/class_operations_data.php");
?>
<div id="main">
    <div class="container">
        <h1 class="page-header">Gallery</h1>
		<hr/>
		<hr/>
		<!--
		<div>
			<button type="submit" name="all" class="btn btn-primary">All</button>
			<button type="submit" name="rooms" class="btn btn-primary">Rooms</button>
			<button type="submit" name="event" class="btn btn-primary">Event</button>
		</div>
		-->
		<div class="row">
            <div class="col-sm-12"></div>
				<div class="col-sm-2"></div>
				 <a class="btn btn-primary col-sm-2" href="gallery.php" id="">All</a>

				
				<div class="col-sm-1"></div>
				<a class="btn btn-primary col-sm-2" href="rooms_gallery.php" id="">Rooms</a>
				
				<div class="col-sm-1"></div>
				<a class="btn btn-primary col-sm-2" href="event_gallery.php" id="">Events</a>
                <div class="col-sm-2"></div>
        </div>
		<hr/>
		<hr/>
		<div class='row add-margin'>

     <?php
	 
	 
	 try{
		operations::show_image_from_rooms();
	 }
	 catch(Exception $e) {
	  echo 'Message: ' .$e->getMessage();
	}
			
		
	 ?>

	</div>
</div>


<?php
	include("Include/footer.php");
	ob_end_flush();
?>
