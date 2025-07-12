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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
	</head>

	<body>
 
		<?php include 'components/nav.php' ?>
 
		<?php include 'components/header.php' ?>
 
		<main class="nxl-container">
			<div class="nxl-content">
				<div class="page-header">
					<div class="page-header-left d-flex align-items-center">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="./">Home</a></li>
							<li class="breadcrumb-item">Reporte Kardex</li>
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
                                    <h5 class="py-3">Reporte Kardex</h5>
                                    <div class="table-responsive table-light shadow small-table p-3">
                                        <table class="table table-sm p-lg-4" id="kardex">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">CÓDIGO PRODUCTO</th>
                                                    <th class="text-center" scope="col">Producto</th>
                                                    <th class="text-center" scope="col">Entradas</th>
                                                    <th class="text-center" scope="col">Salidas</th>
                                                    <th class="text-center" scope="col">Existencias</th>
                                                    <th class="text-center" scope="col">Costo Existencia</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>				
			</div>

        <?php include 'components/footer.php' ?>            

		</main>

        <?php include 'components/utilidadesjs.php' ?> 
 
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <script src="get/getkardex.js"></script>         
	</body>
</html>
