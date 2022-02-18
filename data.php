
<?php 
$host = "localhost";
$user = "root";
$pass = "Vicente2112@";
$database = "prueba";
$conn =mysqli_connect($host, $user, $pass, $database);
$fecha = date('Ymd',strtotime("-1 days"));

$result = $conn->query("SELECT * FROM log WHERE log_origen='LogAPI_".$fecha.".log'");
//echo ("SELECT * FROM log WHERE log_origen='LogAPI_".$fecha.".log'");
$data = array();
 while($row = $result->fetch_assoc()){
  $row_data = array(
   'log_origen' => $row['log_origen'],
   'fecha' => $row['fecha'],
    'metodo' => $row['metodo'],
    'enlace' => $row['enlace'],
    'estado' => $row['estado'],
    'tiempo_respuesta' => $row['tiempo_respuesta'],
    'IP_cliente' => $row['IP_cliente'],
    'largo_peticion' => $row['largo_peticion']
   );
  array_push($data, $row_data);
 }

 echo json_encode($data);
?>
