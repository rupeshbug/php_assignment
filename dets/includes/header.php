<?php
// Start session only if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

error_reporting(0);
include('includes/dbconnection.php');
?>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background: #30a5ff">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="dashboard.php"><span style="color: #f5f5f5"> <i class="fa fa-bar-chart" style="margin-right: 6px; font-size: 25px;"></i>TrackMyExpense</span></a>

        </div>

    </div>
</nav>