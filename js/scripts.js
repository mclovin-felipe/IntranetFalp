$(document).ready(function () {
	$("#table_id").DataTable();
});
 $(document).ready(function(){
      $.ajax({
        method: "GET",

        url: "data.php?fecha1=20210210&fecha2=20211212",
      }).done(function( data ) {
                  var result= $.parseJSON(data);
                  let tabla = $('#table_id').DataTable();
                  tabla.clear();
                 $.each( result, function( key, value ) {
                        tabla.row.add([
                                value['log_origen'], value['fecha'], value['metodo'], value['enlace'], value['estado'], value['tiempo_respuesta'], value['IP_cliente'], value['largo_peticion']
                         ]).draw();
              });
          });
        });
