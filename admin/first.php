<?php
   error_reporting(0);
	include("ainclude/header.php");
  include("../Model/class_operations_data.php");
?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="first.php">Dashboard</a>
        </li>
      </ol>
      <hr>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-money"></i>
              </div>
              <div class="mr-5">Total Expense</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"><h1><?php operations::total_expense(); ?></h1></span>
              <span class="float-right">
                <!--<i class="fa fa-angle-right"></i> -->
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Total Rooms Earning</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"><?php operations::room_earning(); ?></span>
              <span class="float-right">
                <!--<i class="fa fa-angle-right"></i> -->
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">Total Event Earning</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"><h1><?php operations::event_earning(); ?></h1></span>
              <span class="float-right">
                <!--<i class="fa fa-angle-right"></i> -->
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">Last Month Earning</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"><h1><?php operations::last_month_rooms_earning(); ?></h1></span>
              <span class="float-right">
                <!--<i class="fa fa-angle-right"></i> -->
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>
</body>  
<?php
	include("ainclude/footer.php");
?>