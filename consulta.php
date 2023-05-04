<?php
include("config.php");

$consulta = $_POST['consulta'];

$resultado = "SELECT * FROM consulta WHERE nome LIKE '%$consulta%' LIMIT 5";
