$(document).ready(function () {
    var form = $("#formLaboratorioCalidad");

    form.submit(function (e) {
        e.preventDefault();

        var formData5 = new FormData(this);
        $.ajax({
            url: "edit/formLaboratorioCalidad.php",
            method: "POST",
            data: formData5,
            processData: false,
            contentType: false,
            dataType: "json",
            beforeSend: function () {
                $("#loading-overlay").css("display", "flex");
            },
            success: function (response) {
                $("#loading-overlay").css("display", "none");

                if (response.status === "success") {
                    Swal.fire({
                        icon: "success",
                        title: "Editado con éxito.",
                        text: response.message,
                        confirmButtonText: "OK",
                    }).then(() => {
                        window.location.href = "laboratorio-calidad";
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: response.message,
                        confirmButtonText: "OK",
                    });
                }
            },
            error: function (xhr, status, error) {
                $("#loading-overlay").css("display", "none");
                console.error('Estado del error:', status);
                console.error('Mensaje de error:', error);
                console.error('Respuesta del servidor:', xhr.responseText);
                alert('Hubo un problema con la solicitud AJAX.');
            },
        });
    });
});
