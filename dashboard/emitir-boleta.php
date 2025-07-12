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
							<li class="breadcrumb-item">Emitir Boleta</li>
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
                                    <h5 class="py-3">Boleta</h5>
                                    
                                    <form action="" class="px-5">
                                        <div class="row ">
                                            <div class="form-check col-lg-6">
                                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1" checked>
                                            <label class="form-check-label" for="radioDefault1">
                                                 <b>Generar Venta y Enviar Comprobante Electrónico (SUNAT)</b>
                                            </label>
                                            </div>
                                            <div class="form-check col-lg-6">
                                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" >
                                            <label class="form-check-label" for="radioDefault2">
                                                <b>Solo Generar Venta</b>
                                            </label>
                                            </div>                                            
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-6">
                                                <div class="card card_hullka position-relative p-3">
                                                    <div class="titulo_entero">
                                                        <h5>COMPROBANTE DE PAGO</h5>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Empresa Emisora</label>
                                                        <select class="form-select" >
                                                        </select> 
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6">
                                                            <label for="" class="form-label">Fecha Emisión</label>
                                                            <input type="date" class="form-control" id="" placeholder="">                                                            
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="" class="form-label">Tipo de Comprobante</label>
                                                            <select class="form-select" >
                                                                <option value="">BOLETA</option>
                                                            </select>                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label for="" class="form-label">Serie</label>
                                                            <select class="form-select" >
                                                                <option value="">B001</option>
                                                            </select>                                                              
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="" class="form-label">Correlativo</label>
                                                            <input type="text" class="form-control" id="" placeholder="" value="16" disabled>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="" class="form-label">Moneda</label>
                                                            <select class="form-select" >
                                                                <option value="">PEN - SOLES</option>
                                                            </select>                                                              
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-lg-6">
                                                <div class="card card_hullka position-relative p-3">
                                                    <div class="titulo_entero">
                                                        <h5>DATOS DEL CLIENTE</h5>
                                                    </div> 
                                                    <div class="row mb-3">
                                                        <div class="col-lg-4">
                                                            <label for="" class="form-label">Tipo de Documento</label>
                                                            <select class="form-select" >
                                                                <option value="">1 - DNI</option>
                                                                <option value="">2 - RUC</option>
                                                            </select>                                                              
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <label for="" class="form-label">Nro Documento</label>
                                                            <div class="input-group mb-3">
                                                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Buscar</button>
                                                            <input type="text" class="form-control" placeholder="Ingrese Nro de documento" aria-describedby="button-addon1">
                                                            </div>                                                          
                                                        </div>
                                                    </div> 
                                                    <div class="row mb-3">
                                                        <div class="col-lg-12">
                                                            <label for="" class="form-label">Nombre del Cliente/ Razón Social</label>
                                                            <input type="text" class="form-control" id="" placeholder="Ingrese Nombre del Cliente o Razón Social">                                                               
                                                        </div>
                                                    </div>                     
                                                    <div class="row ">
                                                        <div class="col-lg-6">
                                                            <label for="" class="form-label">Dirección</label>
                                                            <input type="text" class="form-control" id="" placeholder="Ingrese la dirección">                                                              
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="" class="form-label">Teléfono</label>
                                                            <input type="text" class="form-control" id="" placeholder="Teléfono">                                                              
                                                        </div>
                                                    </div>                             
                                                </div>
                                            </div>  
                                            <div class="col-lg-8">
                                                <div class="card card_hullka position-relative p-3">
                                                    <div class="titulo_entero">
                                                        <h5>LISTADO DE PRODUCTOS</h5>
                                                    </div> 
                                                    <div class="row mb-3">
                                                        <div class="col-lg-12">
                                                            <label for="" class="form-label">Digite el Producto a vender</label>
                                                            <input type="text" class="form-control" id="" placeholder="Ingrese el código de barras o el nombre del producto">                                                               
                                                        </div>
                                                    </div>     
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="" class="form-label">Tipo Operación</label>
                                                            <select class="form-select" >
                                                                <option value="">0101 - Venta interna</option>
                                                            </select>                                                             
                                                        </div>
                                                        <div class="col">
                                                            <label for="" class="form-label">Forma Pago</label>
                                                            <select class="form-select" >
                                                                <option value="">Contado</option>
                                                            </select>                                                               
                                                        </div>
                                                        <div class="col">
                                                            <label for="" class="form-label">Recibido</label>
                                                            <input type="text" class="form-control" id="" placeholder="Dinero recibido">                                                              
                                                        </div>
                                                        <div class="col">
                                                            <label for="" class="form-label">Vuelto</label>
                                                            <input type="text" class="form-control" id="" placeholder="Vuelto">                                                              
                                                        </div>
                                                        <div class="col">
                                                            <label for="" class="form-label">Medio Pago</label>
                                                            <select class="form-select" >
                                                                <option value="">EFECTIVO</option>
                                                                <option value="">YAPE</option>
                                                                <option value="">PLIN</option>
                                                                <option value="">TRANSFERENCIA</option>
                                                            </select>                                                             
                                                        </div>
                                                    </div>   
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive table-light shadow small-table p-3">
                                                                <table class="table table-sm" id="buscarproducto">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center" scope="col">ITEM</th>
                                                                            <th class="text-center" scope="col">CÓDIGO</th>
                                                                            <th class="text-center" scope="col">DESCRIPCIÓN</th>
                                                                            <th class="text-center" scope="col">ID TIPO IGV</th>
                                                                            <th class="text-center" scope="col">TIPO IGV</th>
                                                                            <th class="text-center" scope="col">UND/MEDIDA</th>
                                                                            <th class="text-center" scope="col">VALOR</th>
                                                                            <th class="text-center" scope="col">CANTIDAD</th>
                                                                            <th class="text-center" scope="col">SUBTOTAL</th>
                                                                            <th class="text-center" scope="col">IGV</th>
                                                                            <th class="text-center" scope="col">IMPORTE</th>
                                                                            <th class="text-center" scope="col"></th>
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
                                            <div class="col-lg-4">
                                                <div class="card card_hullka position-relative p-3">
                                                    <div class="titulo_entero">
                                                        <h5>DETALLES DE VENTA</h5>
                                                    </div> 

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>OP. GRAVADAS</h5>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <h5>S/ 0.00</h5>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>OP. INAFECTAS</h5>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <h5>S/ 0.00</h5>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>OP. EXONERADAS</h5>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <h5>S/ 0.00</h5>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>SUBTOTAL</h5>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <h5>S/ 0.00</h5>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>IGV</h5>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <h5>S/ 0.00</h5>
                                                        </div>                                                        
                                                    </div> 
                                                    <hr>   
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h4>TOTAL</h4>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <h5>S/ 0.00</h5>
                                                        </div>                                                        
                                                    </div>  
                                                    <br>
                                                    <br>
                                                    <div class="row">
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-danger">Cancelar</button>
                                                            <button type="button" class="btn btn-outline-success">Vender</button>                                                        </div>
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

        <?php include 'components/footer.php' ?>            

		</main>

        <?php include 'components/utilidadesjs.php' ?> 
 
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <script src="get/buscarproducto.js"></script>         
	</body>
</html>
