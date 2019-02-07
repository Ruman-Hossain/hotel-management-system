<?php
	include("Include/header.php");
?>
<div  class="background-white">
    <div class="container ">
        <h1 class="page-header">Events</h1>
		<hr/>
		<hr/>
        <div class="row add-margin">
           
		<?php
			include("Model/class_operations_data.php");
			operations::show_events();
		?>
            
        </div>

      


    </div>
</div>

<?php
	include("Include/footer.php");
	?>