<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Hullka</title>
    <link rel="shortcut icon" type="image/x-icon" href="dashboard/assets/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css"> 
    <!-- Font Awesome CDN A-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
<body>
    <main class="all_view">
        <section class="section_all_view">
            <div class="container-fluid">
                <div class="row h-100">
                    <div class="col-lg-6 laterales">
                        <div class="contenedor_img">
                            <img src="assets/imgs/banner_hullka_login.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 laterales">
                        <div class="contenedor_form">
                            <h1><img src="assets/imgs/logo-new.png" alt=""></h1>
                            <!-- <div class=""> 
                                <p>SISTEMA INTEGRADO</p>
                            </div> -->
                            <p>Bienvenidos a Hullka COffe</p>
                            <p class="p_login_css">Este sistema ha sido diseñado para ayudarte a gestionar cada aspecto de nuestra operación de forma eficiente, desde el control de asistencia hasta la gestión de recursos y reportes diarios.</p>
                            <span>LOGIN</span>
                            <form id="registerForm" class="mt-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Correo</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com" required>
                                </div>  
                                <div class="mb-3 position-relative">
                                    <label for="contrasena" class="form-label">Contraseña</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="*********" required>
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="fas fa-eye" id="iconoOjo"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-7 no_acout">
                                        <p>olvidaste tu Contraseña? <a href="">Ingresa Aquí</a></p>
                                    </div>              
                                    <div class="col-lg-5 text-end">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                                            <label class="form-check-label" for="checkDefault">
                                                Recordar
                                            </label>
                                        </div>
                                    </div>                      
                                </div>
                                
                                <div class="btn_form">
                                     <button class="btn btn-dark w-100">Ingresar</button>
                                </div>
                            </form>                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const correoInput = document.getElementById("correo");
            const contrasenaInput = document.getElementById("contrasena");
            const recordarCheckbox = document.getElementById("checkDefault");
            const form = document.getElementById("registerForm");

            // Verificar si hay datos guardados
            if (localStorage.getItem("recordar") === "true") {
                correoInput.value = localStorage.getItem("correo") || "";
                contrasenaInput.value = localStorage.getItem("contrasena") || "";
                recordarCheckbox.checked = true;
            }

            // Guardar o eliminar datos al enviar el formulario
            form.addEventListener("submit", function () {
                if (recordarCheckbox.checked) {
                    localStorage.setItem("correo", correoInput.value);
                    localStorage.setItem("contrasena", contrasenaInput.value);
                    localStorage.setItem("recordar", "true");
                } else {
                    localStorage.removeItem("correo");
                    localStorage.removeItem("contrasena");
                    localStorage.setItem("recordar", "false");
                }
            });
        });
    </script>


    <script>
    $(document).ready(function() {
        $('#registerForm').submit(function(e) {
            e.preventDefault(); // Evitar que el formulario se envíe de forma convencional
            
            // Obtener los valores de los campos
            var correo = $('#correo').val();
            var contrasena = $('#contrasena').val();


            // Verificar que los campos no estén vacíos
            if (correo == "" || contrasena == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Campos vacíos',
                    text: 'Por favor, ingresa tu correo y contraseña.',
                });
                return;
            }

            // Enviar la petición AJAX
            $.ajax({
                url: 'login-ingreso.php', // Archivo PHP que procesa el login
                type: 'POST',
                data: {
                    correo: correo,
                    contrasena: contrasena
                },
                success: function(response) {
                    var data = JSON.parse(response);

                    if (data.status === 'verify_code') {
                    Swal.fire({
                        title: 'Código de Seguridad',
                        text: data.message,
                        input: 'text',
                        inputLabel: 'Ingresa tu código de validación',
                        inputPlaceholder: '****',
                        inputAttributes: {
                            maxlength: 4
                        },                        
                        confirmButtonText: 'Verificar',
                        showCancelButton: true,
                        inputValidator: (value) => {
                            if (!value) return 'Debes ingresar el código';
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.post('verificar_codigo.php', {
                                codigo: result.value
                            }, function(res) {
                                let resultado = JSON.parse(res);
                                if (resultado.status === 'success') {
                                    Swal.fire('Éxito', resultado.message, 'success').then(() => {
                                        window.location.href = 'dashboard';
                                    });
                                } else {
                                    Swal.fire('Error', resultado.message, 'error');
                                }
                            });
                        }
                    });
                } else if (data.status === 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.message
                        });
                    }

                }

            });
        });
    });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const togglePassword = document.getElementById("togglePassword");
            const passwordInput = document.getElementById("contrasena");
            const icon = document.getElementById("iconoOjo");

            togglePassword.addEventListener("click", function () {
                const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
                passwordInput.setAttribute("type", type);

                // Cambiar el ícono del ojito
                icon.classList.toggle("fa-eye");
                icon.classList.toggle("fa-eye-slash");
            });
        });
    </script>

</body>
</html>