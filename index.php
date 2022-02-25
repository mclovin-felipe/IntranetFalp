<!-- <?php
	// $host = "localhost";
	// $user = "root";
	// $pass = "Vicente2112@";
	// $database = "logs";
	// $conn =mysqli_connect($host, $user, $pass, $database);
	// $result = $conn->query("SELECT nombre ")
?> -->

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
<div class="wrapper"> 
	
 <div class="content">

	<div class="container d-flex justify-content-center">
		<div class="row">
		<div class="card" style="width: 18rem; align-items:center; padding:10px;">
  <img class="card-img-top" src="./src/server.png" alt="Server 1">
  <div class="card-body">
    <h5 class="card-title">Logs Server 1</h5>
    <p class="card-text">Puerto: 3200</p>
    <center>
    <a href="tabla.php?num=3200&numconfig=1">
    <button type="button" id="entrar2" class="btn" style="background-color: #00ADB5;" value = "3200">
                <i class="fas fa-align-left"></i>
                <span>Entrar</span>
            </button>
</a>
  </div>
  </div>
  <div class="card" style="width: 18rem;align-items:center;padding:10px;">
  <img class="card-img-top" src="./src/server.png" alt="Server 2">
  <div class="card-body">
    <h5 class="card-title">Logs Server 2</h5>
    <p class="card-text">Puerto: 3210</p>
    <center>
    <a href="tabla.php?num=3210&numconfig=0">
    <button type="button" id="entrar2" class="btn" style="background-color: #00ADB5;" value = "3210">
                <i class="fas fa-align-left"></i>
                <span>Entrar</span>
            </button>
</a>

    </center>
  </div>
  </div>
  <div class="card" style="width: 18rem; align-items:center;padding:10px;">
  <img class="card-img-top" src="./src/server.png" alt="Server 3">
  <div class="card-body">
    <h5 class="card-title">Logs Server 3</h5>
    <p class="card-text">Puerto: 3500</p>
    <center>
    <a href="tabla.php?num=3501&numconfig=2">
    <button type="button" id="entrar2" class="btn" style="background-color: #00ADB5;" value = "3500">
                <i class="fas fa-align-left"></i>
                <span>Entrar</span>
            </button>
</a>
    </center>
  </div>
  </div>
	</div>
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
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script src="js/scripts.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 </html>
