<?php include('../config/dbconnection.php') ?>
<?php include('../config/session_check.php') ?>
<?php

  $bookings_count = getvalfield($conn, 'reservations', "count(*)", "1");
  $inbox_count = getvalfield($conn, 'inbox', "count(*)", "1");
?>
<?php 
$pagename = "Dashboard";
$page_name = basename($_SERVER['PHP_SELF']); 
?>
<?php include('../includes/header.php') ?>
<?php include('../includes/sidebar.php') ?>
<?php include('../includes/navbar.php') ?>

<div class="container-fluid pt-4 px-4 ">
    <div class="row g-4">
        <h3 class="mb-0 text-center fw-bold text-primary">Details</h3>
        <hr class=" p-1 text-primary">
      
        <div class="col-sm-6 col-xl-6">
            <a href="about.php">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 border border-primary">
                    <i class="fas fa-tools fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Bookings</p>
                        <h6 class="mb-0"><?= $bookings_count ?></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-6">
            <a href="inbox.php">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 border border-primary">
                    <i class="fas fa-inbox fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Inbox</p>
                        <h6 class="mb-0"><?= $inbox_count ?></h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>