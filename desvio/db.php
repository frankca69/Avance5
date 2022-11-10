<?php

function conn(){
    $usuariodb = "root";
    $passworddb = "";
    $hostname = "localhost";
    $dbname = "desvios";

    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
}


?>