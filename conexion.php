# este es un archivo de conexion a la base de datos
<?php
$host = "localhost";
$usuario = "root";
$contraseña = "";
$base_de_datos = "mi_base_de_datos";
$conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa a la base de datos.";
mysqli_close($conexion);
?>