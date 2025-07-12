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
        <style>
            .nav_comprobantes .nav-link{
                color: #595757;
            }
            .nav_comprobantes .nav-link.active{
                background-color: #c42c4b;
    color: #ffffff !important;
            }
        </style>
	</head>

	<body>
 
		<?php include 'components/nav.php' ?>
 
		<?php include 'components/header.php' ?>
 
		<main class="nxl-container">
			<div class="nxl-content">
				<div class="page-header">
					<div class="page-header-left d-flex align-items-center">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="./">Inicio</a></li>
							<li class="breadcrumb-item">Comprobantes Electrónicos</li>
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
                                    <h5 class="py-3">Comprobantes Electrónicos</h5>
                                    <div>
                                        <nav class="nav_comprobantes">
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#boletas" type="button" role="tab" aria-controls="boletas" aria-selected="true">
                                                    Boletas
                                                </button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#facturas" type="button" role="tab" aria-controls="facturas" aria-selected="false">
                                                    Facturas
                                                </button>
                                                <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Notas de Crédito</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Notas de Débito</button> -->
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#notas-deventas" type="button" role="tab" aria-controls="notas-deventas" aria-selected="false">
                                                    Notas de Venta
                                                </button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="boletas" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                                <div>
                                                    <?php include 'tablas/boletas.php' ?>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="facturas" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                                <div>
                                                    <?php include 'tablas/facturas.php' ?>
                                                </div>                                                
                                            </div>
                                            <div class="tab-pane fade" id="notas-deventas" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                                <div>
                                                    <?php include 'tablas/notas-de-venta.php' ?>
                                                </div>                                                
                                            </div>
                                        </div>                                        
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
        <script src="get/getBoletas.js"></script>   
        <script src="get/getFacturas.js"></script>
        <script src="get/getNotasdeVentas.js"></script>
	</body>
</html>
