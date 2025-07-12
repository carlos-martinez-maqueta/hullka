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
							<li class="breadcrumb-item"><a href="index">Inicio</a></li>
							<li class="breadcrumb-item">Registro Terceros</li>
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
							<div class="card p-3">
                                <div class="row align-items-center p-2">
                                    <div class="col-6">
                                        <h3 class="m-0">Socios Terceros</h3>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button type="button" class="btn btn_add_edit btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddSocio">
                                            Agregar Terceros
                                        </button>                                        
                                    </div>
                                </div>

                                <hr>

                                <div class="table_socios">
                                    <div class="">
                                        <h5 class="pb-3">Listado Terceros</h5>
                                        <div class="table-responsive table-light small-table">
                                            <table class="table table-sm" id="socios_terceros">
                                                <thead>
                                                        <th class="text-center" scope="col">ID</th>
                                                        <th class="text-center" scope="col">NOMBRES</th>
                                                        <th class="text-center" scope="col">APELLIDOS</th>
                                                        <th class="text-center" scope="col">DNI</th>
                                                        <th class="text-center" scope="col">RUC</th>
                                                        <th class="text-center" scope="col">RAZÓN SOCIAL</th>
                                                        <th class="text-center" scope="col">DIRECCIÓN FISCAL</th>
                                                        <th class="text-center" scope="col">FECHA REGISTRO</th>
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
			</div>
		</main>
 
		<div class="theme-customizer">
			<div class="customizer-handle">
				<a href="javascript:void(0);" class="cutomizer-open-trigger bg-primary">
					<i class="feather-settings"></i>
				</a>
			</div>
			<div class="customizer-sidebar-wrapper">
				<div class="customizer-sidebar-header px-4 ht-80 border-bottom d-flex align-items-center justify-content-between">
					<h5 class="mb-0">Theme Settings</h5>
					<a href="javascript:void(0);" class="cutomizer-close-trigger d-flex">
						<i class="feather-x"></i>
					</a>
				</div>
				<div class="customizer-sidebar-body position-relative p-4" data-scrollbar-target="#psScrollbarInit">
					<!--! BEGIN: [Navigation] !-->
					<div class="position-relative px-3 pb-3 pt-4 mt-3 mb-5 border border-gray-2 theme-options-set">
						<label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Navigation</label>
						<div class="row g-2 theme-options-items app-navigation" id="appNavigationList">
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-navigation-light" name="app-navigation" value="1" data-app-navigation="app-navigation-light" checked />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-navigation-light">Light</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-navigation-dark" name="app-navigation" value="2" data-app-navigation="app-navigation-dark" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-navigation-dark">Dark</label>
							</div>
						</div>
					</div>
					<!--! END: [Navigation] !-->
					<!--! BEGIN: [Header] !-->
					<div class="position-relative px-3 pb-3 pt-4 mt-3 mb-5 border border-gray-2 theme-options-set mt-5">
						<label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Header</label>
						<div class="row g-2 theme-options-items app-header" id="appHeaderList">
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-header-light" name="app-header" value="1" data-app-header="app-header-light" checked />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-header-light">Light</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-header-dark" name="app-header" value="2" data-app-header="app-header-dark" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-header-dark">Dark</label>
							</div>
						</div>
					</div>
					<!--! END: [Header] !-->
					<!--! BEGIN: [Skins] !-->
					<div class="position-relative px-3 pb-3 pt-4 mt-3 mb-5 border border-gray-2 theme-options-set">
						<label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Skins</label>
						<div class="row g-2 theme-options-items app-skin" id="appSkinList">
							<div class="col-6 text-center position-relative single-option light-button active">
								<input type="radio" class="btn-check" id="app-skin-light" name="app-skin" value="1" data-app-skin="app-skin-light" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-skin-light">Light</label>
							</div>
							<div class="col-6 text-center position-relative single-option dark-button">
								<input type="radio" class="btn-check" id="app-skin-dark" name="app-skin" value="2" data-app-skin="app-skin-dark" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-skin-dark">Dark</label>
							</div>
						</div>
					</div>
					<!--! END: [Skins] !-->
					<!--! BEGIN: [Typography] !-->
					<div class="position-relative px-3 pb-3 pt-4 mt-3 mb-0 border border-gray-2 theme-options-set">
						<label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Typography</label>
						<div class="row g-2 theme-options-items font-family" id="fontFamilyList">
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-lato" name="font-family" value="1" data-font-family="app-font-family-lato" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-lato">Lato</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-rubik" name="font-family" value="2" data-font-family="app-font-family-rubik" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-rubik">Rubik</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-inter" name="font-family" value="3" data-font-family="app-font-family-inter" checked />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-inter">Inter</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-cinzel" name="font-family" value="4" data-font-family="app-font-family-cinzel" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-cinzel">Cinzel</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-nunito" name="font-family" value="6" data-font-family="app-font-family-nunito" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-nunito">Nunito</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-roboto" name="font-family" value="7" data-font-family="app-font-family-roboto" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-roboto">Roboto</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-ubuntu" name="font-family" value="8" data-font-family="app-font-family-ubuntu" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-ubuntu">Ubuntu</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-poppins" name="font-family" value="9" data-font-family="app-font-family-poppins" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-poppins">Poppins</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-raleway" name="font-family" value="10" data-font-family="app-font-family-raleway" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-raleway">Raleway</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-system-ui" name="font-family" value="11" data-font-family="app-font-family-system-ui" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-system-ui">System UI</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-noto-sans" name="font-family" value="12" data-font-family="app-font-family-noto-sans" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-noto-sans">Noto Sans</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-fira-sans" name="font-family" value="13" data-font-family="app-font-family-fira-sans" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-fira-sans">Fira Sans</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-work-sans" name="font-family" value="14" data-font-family="app-font-family-work-sans" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-work-sans">Work Sans</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-open-sans" name="font-family" value="15" data-font-family="app-font-family-open-sans" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-open-sans">Open Sans</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-maven-pro" name="font-family" value="16" data-font-family="app-font-family-maven-pro" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-maven-pro">Maven Pro</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-quicksand" name="font-family" value="17" data-font-family="app-font-family-quicksand" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-quicksand">Quicksand</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-montserrat" name="font-family" value="18" data-font-family="app-font-family-montserrat" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-montserrat">Montserrat</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-josefin-sans" name="font-family" value="19" data-font-family="app-font-family-josefin-sans" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-josefin-sans">Josefin Sans</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-ibm-plex-sans" name="font-family" value="20" data-font-family="app-font-family-ibm-plex-sans" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-ibm-plex-sans">IBM Plex Sans</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-source-sans-pro" name="font-family" value="5" data-font-family="app-font-family-source-sans-pro" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-source-sans-pro">Source Sans Pro</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-montserrat-alt" name="font-family" value="21" data-font-family="app-font-family-montserrat-alt" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-montserrat-alt">Montserrat Alt</label>
							</div>
							<div class="col-6 text-center single-option">
								<input type="radio" class="btn-check" id="app-font-family-roboto-slab" name="font-family" value="22" data-font-family="app-font-family-roboto-slab" />
								<label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-roboto-slab">Roboto Slab</label>
							</div>
						</div>
					</div>
					<!--! END: [Typography] !-->
				</div>
				<div class="customizer-sidebar-footer px-4 ht-60 border-top d-flex align-items-center gap-2">
					<div class="flex-fill w-50">
						<a href="javascript:void(0);" class="btn btn-danger" data-style="reset-all-common-style">Reset</a>
					</div>
					<div class="flex-fill w-50">
						<a href="javascript:void(0);" class="btn btn-primary">Download</a>
					</div>
				</div>
			</div>
		</div>

        <!-- Modal -->
        <div class="modal fade" id="modalAddSocio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
						<form id="addSocioForm">
							<div class="row">
								<div class="mb-3 col-3">
									<label for="tipo_documento" class="form-label">Tipo de Documento</label>
									<select class="form-control" id="tipo_documento" name="tipo_documento" required>
										<option value="">Selecciona...</option>
										<option value="DNI">DNI</option>
										<option value="RUC">RUC</option>
									</select>
								</div>
								<div class="mb-3 col-3">
									<label class="form-label">Nombres</label>
									<input type="text" class="form-control" name="nombres" placeholder="Ingresa Nombres" required>
								</div>
								<div class="mb-3 col-3">
									<label class="form-label">Apellidos</label>
									<input type="text" class="form-control" name="apellidos" placeholder="Ingresa Apellidos" required>
								</div>
							</div>

							<!-- Inputs que aparecen sólo si eligen DNI -->
							<div id="dni_fields" style="display: none;">
								<div class="row">
									<div class="mb-3 col-3">
										<label class="form-label">DNI</label>
										<input type="text" class="form-control" name="dni" placeholder="Ingresa DNI">
									</div>
								</div>
							</div>

							<!-- Inputs que aparecen sólo si eligen RUC -->
							<div id="ruc_fields" style="display: none;">
								<div class="row">
									<div class="mb-3 col-3">
										<label class="form-label">RUC</label>
										<input type="text" class="form-control" name="ruc" placeholder="Ingresa RUC">
									</div>
									<div class="mb-3 col-4">
										<label class="form-label">Razón Social</label>
										<input type="text" class="form-control" name="razon_social" placeholder="Ingresa Razón Social">
									</div>
									<div class="mb-3 col-4">
										<label class="form-label">Dirección Fiscal</label>
										<input type="text" class="form-control" name="direccion_fiscal" placeholder="Ingresa Dirección Fiscal">
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary">GUARDAR</button>
						</form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
		<!-- Modal -->
		<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form id="editFormTerceros">
						<div class="row">
							<input type="hidden" class="form-control" id="id" name="id">
							<div class="mb-3 col-6">
								<label for="" class="form-label">Nombres</label>
								<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingresa Nombres" required>
							</div>
							<div class="mb-3 col-6">
								<label for="" class="form-label">Apellidos</label>
								<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa Apellidos" required>
							</div> 
							<div class="mb-3 col-6">
								<label for="" class="form-label">DNI</label>
								<input type="text" class="form-control" id="dni" name="dni" placeholder="Ingresa DNI" required>
							</div>  
							<div class="mb-3 col-6">
								<label for="" class="form-label">Dirección</label>
								<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa tu Dirección" required>
							</div> 								                              
						</div>
						<div class="row">
							<div class="mb-3 col-6">
								<label for="" class="form-label">Ruc</label>
								<input type="text" class="form-control" id="ruc" name="ruc" placeholder="Ingresa RUC" required>	
							</div> 	
							<div class="mb-3 col-6">
								<label for="" class="form-label">Razón Social</label>
								<input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Ingresa Razón Social" required>	
							</div> 
							<div class="mb-3 col-6">
								<label for="" class="form-label">Dirección Fiscal</label>
								<input type="text" class="form-control" id="direccion_fiscal" name="direccion_fiscal" placeholder="Ingresa Dirección Fiscal" required>	
							</div> 																							                                               
						</div>
						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

				</div>
				</div>
			</div>
		</div>
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
        <script src="get/socios_terceros.js"></script>  
        <script src="add/addTerceroSocio.js"></script>  
		<script src="edit/editFormTerceros.js"></script>

		<script>
			$(document).ready(function(){
				$('#tipo_documento').on('change', function(){
					var selected = $(this).val();
					if (selected === 'DNI') {
						$('#dni_fields').show();
						$('#ruc_fields').hide();
						// Marcar campos DNI como required y quitar required a RUC
						$('input[name="ruc"], input[name="razon_social"], input[name="direccion_fiscal"]').removeAttr('required');
					} else if (selected === 'RUC') {
						$('#dni_fields').hide();
						$('#ruc_fields').show();
						// Marcar campos RUC como required y quitar required a DNI
						$('input[name="ruc"], input[name="razon_social"], input[name="direccion_fiscal"]').attr('required', true);
						$('input[name="dni"], input[name="direccion"]').removeAttr('required');
					} else {
						$('#dni_fields').hide();
						$('#ruc_fields').hide();
						// Quitar required a todos
						$('input[name="dni"], input[name="direccion"], input[name="ruc"], input[name="razon_social"], input[name="direccion_fiscal"]').removeAttr('required');
					}
				});
			});

		</script>		
	</body>
</html>
