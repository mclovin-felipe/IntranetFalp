
<?php 
$host = "localhost";
$user = "root";
$pass = "Vicente2112@";
$database = "logs";
$conn =mysqli_connect($host, $user, $pass, $database);

$tipo = $_GET['num'];
$result = $conn->query("SELECT log_origen, COUNT(*) as suma FROM API_".$tipo." GROUP BY log_origen;");


$data = array();
 while($row = $result->fetch_assoc()){
  $row_data = array(
   'log_origen' => $row['log_origen'],
   'suma' => $row['suma']);
  array_push($data, $row_data);
 }
//$fecha = strtotime($fecha) + strtotime("1 days");
 echo json_encode($data);
?>
