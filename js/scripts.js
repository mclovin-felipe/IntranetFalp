//$(document).ready(function(){
//     $.ajax({
//       method: "GET",
//
//      url: "data.php?fecha1=20210210&fecha2=20211212",
//  }).done(function( data ) {
//            var result= $.parseJSON(data);
//          let tabla = $('#table_id').DataTable();
//        tabla.clear();
//     $.each( result, function( key, value ) {
//          tabla.row.add([
//                value['log_origen'], value['fecha'], value['metodo'], value['enlace'], value['estado'], value['tiempo_respuesta'], value['IP_cliente'], value['largo_peticion']
//       ]).draw();
// });
// });
//});/
$("#update").click(function () {
	let fecha1 = $("#fecha1").val().replace(/-/g, "");
	let fecha2 = $("#fecha2").val().replace(/-/g, "");
	let hora1 = $("#hora1").val();
	let hora2 = $("#hora2").val();

	$.ajax({
		method: "GET",
		url: `data.php?fecha1=${fecha1}&hora1=${hora1}&fecha2=${fecha2}&hora2=${hora2}`,
	}).done(function (data) {
		var result = $.parseJSON(data);
		let tabla = $("#table_id").DataTable({
			scrollCollapse: true,
			searching: false,
			destroy: true,
			retrieve: true,
			searchPanes: {
				viewTotal: true
			},
			dom: 'Plfrtip',
		});
		let metodos = [];
		tabla.clear();
		$.each(result, function (key, value) {

			tabla.row
				.add([
					value["log_origen"],
					value["fecha"],
					value["metodo"],
					value["enlace"],
					value["estado"],
					value["tiempo_respuesta"],
					value["IP_cliente"],
					value["largo_peticion"],
				])
				.draw();
		});
	});
});
$(document).ready(function () {
	$("#sidebarCollapse").on("click", function () {
		$("#sidebar").toggleClass("active");
	});
});
$(window).resize(function() {
  $('.dataTables_scrollBody').css('height', ($(window).height() - 200));
});
$('select').on('change', function (e) {
	var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
	console.log(valueSelected);
	let table = $("#table_id").DataTable();
	var filteredData = table
    .column( 2 )
    .data()
    .filter( function ( value, index ) {
        return value === valueSelected ? true : false;
    } );
});
