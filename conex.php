
<?php

$host = "localhost";
$User = "root";
$pass = "";

$conexion = mysqli_connect($host, $User , $pass, );

if (!$conexion) {
 echo "Conexion fallida";
 
}

?>