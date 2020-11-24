<?php

$dbhost= "localhost";
$dbuser="root";
$dbpass="";
$dbname="practicadb";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
    die("No hay conexión".mysqli_connect_error());
}

if (isset($_POST["registro"])) {
  $nombres = $_POST["nombres"];
  $apellidos = $_POST["apellidos"];
  $sexo = $_POST["sexo"];
  $nivelEducacion = $_POST["nivelEducacion"];

$insertar_datos = "INSERT INTO clientes (Nombres,Apellidos,Sexo,Estudios_alcanzados) VALUES('$nombres','$apellidos','$sexo','$nivelEducacion')";
  
$ejecutar = mysqli_query($conn,$insertar_datos);
  
}



?>
