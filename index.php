<?php 
$host = "localhost";
$user = "root";
$pass = "Vicente2112@";
$database = "prueba";
$conn =mysqli_connect($host, $user, $pass, $database);
$result = $conn->query("SELECT * FROM log");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/qqw3nvm.css">
<link rel="stylesheet" href="./src/css/style.css">
	<title>Falp Intranet logs</title>
</head>
<body>
<div class="d-flex">
	<div id="sidebar-container" class = "bg-primary">
		<div class="logo">
			<h4 class="text-light" style="font-weight: bold;">Logs</h4>
		</div>
		<div class = "menu">
<!--			<a href= "#" class="d-block text-light p-3"><i class="icon ion-md-apps mr-2 lead"></i> Tablero</a>
			<a href= "#" class="d-block text-light p-3"><i class="icon ion-md-stats mr-2 lead"></i> Filtros</a>
		    <a href= "#" class="d-block text-light p-3"><i class="icon ion-md-person mr-2 lead"></i> Perfil</a>
			<a href= "#" class="d-block text-light p-3"><i class="icon ion-md-settings mr-2 lead"></i> Configuracion</a>
-->
<form>
<div class = "p-3 text-light">
	<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
<div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
    </div>
<label for="customRange1" class="form-label">Example range</label>
<div class="mb-3">
<input type="date" id="start" name="trip-start"
	   value=<?php echo date("Y-m-d"); ?>
       min="2001-01-01" max="2025-12-31">

<input type="date" id="start" name="trip-start"
value=<?php echo date('Y-m-d');?>
       min="2001-01-01" max="2025-12-31">
</div>
</div>
</form>
 </div>
 </div>
<div class="container">
<h2 class = "center">Tablas jeje</h2>
<div id="table-container"></div>
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Log Origen</th>
            <th>Fecha</th>
			<th>Metodo</th>
			<th>Enlace</th>
			<th>IP origen</th>
			<th>Tiempo Respuesta</th>
			<th>Largo Respuesta</th>
        </tr>
    </thead>
    <tbody>
<?php 	
while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["log_origen"]."</td><td>".$row["fecha"]."</td><td>".$row["metodo"]."</td><td>".$row["enlace"]."</td><td>".$row["IP_cliente"]."</td><td>".$row["tiempo_respuesta"]."</td><td>".$row["largo_peticion"]."</td></tr>";
}



?>
	</tbody>
</table>
</div>
 </div>
 </body>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script src="js/scripts.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 </html>
