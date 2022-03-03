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
  let tipo = $('#update').val();

  $.ajax({
    method: "GET",
    url: `data.php?num=${tipo}&fecha1=${fecha1}&hora1=${hora1}&fecha2=${fecha2}&hora2=${hora2}`,
  }).done(data => {console.log(data); crearTabla(data)});
});
$(document).ready(function () {
  let dato = $.parseJSON($('#ultimo').val());
  let fecha1 = dato['fecha'].replace(/-/g, "");
  let fecha2 = dato['fecha'].replace(/-/g, "");
  let hora1 = "00:00";
  let hora2 = "23:59";
  let tipo = dato['num'];
  console.log(dato['fecha']);
  $.ajax({
    method: "GET",
    url: `data.php?num=${tipo}&fecha1=${fecha1}&hora1=${hora1}&fecha2=${fecha2}&hora2=${hora2}`,
  }).done(data => {console.log(data); crearTabla(data)});
});
$("#ultimo").click(function () {
  let dato = $.parseJSON($('#ultimo').val());
  console.log(dato);
  console.log("hola");
  let fecha1 = dato['fecha'].replace(/-/g, "");
  $.ajax({
    method: "GET",
    url: `http://10.111.140.49:3501/api/SubirLogFecha?fecha=${fecha1}&numconfig=${dato['numconfig']}`

  }).done(data => {
    timeout();
  });
})
$("#BorrarTabla").click(function () {
  let dato = $.parseJSON($('#ultimo').val());
  let tipo = dato['num'];
  var dataPoints = [];

  var options = {
    animationEnabled: true,
    theme: "light2",
    title: {
      text: "Uso de la api diario"
    },
    axisX: {
      valueFormatString: "DD MMM YYYY",
      title: "Dias"
    },
    axisY: {
      title: "Consultas",
      titleFontSize: 24
    },
    data: [{
      type: "column",
      yValueFormatString: "#,###.##",
      dataPoints: dataPoints
    }]
  };

  function addData(data) {
    console.log(data);


    for (var i = 0; i < data.length; i++) {
      dataPoints.push({
        label: data[i]['log_origen'],
        y: parseFloat(data[i]['suma'])
      });
      $('#Metodos').append(`<option value="${data[i]['log_origen']}">
                                       ${data[i]['log_origen']}
                                  </option>`);
    }

    $('#table_id').parents('div.dataTables_wrapper').first().hide();
    $("#chartContainer").CanvasJSChart(options);

  }

  $.getJSON(`grafico.php?num=${tipo}`, addData);


})


function timeout() {
  location.reload();
}
function crearTabla(data) {
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
}
$(document).ready(function () {
  $("#sidebarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});
$(window).resize(function () {
  $('.dataTables_scrollBody').css('height', ($(window).height() - 200));
});
$('select').on('change', function (e) {
  var optionSelected = $("option:selected", this);
  var valueSelected = this.value;
  let fecha = valueSelected;
  fecha = fecha.split('_')[1].split('.')[0];
  console.log(fecha);
  let dato = $.parseJSON($('#ultimo').val());
  let tipo = dato['num'];
  $.ajax({
    method: "GET",
    url: `http://10.111.140.49:3501/api/GetLogFecha?fecha=${fecha}`
  }).done(data => {
    let option = [];
    let post = 0.0
    let get = 0.0
    let patch = 0.0
    let deletee = 0.0
    let put = 0.0
    let servicios = [];
    let servicios_padre = [];

    datos = data['resultado'];
    for (let i = 0; i < datos.length; i++) {
      if (datos[i]['metodo'] === "POST") post += 1;
      if (datos[i]['metodo'] === "GET") get += 1;
      if (datos[i]['metodo'] === "PATCH") patch += 1;
      if (datos[i]['metodo'] === "DELETE") deletee += 1;
      if (datos[i]['metodo'] === "PUT") put += 1;
      servicios.push(datos[i]['enlace'].split('/')[3]);
      if (!servicios_padre.includes(datos[i]['enlace'].split('/')[3])) {
        servicios_padre.push(datos[i]['enlace'].split('/')[3]);
      }


    }
    const pizza_servicio = []
    function getOccurrence(array, value) {
      return array.filter((v) => (v === value)).length;
    }
    console.log(servicios_padre);

    $('#Servicios').append(`<option value="${data[i]['log_origen']}">
                                       ${data[i]['log_origen']}
                                  </option>`);

    var dataPoints = [];
    var options2 = {
      title: {
        text: "Tipo de consultas"
      },
      subtitles: [{
        text: `En el dia ${fecha}`
      }],
      animationEnabled: true,
      data: [{
        type: "pie",
        startAngle: 40,
        toolTipContent: "<b>{label}</b>: {y}%",
        showInLegend: "true",
        legendText: "{label}",
        indexLabelFontSize: 16,
        indexLabel: "{label} - {y}%",
        dataPoints: [
          {y: (100 * parseFloat(post)) / datos.length, label: "POST"},
          {y: (100 * parseFloat(get)) / datos.length, label: "GET"},
          {y: (100 * parseFloat(patch)) / datos.length, label: "PATCH"},
          {y: (100 * parseFloat(deletee)) / datos.length, label: "DELETE"},
          {y: (100 * parseFloat(put)) / datos.length, label: "PUT"}
        ]
      }]
    };

    $("#pizza").CanvasJSChart(options2);
  });
});
// $(document).ready(function () {
// 	$("#entrar").on("click", function () {
// 		let num = $('#entrar').val();
//         window.location = `/tabla.php?num=${num}`;
//     });
// });
// AdminPortal
// w04c2rtx21ADM
// Servicio mas utilizado
// CAIDAS POR MES
// ultima caida
// servicio con mas fallas
// #004A91 azul
// #fc7229 naranjo
// #fbb800 mostaza
// Importar en excel otras fechas.
// https://desafalp.institutoncologicofalp.cl/wp-content/themes/falpwebsite/img/logo-falp_morado.svg
https://desafalp.institutoncologicofalp.cl/wp-content/themes/falpwebsite/img/logo-falp.svg
