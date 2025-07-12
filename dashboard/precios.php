<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="keyword" content="" />
		<meta name="author" content="" />
		<title>Hullka || Dashboard</title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png" />
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/vendors/css/vendors.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/vendors/css/daterangepicker.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/theme.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/all.css" />
	</head>

	<body>
 
		<?php include 'components/nav.php' ?>
 
		<?php include 'components/header.php' ?>
 
		<main class="nxl-container">
			<div class="nxl-content">
				<div class="page-header">
					<div class="page-header-left d-flex align-items-center">
						<div class="page-header-title">
							<h5 class="m-b-10">Precios</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index">Home</a></li>
							<li class="breadcrumb-item">Precios</li>
						</ul>
					</div>
					<div class="page-header-right ms-auto">
						<div class="page-header-right-items">
							<div class="d-flex d-md-none">
								<a href="javascript:void(0)" class="page-header-right-close-toggle">
									<i class="feather-arrow-left me-2"></i>
									<span>Back</span>
								</a>
							</div>
						</div>
						<div class="d-md-none d-flex align-items-center">
							<a href="javascript:void(0)" class="page-header-right-open-toggle">
								<i class="feather-align-right fs-20"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="main-content">
					<div class="row">
 						<div class="col-xxl-12">
							<div class="card stretch stretch-full">
								<div class="card-body">
                                    <form action="">
                                        
                                    </form>
                                </div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</main>
 
 
		<script src="assets/vendors/js/vendors.min.js"></script>
		<!-- vendors.min.js {always must need to be top} -->
		<script src="assets/vendors/js/daterangepicker.min.js"></script>
		<script src="assets/vendors/js/apexcharts.min.js"></script>
		<script src="assets/vendors/js/circle-progress.min.js"></script>
		<!--! END: Vendors JS !-->
		<!--! BEGIN: Apps Init  !-->
		<script src="assets/js/common-init.min.js"></script>
		<script src="assets/js/dashboard-init.min.js"></script>
		<!--! END: Apps Init !-->
		<!--! BEGIN: Theme Customizer  !-->
		<script src="assets/js/theme-customizer-init.min.js"></script>
		<!--! END: Theme Customizer !-->
		<script src="assets/js/calendar.js"></script>
	</body>
</html>
