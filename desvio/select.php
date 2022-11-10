<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/609db37a1e.js" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            margin: 0px auto;
            align-items: center;
        }
        table {
            background: white;
            border-collapse: collapse;
            border-radius: 3px;
            height: 320px;
            margin: auto;
            max-width: 600px;
            padding: 5px;
            width:100%;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            animation: float 5s infinite;
        }

        th{
            background-color: #023c7e;
            color: #fff;
            border: solid 1px #7e7c7c;
            padding-right: 50px;
            padding-left: 50px;
        }

        td{
            border: solid 1px #7e7c7c;
            padding: 2px;
            text-align: center;
            font-size: 10px;
        }
    </style>
</head>
<body>
    
</body>
</html>


<?php

include_once('db.php');

$conectar = conn();

$consulta = "SELECT * FROM usuarios";

$result = mysqli_query($conectar, $consulta);

if(!$result)
    {
        echo "no se ha podido realizar la consulta";
    }
echo "<table>";
    echo "<tr>";
    echo "<th><h1>Nombre</th></h1>";
    echo "<th><h1>Edad</th></h1>";
    echo "<th><h1>Telefono</th></h1>";
    echo "<th><h1>Lugar</th></h1>";
    echo "<th><h1>Comentario</th></h1>";
    echo "</tr>";

    while ($colum = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td><h2>" . $colum['fullname'] . "</td></h2>";
        echo "<td><h2>" . $colum['edad'] . "</td></h2>";
        echo "<td><h2>" . $colum['phone'] . "</td></h2>";
        echo "<td><h2>" . $colum['lugar'] . "</td></h2>";
        echo "<td><h2>" . $colum['coment'] . "</td></h2>";
        echo "</tr>";
        }

echo "</table>";

?>