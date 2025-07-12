
var dataTable;
$(document).ready(function () {
  dataTable = $("#reporte_lpa").DataTable({
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

  getReportLpa(dataTable);

});

function getReportLpa(dataTable) {

  $.ajax({
    url: 'get/getReporteLpa.php',
    method: 'POST',
    data: {
      action: 'get_reporte_lpa'
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
          '<td class="align-middle text-center">' + result.dni + '</td>' +
          '<td class="align-middle text-center">' + result.productor + '</td>' +   
          '<td class="align-middle text-center">' + result.base_sectorial + '</td>' +   
          '<td class="align-middle text-center">' + result.estimado + '</td>' + 
          '<td class="align-middle text-center">' + result.tipo + '</td>' + 
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
  $("#id_reporte_lpa").val(resultId); // guardar id en hidden

  // Limpiar tabla interna antes de volver a llenar
  $("#detalleReporteTable tbody").empty();

  $.ajax({
    url: "get/getReporteLpa.php",
    method: "POST",
    data: { action: "get_reporte_lpa_detalles", resultId: resultId },
    dataType: "json",
    success: function (data) {
      data.forEach(function (detalle) {
        addDetalleRow(detalle);
      });
    },
    error: function (xhr, status, error) {
      console.error(error);
    }
  });
});

function addDetalleRow(data = {}) {
  var newRow = `
    <tr>
      <td><input type="number" name="total_finca[]" value="${data.total_finca || ''}" class="form-control"></td>
      <td><input type="number" name="cultivo_produccion[]" value="${data.cultivo_produccion || ''}" class="form-control"></td>
      <td><input type="number" name="cultivo_crecimiento[]" value="${data.cultivo_crecimiento || ''}" class="form-control"></td>
      <td><input type="number" name="estimado_produccion[]" value="${data.estimado_produccion || ''}" class="form-control"></td>
      <td><input type="number" name="cafe_pergamino[]" value="${data.cafe_pergamino || ''}" class="form-control"></td>
      <td><input type="number" name="sub_producto[]" value="${data.sub_producto || ''}" class="form-control"></td>
      <td><button type="button" class="btn btn-danger btn-sm removeRowBtn">Eliminar</button></td>
    </tr>`;
  $("#detalleReporteTable tbody").append(newRow);
}

$("#addRowBtn").click(function () {
  addDetalleRow(); // añade fila vacía
});

$(document).on("click", ".removeRowBtn", function () {
  $(this).closest("tr").remove();
});



$("#saveChangesBtn").click(function () {
  var formData = $("#editReportForm").serialize(); // recoge todo

  $.ajax({
    url: "add/editReporteLpaDetalles.php",
    method: "POST",
    data: formData,
    success: function (response) {
      console.log(response);
      Swal.fire("Guardado", "Los datos se actualizaron correctamente", "success")
        .then(() => location.reload());
    },
    error: function (xhr, status, error) {
      console.error(error);
      Swal.fire("Error", "Ocurrió un error al guardar", "error");
    }
  });
});
