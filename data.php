<?php
$host = "localhost";
$user = "root";
$pass = "Vicente2112@";
$database = "prueba";
$conn =mysqli_connect($host, $user, $pass, $database);
$result = $conn->query("SELECT * FROM log");
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Log Origen: " . $row["log_origen"]. " fecha" . $row["fecha"]. "metodo ". $row["metodo"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>


