
var dataTable;
$(document).ready(function () {
  dataTable = $("#acopio_materia_prima").DataTable({
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

  getPreAcopioMateriaPrima(dataTable);

});

function getPreAcopioMateriaPrima(dataTable) {

  $.ajax({
    url: 'get/getAcopio.php',
    method: 'POST',
    data: {
      action: 'get_acopio_materia_prima_all'
    },
    dataType: 'json',
    success: function (data) {

      // Clear DataTable before adding new rows
      dataTable.clear();
      console.log(data);
      // Iterate over the data and add rows to the table
      $.each(data, function (index, result) {
        console.log(result);

var imprimir = '<button onclick="abrirVentanaTicket(' + result.id + ')" class="btn btn-light p-2" title="Imprimir">' +
  '<i class="feather-printer"></i></button>';

        var editar = '<button type="button" class="btn btn-warning edit p-1" data-bs-toggle="modal" data-bs-target="#editarModal" data-id="' +
                result.id +
                '"><i class="feather-edit"></i></button>';


        // Construct the new row HTML
        var newRow = '<tr>' +
          '<td class="align-middle text-center">' + result.codigo + '</td>' + 
          '<td class="align-middle text-center">' + result.fecha + '</td>' +  
          '<td class="align-middle text-center">' + result.productor + '</td>' + 
          '<td class="align-middle text-center">' + result.dni_socio + '</td>' +
          '<td class="align-middle text-center">' + result.base_sectorial + '</td>' +
          '<td class="align-middle text-center">' + result.cantida_sacos + '</td>' +
          '<td class="align-middle text-center">' + result.kilos_brutos + '</td>' +
          '<td class="align-middle text-center">' + result.tara + '</td>' +
          '<td class="align-middle text-center">' + result.kilos_netos + '</td>' +
          '<td class="align-middle text-center">' + result.qq_netos + '</td>' + 
          '<td class="align-middle text-center">' + 
          '<div class="d-flex justify-content-center align-items-center gap-1">' +  
            // imprimir +   
            // editar +        
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
    url: "get/getPersonal.php",
    method: "POST",
    data: {
      action: "get_personal_id",
      resultId: resultId,
    },
    dataType: "json",
    success: function (data) {

      console.log(data);
      // Asignar datos a los campos del formulario
      $("#editarModal .modal-body #id").val(data.cita_id);
    },
  });
});
