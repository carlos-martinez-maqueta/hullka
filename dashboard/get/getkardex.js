
var dataTable;
$(document).ready(function () {
  dataTable = $("#kardex").DataTable({
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

  getKardex(dataTable);

});

function getKardex(dataTable) {

  $.ajax({
    url: 'get/getProductos.php',
    method: 'POST',
    data: {
      action: 'get_productos'
    },
    dataType: 'json',
    success: function (data) {

      // Clear DataTable before adding new rows
      dataTable.clear();
      console.log(data);
      // Iterate over the data and add rows to the table
      $.each(data, function (index, result) {
        console.log(result);

 

        // Construct the new row HTML
        var newRow = '<tr>' +
          '<td class="align-middle text-center">' + result.codigo_producto + '</td>' +   
          '<td class="align-middle text-center">' + result.nombre + '</td>' +
          '<td class="align-middle text-center">' + result.apellidos + '</td>' +   
          '<td class="align-middle text-center">' + result.correo + '</td>' +   
          '<td class="align-middle text-center">' + result.codigo_validacion + '</td>' + 
          '<td class="align-middle text-center">' + result.estado + '</td>' +                 
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