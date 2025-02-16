<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['detsuid']) == 0) {
	header('location:logout.php');
} else {
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daily Expense Tracker || Add Expense</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	</head>

	<body>
		<?php include_once('includes/header.php'); ?>
		<?php include_once('includes/sidebar.php'); ?>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#"><em class="fa fa-home"></em></a></li>
					<li class="active">Expense</li>
				</ol>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Expense</div>
						<div class="panel-body">
							<p id="responseMsg" style="font-size:16px; color:red" align="center"></p>
							<div class="col-md-12">
								<form id="expenseForm">
									<div class="form-group">
										<label>Date of Expense</label>
										<input class="form-control" type="date" name="dateexpense" required>
									</div>
									<div class="form-group">
										<label>Item</label>
										<input type="text" class="form-control" name="item" required>
									</div>
									<div class="form-group">
										<label>Cost of Item</label>
										<input class="form-control" type="text" name="costitem" required>
									</div>
									<div class="form-group has-success">
										<button type="submit" class="btn btn-primary">Add</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php include_once('includes/footer.php'); ?>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#expenseForm").on("submit", function(e) {
					e.preventDefault();
					$.ajax({
						url: "./process-expense.php",
						type: "POST",
						data: $(this).serialize(),
						dataType: "json",
						success: function(response) {
							if (response.status === "success") {
								$("#responseMsg").css("color", "green").text(response.message);
								$("#expenseForm")[0].reset();
							} else {
								$("#responseMsg").css("color", "red").text(response.message);
							}
						},
						error: function() {
							$("#responseMsg").css("color", "red").text("An error occurred. Please try again.");
						}
					});
				});
			});
		</script>
	</body>

	</html>
<?php } ?>