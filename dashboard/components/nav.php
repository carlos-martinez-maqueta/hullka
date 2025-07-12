
<?php
    session_start();
    include 'class/global.php';
    include 'config/conexion.php';
// Validar que el usuario esté logueado
if (!isset($_SESSION['user_id'])) {
    header("Location: ../"); // O envía a login si no hay sesión
    exit;
}

    $id_user = $_SESSION['user_id'];
    $id_datos_valores = 1;

    $userObj = Globales::getUser($id_user);


    $datosValores = Globales::getDatosValores($id_datos_valores);
    $base_sectorial_select = Globales::getBaseSectorial();
    $tipo_sello_select = Globales::getTipoSello();
    $estatusadd = Globales::getEstatus();
    $tipo_ruc = Globales::getTipoRuc();
?>
<style>
    .nxl-navigation .logo{
        width: 200px;
    }
</style>
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="../assets/imgs/logo-new.png" alt="" class="logo logo-lg" />
                <img src="assets/images/logo-abbr.png" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>NAVEGACIÓN</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="index" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/dashboard.png" alt=""></span>
                        <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <!-- <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="analytics.html">Análisis</a></li>
                    </ul> -->
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/datos.png" alt=""></span>
                        <span class="nxl-mtext">Datos</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="campana">Campaña</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="materia-prima">Materia Prima</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="humedad">Húmedad</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="clasificacion-taza">Clasificación Taza</a></li>
                        <!-- <li class="nxl-item"><a class="nxl-link" href="campaña">Materia Prima</a></li> -->
                         <li class="nxl-item"><a class="nxl-link" href="materiales">Materiales</a></li>
                        <!--<li class="nxl-item"><a class="nxl-link" href="campaña">Sub-Producto</a></li> -->
                        <!-- <li class="nxl-item"><a class="nxl-link" href="campaña">Café Tostado Molido</a></li> -->
                        <!-- <li class="nxl-item"><a class="nxl-link" href="campaña">Tipos de Documento</a></li> -->
                        <li class="nxl-item"><a class="nxl-link" href="unidades-de-medida">Unidades de Medida</a></li>
                        <!-- <li class="nxl-item"><a class="nxl-link" href="campaña">Tipos de Existencia</a></li> -->
                        <!-- <li class="nxl-item"><a class="nxl-link" href="campaña">Series Alamacén</a></li> -->
                        <li class="nxl-item"><a class="nxl-link" href="datos-valores">Datos Valores</a></li>
                    </ul>
                </li>                            
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/socios.png" alt=""></span>
                        <span class="nxl-mtext">Socios</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="registro-socios">Socios</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="terceros">No Socios</a></li>
                        <!-- <li class="nxl-item"><a class="nxl-link" href="reportes">Reportes Socio</a></li> -->
                        
                        <li class="nxl-item"><a class="nxl-link" href="base-sectorial">Base Sectorial</a></li>                         
                    </ul>
                    <ul class="nxl-submenu">
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Reportes Certificaciones</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="certificaciones-sellos">Certificaciones / Sellos</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="reportes-lpa">Reportes LPA</a></li>
                            </ul>
                        </li>
                    </ul>                     
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/acopio.png" alt=""></span>
                        <span class="nxl-mtext">Acopio</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Acopio Materia Prima</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="pre-acopio-materia-prima">Pre-Ticket Acopio Materia Prima Socios</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="acopio-materia-prima">Ticket Acopio Materia Prima Socios</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Comprobante Acopio Materia Prima Socios</a></li>

                                <li class="nxl-item"><a class="nxl-link" href="">Ticket Acopio Materia Prima No Socios</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Comprobante Acopio Materia Prima No Socios</a></li>                                
                            </ul>
                        </li>
                    </ul>    
                    <ul class="nxl-submenu">
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Acopio Sub-Productos</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="">Acopio Sub-Productos Socios</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Acopio Sub-Productos No Socios</a></li>
                            </ul>
                        </li>
                    </ul> 
                    <ul class="nxl-submenu">
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Reportes Stock</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Materia Prima, Sub-Productos, Café Tostado Molido</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Sub-Productos No Socios</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Sellos Materia Prima</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Sub-Productos, Nivel por Calidad</a></li>
                            </ul>
                        </li>
                    </ul>   
                    <ul class="nxl-submenu">
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Reportes Acopio General</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Materia Prima, Sub-Productos, Miel</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Sub-Productos No Socios</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Sellos Materia Prima</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Sub-Productos, Nivel por Calidad</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Materia Prima, Sub-Productos, Miel</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Sub-Productos No Socios</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Stock Sellos Materia Prima</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Acopio General Sub-Productos por Calidad</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Acopio Comprobantes Materia Prima Sello Socios</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="">Acopio Tickets Materia Prima Sello Socios</a></li>                                                                
                            </ul>
                        </li>
                    </ul>                                                                          
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="reports-timesheets.html">Reportes Acopio Socios / No socios</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="laboratorio-calidad">Laboratorio de Calidad</a></li>
                    </ul>
                </li>   
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/inventario.png" alt=""></span>
                        <span class="nxl-mtext">Inventario</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="almacenes">Almacenes</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-leads.html">Conceptos y Certificaciones Planillas</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-project.html">Configuración Stock Inicial Almacén</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-timesheets.html">Movimientos Materia Prima</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-timesheets.html">Movimientos Materiales</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-timesheets.html">Movimientos Sub-Productos</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-timesheets.html">Movimientos Miel</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-timesheets.html">Operaciones Inventario</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-timesheets.html">Guías de Remisión</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-timesheets.html">Reportes Inventario</a></li>
                    </ul>
                </li>                                
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/comercial.png" alt=""></span>
                        <span class="nxl-mtext">Comercial</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="proposal.html">-</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="proposal-view.html">-</a></li>
                    </ul>
                </li>                
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/beneficios-economicos.png" alt=""></span>
                        <span class="nxl-mtext">Beneficios económicos</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="proposal.html">-</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="proposal-view.html">-</a></li>
                    </ul>
                </li>                
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/indicadores.png" alt=""></span>
                        <span class="nxl-mtext">Indicadores</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="proposal.html">-</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="proposal-view.html">-</a></li>
                    </ul>
                </li>
                <!-- <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-alert-circle"></i></span>
                        <span class="nxl-mtext">Leads</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="leads.html">Leads</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="leads-view.html">Leads View</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="leads-create.html">Leads Create</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-briefcase"></i></span>
                        <span class="nxl-mtext">Projects</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="projects.html">Projects</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="projects-view.html">Projects View</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="projects-create.html">Projects Create</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layout"></i></span>
                        <span class="nxl-mtext">Widgets</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="widgets-lists.html">Lists</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="widgets-tables.html">Tables</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="widgets-charts.html">Charts</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="widgets-statistics.html">Statistics</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="widgets-miscellaneous.html">Miscellaneous</a></li>
                    </ul>
                </li> -->
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/configuracion.png" alt=""></span>
                        <span class="nxl-mtext">Configuración</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="settings-general.html">Sucursales</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="settings-general.html">Usuarios</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="settings-general.html">Configuración Impresoras</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="settings-general.html">Configuración Campaña</a></li>
                        
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/contabilidad.png" alt=""></span>
                        <span class="nxl-mtext">Contabilidad</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item">
                            <a href="comprobantes-electronicos" class="nxl-link">
                                <span class="nxl-mtext">Comprob. Elect.</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                        </li>                        
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Reportes</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <!-- <li class="nxl-item"><a class="nxl-link" href="registro-ventas">Registro de Ventas</a></li> -->
                                <li class="nxl-item"><a class="nxl-link" href="kardex-totalizado">Kardex Totalizado</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="kardex-producto">Kardex x Producto</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="ventas-categoria">Ventas x Categoría</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="ventas-productos">Ventas x Producto</a></li>
                            </ul>
                        </li>
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Puntos de Venta</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="emitir-boleta">Emitir Boleta</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="emitir-factura">Emitir Factura</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="notas-de-venta">Nota de Venta</a></li>
                            </ul>
                        </li>   
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Administración</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="empresa">Empresa</a></li>
                            </ul>
                        </li>                                              
                    </ul>
                </li>                
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/autenticacion.png" alt=""></span>
                        <span class="nxl-mtext">Autenticación</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Login</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="token">Token</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><img src="assets/iconos/soporte.png" alt=""></span>
                        <span class="nxl-mtext">Soporte</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="https://wrapcoders.tawk.help">WhatsApp</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="help-knowledgebase.html">Correo</a></li>
                    </ul>
                </li>
            </ul>
            <div class="card text-center">
                <div class="card-body">
                    <i class="feather-sunrise fs-4 text-dark"></i>
                    <h6 class="mt-4 text-dark fw-bolder">Sistema Integrado Hullka</h6>
                    <!-- <p class="fs-11 my-3 text-dark">Duralux es un CRM listo para producción que se puede empezar a poner en funcionamiento fácilmente.</p> -->
                    <a href="logout" class="btn btn-hullka text-dark w-100"><img src="assets/iconos/logout.png" alt="">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
</nav>