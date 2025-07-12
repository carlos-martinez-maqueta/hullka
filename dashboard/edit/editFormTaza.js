$(document).ready(function () {
    var form = $("#editFormTaza");
  
    form.submit(function (e) {
      e.preventDefault();
  
      var formData5 = new FormData(this);
      $.ajax({
        url: "edit/editFormTaza.php",
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
  
          // Maneja la respuesta del servidor
          if (response.status === "success") {
            // Muestra la alerta de éxito
            Swal.fire({
              icon: "success",
              title: "Editado con éxito.",
              text: response.message,
              confirmButtonText: "OK",
            }).then((result) => {
                window.location.href = "clasificacion-taza";
            });
          } else {
            // Muestra la alerta de error
            Swal.fire({
              icon: "error",
              title: "Error",
              text: response.message,
              confirmButtonText: "OK",
            });
          }
        },
        error: function (xhr, status, error) {
          // Oculta el overlay de carga en caso de error
          $("#loading-overlay").css("display", "none");
          console.error('Estado del error:', status);
          console.error('Mensaje de error:', error);
          console.error('Respuesta del servidor:', xhr.responseText);
          alert('Hubo un problema con la solicitud AJAX.');
        },
      });
    });
  });
  