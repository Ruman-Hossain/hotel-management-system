<?php
session_start();
	include ("Include/header.php");
	
	include("test.php");
	//include("ins.php");
	
	
?>



<!-- Image Slider -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <?php
		include ("Model/class_operations_data.php");
		operations::show_slider();
		?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Featured Rooms -->
<div id="main">
    <div class="container">
        <h1 class="page-header">Featured Rooms</h1>
		<hr/>
		<div class='row add-margin'>

     <?php
	 //include ("Model/class_operations_data.php");
		operations::show_featured_rooms();
	 ?>

	</div>
</div>

<!-- Our Services -->
<div class="container-fluid" id="services-div">
    <div class="row">
	<hr/>
        <div class="col-xs-12 col-md-12">
            <h1 class="align-center">Our Services</h1>
        </div>
	<hr/>
		<?php 
			//include ("Model/class_operations_data.php");
			operations::show_services();
		?>
    </div>
</div>
<?php
	include("Include/footer.php");
?>
