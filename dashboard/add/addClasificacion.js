$(document).ready(function () {
    var form = $("#addClasificacion");

    form.submit(function (e) {
        e.preventDefault();

        var formData5 = new FormData(this);
        $.ajax({
            url: "add/addClasificacion.php",
            method: "POST",
            data: formData5,
            processData: false,
            contentType: false,
            dataType: "json", // Especifica que esperas una respuesta JSON
            beforeSend: function () {
                // Muestra el overlay de carga antes de enviar la solicitud
                $("#loading-overlay").css("display", "flex");
            },
            success: function (response) {
                // Oculta el overlay de carga después de procesar la respuesta
                $("#loading-overlay").css("display", "none");

                try {
                    console.log('Respuesta del servidor:', response);
                    if (response && response.status === "success") {
                        Swal.fire({
                            icon: "success",
                            title: "Creado con éxito.",
                            text: response.message,
                            confirmButtonText: "OK",
                        }).then(() => {
                            window.location.href = 'clasificacion-taza';
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: response.message || "Error desconocido",
                            confirmButtonText: "OK",
                        });
                    }
                } catch (error) {
                    console.error("Error al procesar la respuesta:", error);
                    Swal.fire({
                        icon: "error",
                        title: "Error de procesamiento",
                        text: "Hubo un error al procesar la respuesta del servidor.",
                        confirmButtonText: "OK",
                    });
                }
            },            
            
            error: function (xhr, status, error) {
                // Oculta el overlay de carga en caso de error
                $("#loading-overlay").css("display", "none");
                console.error(xhr.responseText);
            },
        });
    });
 

});
 