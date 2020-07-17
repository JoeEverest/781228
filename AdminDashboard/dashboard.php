<?php
include('../config/config.php');
include('../session.php');
include('../handlers/verification_check_handler.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Dashboard
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
	<div class="wrapper ">
		<?php require("sidebar.php"); ?>
		<div class="main-panel">
			<!-- Navbar -->
			<?php require("nav.php"); ?>
			<!-- End Navbar -->
			<div class="content">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-body ">
								<div class="row">
									<div class="col-5 col-md-4">
										<div class="icon-big text-center icon-warning">
											<i class="nc-icon nc-globe text-warning"></i>
										</div>
									</div>
									<div class="col-7 col-md-8">
										<div class="numbers">
											<p class="card-category">Regions</p>
											<p class="card-title">33<p>
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="card-footer ">
								<hr>
								<div class="stats">
									<i class="fa fa-refresh"></i>
									Update Now
								</div>
							</div> -->
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-body ">
								<div class="row">
									<div class="col-5 col-md-4">
										<div class="icon-big text-center icon-warning">
											<i class="nc-icon nc-money-coins text-success"></i>
										</div>
									</div>
									<div class="col-7 col-md-8">
										<div class="numbers">
											<p class="card-category">Districts</p>
											<p class="card-title">1,345<p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-body ">
								<div class="row">
									<div class="col-5 col-md-4">
										<div class="icon-big text-center icon-warning">
											<i class="nc-icon nc-vector text-danger"></i>
										</div>
									</div>
									<div class="col-7 col-md-8">
										<div class="numbers">
											<p class="card-category">Wards</p>
											<p class="card-title">12,345<p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card ">
							<div class="card-header ">
								<h5 class="card-title">Party Name: Candidate Name.</h5>
								<hr>
							</div>
							<div class="card-body ">
								<div class="row">
									<div class="col-5 col-md-4">
									</div>
									<div class="col-7 col-md-8">
										<div class="numbers">
											<p class="card-title">1,234,567<p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card ">
							<div class="card-header ">
								<h5 class="card-title">Party Name: Candidate Name.</h5>
								<hr>
							</div>
							<div class="card-body ">
								<div class="row">
									<div class="col-5 col-md-4">
									</div>
									<div class="col-7 col-md-8">
										<div class="numbers">
											<p class="card-title">1,234,567<p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card ">
							<div class="card-header ">
								<h5 class="card-title">Party Name: Candidate Name.</h5>
								<hr>
							</div>
							<div class="card-body ">
								<div class="row">
									<div class="col-5 col-md-4">
									</div>
									<div class="col-7 col-md-8">
										<div class="numbers">
											<p class="card-title">1,234,567<p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card ">
							<div class="card-header ">
								<h5 class="card-title">Party Name: Candidate Name.</h5>
								<hr>
							</div>
							<div class="card-body ">
								<div class="row">
									<div class="col-5 col-md-4">
									</div>
									<div class="col-7 col-md-8">
										<div class="numbers">
											<p class="card-title">1,234,567<p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php require("footer.php"); ?>