
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/qqw3nvm.css">
<link rel="stylesheet" href="./src/css/style.css">
	<title>Falp Intranet logs</title>
</head>
<body>
<!----->
<!----->
<!----->
<!--SideBar-->
<!----->
<!----->
<!----->
<div class="wrapper"> 
	<div id="sidebar" class = "bg-primary">
<div class="sidebar-header text-light">
                <h3>Logs Falp Intranet</h3>
            </div>
		<div class = "active">
<!--			<a href= "#" class="d-block text-light p-3"><i class="icon ion-md-apps mr-2 lead"></i> Tablero</a>
			<a href= "#" class="d-block text-light p-3"><i class="icon ion-md-stats mr-2 lead"></i> Filtros</a>
		    <a href= "#" class="d-block text-light p-3"><i class="icon ion-md-person mr-2 lead"></i> Perfil</a>
			<a href= "#" class="d-block text-light p-3"><i class="icon ion-md-settings mr-2 lead"></i> Configuracion</a>
-->
<form >
<div class = "p-3 text-light">
<label for="customRange1" class="form-label">Filtro hora y fecha</label>
<div class="mb-3">
<input type="date" id="fecha1" name="fecha1"
	   value=<?php echo date("Y-m-d"); ?>
       min="2001-01-01" max="2025-12-31">
<input class = "m-2"type="time" id="hora1" name="hora1"
	   value="00:00"
       min="00:00:00" max="23:59:59">
<input type="date" id="fecha2" name="fecha2"
value=<?php echo date("Y-m-d"); ?>
       min="2001-01-01" max="2025-12-31">
<input class ="m-2"type="time" id="hora2" name="hora2"
	   value="23:59"
       min="00:00" max="23:59:59">
</div>
<button type="button" id = "update" style="background-color: #4B6587;color:#F7F6F2;" class="btn" value="<?php echo $_GET['num'] ?>">Filtrar</button>
<button type="button" id = "ultimo" style="background-color: #4B6587;color:#F7F6F2;" class="btn" value=<?php echo json_encode(array(
    "num" => $_GET['num'],
    "fecha" => date("Y-m-d"),
)); ?>>Ultimo</button>
</div>
</form>
<div class="mb-3 p-3">
      <label for="disabledSelect" class="form-label">Metodo</label>
      <select id="Metodos" class="form-select">
        <option>SIN ELEGIR</option>
        <option>OPTIONS</option>
        <option>GET</option>
        <option>POST</option>
        <option>PUT</option>
        <option>DELETE</option>
        <option>HEAD</option>
        <option>TRACE</option>
        <option>CONNECT</option>

      </select>
    </div>
 </div>
 </div>
<!----->
<!----->
<!--TABLA-->
<!----->
<!----->
<div class="content">
<nav class="navbar navbar-expand-lg" style="background-color:#F0E5CF;">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn">
                <i class="fas fa-align-left"></i>
                <span>Filtros</span>
            </button>

        </div>
    </nav>

<table id="table_id" class="table table-striped">
<thead>
        <tr>
            <th>Log Origen</th>
            <th>Fecha</th>
			<th>Metodo</th>
			<th>Enlace</th>
			<th>Estado</th>
			<th>Tiempo Respuesta</th>
			<th>IP origen</th>
			<th>Largo Respuesta</th>
        </tr>
    </thead>
    <tbody>
	</tbody>
</table>
</div>
</div>
 </div>
<!----->
<!----->
<!----->
<!----->
</div>
 </body>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script src="js/scripts.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 </html>
