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
							<li class="breadcrumb-item">Token Usuarios</li>
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
						<div class="col-12">
							
						</div>
						<div class="col-xxl-12">
							<div class="card stretch stretch-full">
								<div class="card-body">
                                    <h5 class="py-3">Actualizar Token - Usuarios</h5>
                                    <div class="table-responsive table-light shadow small-table p-3">
                                        <table class="table table-sm p-lg-4" id="personal">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">ID</th>
                                                    <th class="text-center" scope="col">NOMBRES</th>
                                                    <th class="text-center" scope="col">APELLIDOS</th>
                                                    <th class="text-center" scope="col">CORREO</th>
                                                    <th class="text-center" scope="col">TOKEN INGRESO</th>
                                                    <th class="text-center" scope="col">ESTADO</th>
                                                    <th class="text-center" scope="col">ROL</th>
                                                    <th class="text-center" scope="col">ACCIONES</th>
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

        <!-- Modal -->
        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <script src="get/personal.js"></script>         
	</body>
</html>
