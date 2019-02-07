<?php
	include ("Include/header.php");
	
?>

<div id="main">
    <div class="container">
        <h1 class="page-header">Available Rooms</h1>
		<hr/>
		<hr/>
		<div class='row add-margin'>

     <?php
	 include ("Model/class_operations_data.php");
		operations::show_rooms();
	 ?>





	</div>
</div>





<br/>
<br/>
<br/>

<?php
	include ("Include/footer.php");
?>