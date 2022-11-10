<?php

include_once('db.php');

//recibir

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$edad = $_POST['edad'];
$lugar = $_POST['lugar'];
$coment = $_POST['coment'];

echo"";
echo"";

$conectar = conn();
$sql = "INSERT INTO `usuarios` (`fullname`, `phone`, `edad`, `lugar`, `coment`)
        VALUES ('$fullname', '$phone', '$edad', '$lugar', '$coment');";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query failed! SQL- error: ", mysqli_error($conectar), E_USER_ERROR);

echo"<h5>Los datos ingresados son correctos. Recarge la pagina para ingresar nuevos datos o visualizar desvios de otras peronas</h5>";



?>