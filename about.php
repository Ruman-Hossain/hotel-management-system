<?php
	include("Include/header.php");
?>
<div  class="background-white">
    <div class="container">
        <div class="page-header modal-header">
            <h1>About Hotel ROYAL</h1>
        </div>
		<hr/>
        <div>
            
			<?php
				include("Model/class_operations_data.php");
				operations::show_about();
			
			?>
			
			

        </div>


    </div>
</div>


<br/>
<br/>
<?php
	include("Include/footer.php");
?>