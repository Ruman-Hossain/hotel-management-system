<?php
session_start();
	include ("Include/header.php");
	
	//include("test.php");
	//include("ins.php");
	
	
?>


<!-- Our Services -->
<div class="container-fluid" id="services-div">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h2 class="align-center">Our Services</h2>
        </div>
		<?php 
			include ("Model/class_operations_data.php");
			operations::show_services();
		?>
    </div>
</div>

<?php
	include("Include/footer.php");
?>

