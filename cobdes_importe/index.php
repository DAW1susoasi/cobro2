<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Cobrar y Descargar recibos por importe</title>
<link rel="stylesheet" type="text/css" href="../estilos/hoja.css">
<script src="../scripts/cobdes_recibos_importe.js"></script>
</head>
<body>
<?php
require("../includes/navbar.php");
if(!isset($_SESSION["semana"])){
	header('Location: ../formulario_semana?d=cobdes_importe');	
}
?>
<form method="POST" action="">
<div class="table-container"> 
    <table id="dinamico"></table>
</div>
</form>
<?php
require("../includes/footer.php");
?>