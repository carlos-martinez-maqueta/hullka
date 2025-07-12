
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
						<!-- <div class="page-header-title">
							<h5 class="m-b-10">Acopio Materia Prima</h5>
						</div> -->
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index">Inicio</a></li>
							<li class="breadcrumb-item">Pre-Ticket Acopio Materia Prima</li>
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
                                        <h4 class="m-0">Pre-Ticket Acopio Materia Prima</h4>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button type="button" class="btn btn_add_edit btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddAcopio">
                                            Agregar Pre-Ticket
                                        </button>                                        
                                    </div>
                                </div>

                                <hr>

                                <div class="table_acopio_materia_prima">
                                    <div class="">
                                        <h5 class="pb-3">Listado Acopios</h5>
                                        <div class="table-responsive table-light small-table">
                                            <table class="table table-sm" id="acopio_materia_prima">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" scope="col">CODIGO</th>
														<th class="text-center" scope="col">FECHA</th>
														<th class="text-center" scope="col">PRODUCTOR</th>
                                                        <th class="text-center" scope="col">DNI</th>
                                                        <th class="text-center" scope="col">BASE SECTORIAL</th>
                                                        <th class="text-center" scope="col">CANTIDAD SACOS</th>
														<th class="text-center" scope="col">KILOS BRUTOS</th>
														<th class="text-center" scope="col">TARA</th>
														<th class="text-center" scope="col">KILOS NETOS</th>
														<th class="text-center" scope="col">QQ NETOS</th>
														<!-- <th class="text-center" scope="col">ACCIONES</th> -->
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

		<div id="ticketContent" style="width: 250px; font-family: monospace; padding: 10px; display: none;">
			<div style="text-align: center;">
				<img src="assets/favicon.png" alt="Logo" class="img-fluid" style="max-width: 100px;">
				<h3 style="margin: 5px 0;">ACOPIO MATERIA PRIMA</h3>
				<hr>
			</div>
			<div id="ticketDetails" style="font-size: 12px;">
				<!-- Aquí se inserta el contenido dinámicamente -->
			</div>
			<hr>
			<p style="text-align: center; margin-top: 10px;">Gracias por su entrega</p>
		</div>
		<style>
			#ticketContent {
				position: fixed;
				top: -9999px;        /* fuera de la vista */
				left: -9999px;
				width: 250px;
				font-family: monospace;
				padding: 10px;
				background: #fff;
				color: #000;
			}
		</style>
		<!-- Modal -->
		<div class="modal fade" id="modalAddAcopio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Pre-Ticket</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="formAcopioSocio">
					<div class="row">
						<div class="col-lg-4">
							<div class="mb-3">
								<label for="" class="form-label">DNI SOCIO</label>
								<input type="text" class="form-control" id="dni_socio" name="dni_socio" placeholder="Ingresa el DNI del Socio">
							</div>							
						</div>
						<div class="col-lg-4">
							<div class="mb-3">
								<label for="" class="form-label">PRODUCTOR</label>
								<input type="text" class="form-control" id="nombre_productor" name="productor" readonly>
							</div>							
						</div>						
						<div class="col-lg-4">
							<div class="mb-3">
								<label for="" class="form-label">BASE SECTORIAL</label>
								<input type="text" class="form-control" id="base_sectorial" name="base_sectorial" readonly>
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="mb-3">
								<label for="" class="form-label">TIPO</label>
								<select class="form-select" aria-label="Default select example" name="tipo">
									<option selected>Selecciona una opción</option>
									<option value="ORG">Organico</option>
									<option value="CON">Convencional</option>
									<option value="TRA">Transición</option>
								</select>								
							</div>
						</div>			
					</div>
					<div class="row">
						<div class="col-lg-3">
							<div class="mb-3">
								<label for="" class="form-label">CANTIDAD SACOS</label>
								<input type="text" class="form-control" id="cantidad_sacos" name="cantida_sacos" placeholder="Cantidad de Sacos">
							</div>
						</div>
						<div class="col-lg-3">
							<div class="mb-3">
								<label for="" class="form-label">KILOS BRUTOS</label>
								<input type="text" class="form-control" id="kilos_brutos" name="kilos_brutos" placeholder="Kilos Brutos">
							</div>
						</div>		
						<div class="col-lg-2">
							<div class="mb-3">
								<label for="" class="form-label">TARA</label>
								<input type="text" class="form-control" id="tara" name="tara" readonly>
							</div>
						</div>	
						<div class="col-lg-2">
							<div class="mb-3">
								<label for="" class="form-label">KILOS NETOS</label>
								<input type="text" class="form-control" id="kilos_netos" name="kilos_netos" placeholder="Kilos Netos">
							</div>
						</div>
						<div class="col-lg-2">
							<div class="mb-3">
								<label for="" class="form-label">QQ NETOS</label>
								<input type="text" class="form-control" id="qq_netos" name="qq_netos" readonly>
							</div>
						</div>												
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary" style="width: fit-content; margin: auto;">Guardar</button>
					</div>
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
         <script src="get/preAcopioMateriaPrima.js"></script>  
		 <script>
			function abrirVentanaTicket(id) {
			window.open(
				'ticket_acopio.php?id=' + id,
				'Ticket',
				'width=400,height=600,left=300,top=100,resizable=no,scrollbars=no'
			);
			}

		 </script>
		<!-- html2canvas 1.4.1 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

		<!-- jsPDF 2.5.1 UMD  (SOLO UNA VEZ) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

		<!-- OBTENER DATOS DE SOCIO -->
