
var dataTable;
$(document).ready(function () {
  dataTable = $("#base_sectorial").DataTable({
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

  getBaseSectorial(dataTable);

});

function getBaseSectorial(dataTable) {
  $.ajax({
    url: 'get/baseSectorial.php',
    method: 'POST',
    data: {
      action: 'get_base_sectorial',
    },
    dataType: 'json',
    success: function (data) {
      dataTable.clear();

      console.log(data);
      $.each(data, function (index, row) {
        var acciones = '<button class="btn btn-sm btn-primary edit" data-bs-toggle="modal" data-bs-target="#modalEdit" data-id="' + row.id + '">Editar</button>';

        var newRow = '<tr>' +
          '<td class="align-middle text-center">' + row.id + '</td>' +
          '<td class="align-middle text-center">' + row.nombre_base + '</td>' +
          '<td class="align-middle text-center">' + row.fecha + '</td>' +
          '<td class="align-middle text-center">' + 
          '<td class="align-middle text-center">' + 
          '<div class="d-flex justify-content-center align-items-center gap-1">' +  
            acciones +             
          '</div>' +
          '</td>' +  
          '</tr>';

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
console.log(resultId);
  $.ajax({
    url: "get/baseSectorial.php",
    method: "POST",
    data: {
      action: "get_base_sectorial_id",
      resultId: resultId,
    },
    dataType: "json",
    success: function (data) {

      console.log(data);
      // Asignar datos a los campos del formulario
      $("#modalEdit .modal-body #id").val(data.id);

      $("#modalEdit .modal-body #nombre").val(data.nombre_base);


    },
  });
});