
var dataTable;
$(document).ready(function () {
  dataTable = $("#socios_terceros").DataTable({
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

  getSociosTerceros(dataTable);

});
function getSociosTerceros(dataTable) {

  $.ajax({
    url: 'get/getSocios.php',
    method: 'POST',
    data: {
      action: 'get_terceros_socios'
    },
    dataType: 'json',
    success: function (data) {

      // Clear DataTable before adding new rows
      dataTable.clear();
      console.log(data);
      // Iterate over the data and add rows to the table
      $.each(data, function (index, result) {
        console.log(result);

        var editar = '<button type="button" class="btn btn-warning edit p-1" data-bs-toggle="modal" data-bs-target="#editarModal" data-id="' +
                result.id +
                '"><i class="feather-edit"></i></button>';

        // Construct the new row HTML
        var newRow = '<tr>' +
          '<td class="align-middle text-center">' + result.id + '</td>' +   
          '<td class="align-middle text-center">' + result.nombres + '</td>' +
          '<td class="align-middle text-center">' + result.apellidos + '</td>' +   
          '<td class="align-middle text-center">' + result.dni + '</td>' +   
          '<td class="align-middle text-center">' + result.ruc + '</td>' +
          '<td class="align-middle text-center">' + result.razon_social + '</td>' +
          '<td class="align-middle text-center">' + result.direccion_fiscal + '</td>' +
          '<td class="align-middle text-center">' + result.fecha_creacion + '</td>' +
          '<td class="align-middle text-center">' + 
          '<div class="d-flex justify-content-center align-items-center gap-1">' +  
            editar +             
          '</div>' +
          '</td>' +                 
          '</tr>';

        // Add the new row to the DataTable
        dataTable.row.add($(newRow)).draw(false);
      });
    },
    error: function (xhr, status, error) {
      console.error('Error fetching data:', status, error);
    }
  });
}

$(document).on("click", ".edit", function () {
  var resultId = $(this).data("id");

  $.ajax({
    url: "get/getSocios.php",
    method: "POST",
    data: {
      action: "get_terceros_socios_id",
      resultId: resultId,
    },
    dataType: "json",
    success: function (data) {

      console.log(data);
      // Asignar datos a los campos del formulario
      $("#editarModal .modal-body #id").val(data.id);

      $("#editarModal .modal-body #nombres").val(data.nombres);
      $("#editarModal .modal-body #apellidos").val(data.apellidos);
      $("#editarModal .modal-body #dni").val(data.dni);
      $("#editarModal .modal-body #direccion").val(data.direccion_dni);
      $("#editarModal .modal-body #ruc").val(data.ruc);
      $("#editarModal .modal-body #razon_social").val(data.razon_social);
      $("#editarModal .modal-body #direccion_fiscal").val(data.direccion_fiscal);
    },
  });
});
