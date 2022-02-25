
<?php 
$host = "localhost";
$user = "root";
$pass = "Vicente2112@";
$database = "logs";
$conn =mysqli_connect($host, $user, $pass, $database);

$fecha = date('Y-m-d',strtotime($_GET['fecha1']));
$fecha2 = date('Y-m-d',strtotime($_GET['fecha2']));
$hora1 = $_GET['hora1'];
$hora2 = $_GET['hora2'];
$tipo = $_GET['num'];
$result = $conn->query("SELECT * FROM API_".$tipo." WHERE fecha BETWEEN '".$fecha." ".$hora1."' AND '".$fecha2." ".$hora2."'");


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
//$fecha = strtotime($fecha) + strtotime("1 days");
 echo json_encode($data);
?>
