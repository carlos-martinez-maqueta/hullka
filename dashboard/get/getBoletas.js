
var dataTable;
$(document).ready(function () {
  dataTable = $("#boletas_tabla").DataTable({
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

  getBoletas(dataTable);

});

function getBoletas(dataTable) {

  $.ajax({
    url: 'get/getVentas.php',
    method: 'POST',
    data: {
      action: 'get_boletas'
    },
    dataType: 'json',
    success: function (data) {

      // Clear DataTable before adding new rows
      dataTable.clear();
      console.log(data);
      // Iterate over the data and add rows to the table
      $.each(data, function (index, result) {
        console.log(result);

        var estado = "";
        if (result.estado == "1") {
          estado = "<button type='button' class='btn btn-success'>Aceptado Sunat</button>"
        }else if(result.estado == "2"){
          estado = "<button type='button' class='btn btn-warning'>Anulado en Sunat</button>"
        }else if(result.estado == "3"){
          estado = "<button type='button' class='btn btn-secondary'>Pendiente de envío</button>"
        }

        var imprimir = '<button type="button" class="btn btn-light p-2" title="Imprimir"' +
                      result.id +
                      '"><i class="feather-printer"></i></button>';
        var descargar_xml = '<button type="button" class="btn btn-light p-2" title="Descargar XML"' +
                      result.id +
                      '"><i class="feather-file-text"></i></button>';
        var descargar_cdr = '<button type="button" class="btn btn-light p-2" title="Descargar CDR"' +
                      result.id +
                      '"><i class="feather-file"></i></button>';
        var anular_boleta = '<button type="button" class="btn btn-light p-2" title="Anular Boleta"' +
                      result.id +
                      '"><i class="feather-slash"></i></button>';
        var enviar_correo = '<button type="button" class="btn btn-light p-2" title="Enviar por Correo"' +
                      result.id +
                      '"><i class="feather-mail"></i></button>';                                                                                        
        // Construct the new row HTML
        var newRow = '<tr>' +
          '<td class="align-middle text-center">' + result.codigo_comprobante + '</td>' +   
          '<td class="align-middle text-center">' + result.fecha_emision + '</td>' +
          '<td class="align-middle text-center">' + result.nombre_forma + '</td>' +   
          '<td class="align-middle text-center">' + result.operacion_gravada + '</td>' +   
          '<td class="align-middle text-center">' + result.igv + '</td>' + 
          '<td class="align-middle text-center">' + result.total + '</td>' +  
          '<td class="align-middle text-center">' + estado + '</td>' +       
          '<td class="align-middle text-center">' + 
          '<div class="d-flex justify-content-center align-items-center gap-1">' +
          imprimir + 
          descargar_xml + 
          descargar_cdr + 
          anular_boleta +
          enviar_correo +
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