<script>
$(document).ready(function() {
  $('#dni_socio').on('blur', function() {
    var dni = $(this).val().trim();

    if (dni !== "") {
      $.ajax({
        url: 'get/getDniSocio.php',
        type: 'POST',
        data: { dni: dni },
        dataType: 'json',
        success: function(response) {
          if (response.error) {
            alert(response.error);
            $('#nombre_productor').val('');
            $('#base_sectorial').val('');
            $('select[name="tipo"]').val(''); // limpiar select
          } else {
            if (response.socio) {
              $('#nombre_productor').val(response.socio.nombres + ' ' + response.socio.apellidos);
              $('#base_sectorial').val(response.socio.base_sectorial);
            } else {
              $('#nombre_productor').val('');
              $('#base_sectorial').val('');
            }

            // Si hay reportes, usar el primer reporte para llenar el select
            if (response.reportes && response.reportes.length > 0) {
              var tipo = response.reportes[0].tipo;
              if (tipo) {
                $('select[name="tipo"]').val(tipo);
              }
            } else {
              $('select[name="tipo"]').val(''); // dejar vacío si no hay
            }
          }
        },
        error: function(xhr, status, error) {
          console.error(error);
          alert("Error al consultar socio.");
        }
      });
    }
  });
});
</script>

		<!-- CALCULAR VALORES DE RENDIMIENTO -->
		<script>
		document.addEventListener("DOMContentLoaded", function () {
			const inputSacos = document.getElementById("cantidad_sacos");
			const inputKilosBrutos = document.getElementById("kilos_brutos");
			const inputTara = document.getElementById("tara");
			const inputKilosNetos = document.getElementById("kilos_netos");
			const qqNetos = document.getElementById("qq_netos");

			const taraPorSaco = <?= $datosValores->tara ?>;
			const valorQQ = <?= $datosValores->qq_netos ?>; // Por ejemplo, 46

			function calcularTara() {
				const cantidad = parseFloat(inputSacos.value);
				if (!isNaN(cantidad)) {
					const tara = (cantidad * taraPorSaco).toFixed(2);
					inputTara.value = tara;
					calcularKilosNetos(); // recalcula automáticamente los kilos netos
				} else {
					inputTara.value = "";
					inputKilosNetos.value = "";
					qqNetos.value = "";
				}
			}

			function calcularKilosNetos() {
				const kilosBrutos = parseFloat(inputKilosBrutos.value);
				const tara = parseFloat(inputTara.value);

				if (!isNaN(kilosBrutos) && !isNaN(tara)) {
					const kilosNetos = kilosBrutos - tara;
					inputKilosNetos.value = kilosNetos.toFixed(2);
					calcularQQNetos(kilosNetos);
				} else {
					inputKilosNetos.value = "";
					qqNetos.value = "";
				}
			}

			function calcularQQNetos(kilosNetos) {
				if (!isNaN(kilosNetos) && valorQQ > 0) {
					const qq = kilosNetos / valorQQ;
					qqNetos.value = qq.toFixed(2);
				} else {
					qqNetos.value = "";
				}
			}

			inputSacos.addEventListener("input", calcularTara);
			inputKilosBrutos.addEventListener("input", calcularKilosNetos);
		});
		</script>
		<!-- CALCULAR VALORES DE TABLA -->
		<script>
			const muestraGeneral = <?=$datosValores->muestraGeneral?>;

			const inputFisico = document.getElementById('fisico');
			const inputSegunda = document.getElementById('segunda');
			const inputDescarte = document.getElementById('descarte');

			const porcentajeFisico = document.getElementById('porcentaje_fisico');
			const porcentajeSegunda = document.getElementById('porcentaje_segunda');
			const porcentajeDescarte = document.getElementById('porcentaje_descarte');

			const inputCascara = document.getElementById('cascara');
			const porcentajeCascara = document.getElementById('porcentaje_cascara');

			function formatearDecimal(valor) {
				return parseFloat(valor.toFixed(3)).toString();
			}

			function actualizarTabla() {
				const fisico = parseFloat(inputFisico.value) || 0;
				const segunda = parseFloat(inputSegunda.value) || 0;
				const descarte = parseFloat(inputDescarte.value) || 0;
				const cascara = muestraGeneral - fisico - segunda - descarte;

				// Actualiza pesos
				inputCascara.value = cascara.toFixed(2);

				// Actualiza porcentajes
				porcentajeFisico.value = formatearDecimal((fisico * 100) / muestraGeneral);
				porcentajeSegunda.value = formatearDecimal((segunda * 100) / muestraGeneral);
				porcentajeDescarte.value = formatearDecimal((descarte * 100) / muestraGeneral);
				porcentajeCascara.value = formatearDecimal((cascara * 100) / muestraGeneral);

			}

			inputFisico.addEventListener('input', actualizarTabla);
			inputSegunda.addEventListener('input', actualizarTabla);
			inputDescarte.addEventListener('input', actualizarTabla);

			// Inicializa
			actualizarTabla();
		</script>


		<script src="add/AcopioMateriaPrima.js"></script>
	</body>
</html>
