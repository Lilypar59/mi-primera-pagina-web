<?php
//$conn = mysqli_connect('localhost', 'root', '', 'exporta_excel');
$conn = mysqli_connect('dbwpartesanias.cpuokwowaq40.us-east-1.rds.amazonaws.com', 'admin', 'claveAWS2024', 'exporta_excel');
if (!$conn) {
	die("Error: Fallo al conectar con la base de datos");
}
