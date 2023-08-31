<?php
require_once 'config.php';
$conexion=conectar();
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$rubro=$_GET['id_trabajos'];
$usuario=$_GET['usuarios_id'];
$titulo=$_GET['titulo'];
$descripcion=$_GET['descripcion'];

$insertacion="INSERT INTO `trabajos-usuarios` (`nombre`, `apellido`, `id_trabajos`, `usuarios_id`, `titulo` , `descripcion`) VALUES('$nombre', '$apellido', '$rubro', '$usuario', '$titulo', '$descripcion')";
if(mysqli_query($conn,$insertacion)){
    echo"Registro insertado";
}
else {
    echo"Error: ".mysqli_error($conn);
}
?>