
var dataTable;
$(document).ready(function () {
  dataTable = $("#datos_actualizables").DataTable({
    ordering: false,
    language: {
      sProcessing: "Procesando...",
      sLengthMenu: "Mostrar _MENU_ registros",
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo: " _START_ al _END_ de un total de _TOTAL_ registros",
      sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
      sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
      sInfoPostFix: "",
      sSearch: "Buscar:",
      sUrl: "",
      sInfoThousands: ",",
      sLoadingRecords: "Cargando...",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      oAria: {
        sSortAscending: ": Activar para ordenar la columna de manera ascendente",
        sSortDescending: ": Activar para ordenar la columna de manera descendente",
      },
      buttons: {
        copy: "Copiar",
        colvis: "Visibilidad",
      },
    }
  });

  getDatosActualizables(dataTable);

});

function getDatosActualizables(dataTable) {
  var resultId = 1;

  $.ajax({
    url: 'get/datosActualizables.php',
    method: 'POST',
    data: {
      action: 'get_datos_actualizables',
      resultId: resultId,
    },
    dataType: 'json',
    success: function (data) {
      dataTable.clear();

      // Construir fila única
      var acciones = '<button class="btn btn-sm btn-primary edit" data-bs-toggle="modal" data-bs-target="#modalEdit" data-id="' + data.id + '">Editar</button>';

      var newRow = '<tr>' +
        '<td class="align-middle text-center">' + data.tara + '</td>' +
        '<td class="align-middle text-center">' + data.qq_netos + '</td>' +
        '<td class="align-middle text-center">' + data.muestraGeneral + '</td>' +
        '<td class="align-middle text-center">' + acciones + '</td>' +
        '</tr>';

      dataTable.row.add($(newRow)).draw(false);
    },
    error: function (xhr, status, error) {
      console.error('Error fetching data:', status, error);
    }
  });
}

$(document).on("click", ".edit", function () {
  var resultId = $(this).data("id");

  $.ajax({
    url: "get/datosActualizables.php",
    method: "POST",
    data: {
      action: "get_datos_actualizables_id",
      resultId: resultId,
    },
    dataType: "json",
    success: function (data) {

      console.log(data);
      // Asignar datos a los campos del formulario
      $("#modalEdit #id").val(data.id);
      $("#modalEdit #tara").val(data.tara);
      $("#modalEdit #qq_netos").val(data.qq_netos);
      $("#modalEdit #muestra_general").val(data.muestraGeneral);


    },
  });
});