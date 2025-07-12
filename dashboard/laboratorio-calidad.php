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
						<!-- <div class="page-header-title">
							<h5 class="m-b-10">Laboratorio de Calidad</h5>
						</div> -->
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index">Inicio</a></li>
							<li class="breadcrumb-item">Laboratorio de Calidad</li>
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
							<div class="card p-3 stretch stretch-full">
								<div class="">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <button class="btn btn-outline-secondary" type="button" id="btnBuscar">Buscar</button>
                                                    <input type="text" class="form-control" name="codigo" placeholder="INGRESAR CODIGO" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="table_busqueda mt-4">
                                    <form id="formLaboratorioCalidad">
										<input type="hidden" class="form-control" id="id" name="id">
										<div class="row">
											<div class="col-lg-5">
												<div class="row">
													<div class="col-12"><h5>DATOS ACOPIO</h5></div>
													<div class="col-lg-6">
														<div class="form-floating mb-3">
															<input type="text" class="form-control" id="codigo" readonly>
															<label for=""><b>CODIGO</b></label>
														</div> 
													</div>	
													<div class="col-lg-6">
														<div class="form-floating mb-3">
															<input type="text" class="form-control" id="fecha" readonly>
															<label for=""><b>FECHA</b></label>
														</div> 
													</div>
												</div>
											</div>
											<div class="col-lg-7">
												<div class="row">
													<div class="col-12"><h5>DATOS SOCIO</h5></div>
													<div class="col-lg-3">
														<div class="form-floating mb-3">
															<input type="text" class="form-control" id="dni" readonly>
															<label for=""><b>DNI</b></label>
														</div> 
													</div>
													<div class="col-lg-5">
														<div class="form-floating mb-3">
															<input type="text" class="form-control" id="productor" readonly>
															<label for=""><b>PRODUCTOR</b></label>
														</div> 
													</div>	
													<div class="col-lg-4">
														<div class="form-floating mb-3">
															<input type="text" class="form-control" id="base" readonly>
															<label for=""><b>BASE SECTORIAL</b></label>
														</div> 
													</div> 
												</div>
											</div>																																							
										</div>
										<div class="row">
											<div class="col-6">
												<h5>RENDIMIENTO</h5>
												<div class="table-responsive">
												<table class="table table-bordered table-sm ">
													<thead class="table-light">
													<tr>
														<th></th>
														<th>PESO GRAMOS</th>
														<th>%</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td>RENDIMIENTO FÍSICO</td>
														<td id="rend_fisico_gramos"></td>
														<td id="rend_fisico_porc"></td>
													</tr>
													<tr>
														<td>SEGUNDA</td>
														<td id="segunda_gramos"></td>
														<td id="segunda_porc"></td>
													</tr>
													<tr>
														<td>DESCARTE</td>
														<td id="descarte_gramos"></td>
														<td id="descarte_porc"></td>
													</tr>
													<tr>
														<td>CÁSCARA</td>
														<td id="cascara_gramos"></td>
														<td id="cascara_porc"></td>
													</tr>
													</tbody>
												</table>
												</div>
											</div>

											<div class="col-6">
												<h5>DATOS</h5>
												<div class="row">
													<div class="col-lg-6">
														<div class="form-floating mb-3">
															<input type="text" class="form-control" id="humedad" readonly>
															<label for=""><b>HÚMEDAD</b></label>
														</div> 
													</div>	
													<div class="col-lg-6">
														<div class="form-floating mb-3">
															<input type="text" class="form-control" id="taza" name="taza" required>
															<label for=""><b>PUNTAJE DE TAZA</b></label>
														</div> 
													</div>	
													<div class="col-lg-12">
														<div class="form-floating">
															<textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
															<label for="descripcion">DESCRIPCIÓN DE PERFIL</label>
														</div>															
													</div>
													<div class="col-lg-12 mt-3">
														<div class="form-floating mb-3">
															<input type="text" class="form-control" name="marca" id="marca" required readonly>
															<label for=""><b>MARCA</b></label>
														</div> 
													</div>	
													<div class="mt-4 d-grid gap-2 col-6 mx-auto">
														<button class="btn btn-secondary" type="button">IMPRIMIR <i class="mx-2 feather-printer"></i></button>
														<button class="btn btn-primary" type="submit">ACTUALIZAR</button>
													</div>												
												</div>												                                                                           
											</div>											
										</div>
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

        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <script src="get/acopioMateriaPrimaId.js"></script>   
		<script src="edit/formLaboratorioCalidad.js"></script> 

		<script>
			$(document).ready(function() {
				$('#btnBuscar').on('click', function() {
					const codigo = $('input[name="codigo"]').val();

					if (!codigo) return;

					$.ajax({
						url: 'buscar_acopio.php',
						type: 'GET',
						data: { codigo },
						dataType: 'json',
						success: function(data) {
							if (data.error) {
								alert(data.error);
								return;
							}

							// Llenar campos...
							$('#id').val(data.id);
							$('#codigo').val(data.codigo);
							$('#fecha').val(data.fecha);
							$('#dni').val(data.dni_socio);
							$('#productor').val(data.productor);
							$('#base').val(data.base_sectorial);
							$('#humedad').val(data.humedad + ' %');
							$('#taza').val(data.taza);
							$('#descripcion').val(data.descripcion);
							$('#marca').val(data.marca);

							// Tabla de rendimiento
							$('#rend_fisico_gramos').text(parseFloat(data.rendimiento_fisico).toFixed(2));
							$('#rend_fisico_porc').text(parseFloat(data.porcentaje_rendimiento).toFixed(2));
							$('#segunda_gramos').text(parseFloat(data.segunda).toFixed(2));
							$('#segunda_porc').text(parseFloat(data.porcentaje_segunda).toFixed(2));
							$('#descarte_gramos').text(parseFloat(data.descarte).toFixed(2));
							$('#descarte_porc').text(parseFloat(data.porcentaje_descarte).toFixed(2));
							$('#cascara_gramos').text(parseFloat(data.cascara).toFixed(2));
							$('#cascara_porc').text(parseFloat(data.porcentaje_cascara).toFixed(2));
						}
					});
				});
			});

		</script>

		<script>
			$(document).ready(function(){
				$('#taza').on('input', function(){
					var puntaje = $(this).val().trim();

					if (puntaje !== '') {
						$.ajax({
							url: 'buscar_marca_puntaje.php',
							type: 'GET',
							data: { puntaje: puntaje },
							dataType: 'json',
							success: function(response) {
								if (response.status === 'success') {
									$('input[name="marca"]').val(response.marca);
								} else {
									$('input[name="marca"]').val('');
								}
							},
							error: function(xhr, status, error) {
								console.error(error);
							}
						});
					} else {
						$('input[name="marca"]').val('');
					}
				});
			});

		</script>
	</body>
</html>
