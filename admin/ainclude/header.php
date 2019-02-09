
<?php
session_start();

?>

<?php
if(!$_SESSION['id']){
	
	header("Location:/hotel/admin/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hotel Management Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="booking.php">Administrator</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="first.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExampleBooking" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Booking</span>
          </a>
		  <ul class="sidenav-second-level collapse" id="collapseExampleBooking">
            <li>
              <a href="booking.php">Room Booking</a>
            </li>
            <li>
              <a href="featured_booking.php">Featured Room Booking</a>
            </li>
			       <li>
              <a href="event_booking.php">Event Booking</a>
            </li>
		   </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Add Records</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="add_room.php">Add Room</a>
            </li>
			     <li>
              <a href="add_featured_room.php">Add Featured Room</a>
            </li>
            <li>
              <a href="event.php">Add event</a>
            </li>
            <li>
              <a href="add_services.php">Add Service</a>
            </li>
            <li>
              <a href="about.php">Add about</a>
            </li>
			       <li>
              <a href="slider.php">Add Slider</a>
            </li>
			     
          </ul>
        </li>
		    
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUpdate" data-parent="#exampleAccordion">
            <i class="fa fa-refresh"></i>
            <span class="nav-link-text">Update Record</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseUpdate">
            <li>
               <a href="update_room.php">Update Room</a>
            </li>
            <li>
               <a href="update_featured_room.php">Update Featured Room</a>
            </li>
          <li>
            <a href="update_event.php">Update Event</a>
          </li>
          <li>
            <a href="update_services.php">Update Service</a>
          </li>
            <li>
              <a href="upslider.php">Update Slider</a>
            </li>
           </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseDelete" data-parent="#exampleAccordion">
            <i class="fa fa-trash"></i>
            <span class="nav-link-text">Delete Record</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseDelete">
            <li>
               <a href="delete_rooms.php">Delete Room</a>
            </li>
            <li>
               <a href="delete_featured_room.php">Delete Featured Room</a>
            </li>
          <li>
            <a href="delete_events.php">Delete Event</a>
          </li>
          <li>
               <a href="delete_service.php">Delete Service</a>
            </li>
           </ul>
        </li>

		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExpense" data-parent="#exampleAccordion">
            <i class="fa fa-money"></i>
            <span class="nav-link-text">Expense</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExpense">
            <li>
              <a href="add_head.php">Add Head</a>
            </li>
            <li>
              <a href="expense.php">My Expense</a>
            </li>
            <li>
              <a href="expense_list.php">Expense List</a>
            </li>
          </ul>
        </li>
		

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseHistory" data-parent="#exampleAccordion">
            <i class="fa fa-history"></i>
            <span class="nav-link-text">History</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseHistory">
            <li>
              <a href="room_booking_history.php">Room Booking History</a>
            </li>
            <li>
              <a href="featured_room_booking_history.php">Featured Room Booking History</a>
            </li>
            <li>
              <a href="event_booking_history.php">Event Booking History</a>
            </li>
          </ul>
        </li>
		
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Administrator</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
		  
		              <li>
              <a href="change_user_name.php">Change Username</a>
            </li>
            <li>
              <a href="change_password.php">Change Password</a>
            </li>
			<!--
			<li>
              <a href="change_phone.php">Change Phone</a>
            </li>
			-->
			<li>
              <a href="show_users.php">Show User List</a>
            </li>
			

          </ul>
        </li>
<!--
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="admin_profile.php">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
-->
		
		
		
		
		
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

<!--
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
-->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">