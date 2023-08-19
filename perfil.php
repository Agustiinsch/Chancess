<!-- En tu archivo perfil.php -->

<?php
// Requerir el archivo de conexión a la base de datos
require_once 'conexion.php';

// Obtener la lista de trabajos publicados por el usuario
$usuario_id = $_SESSION['id']; // Cambia esto por cómo obtienes el ID del usuario
$query = "SELECT * FROM trabajos WHERE usuario_id = $usuario_id";
$resultado = $conexion->query($query);

$trabajos = array();
if ($resultado && $resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $trabajos[] = $fila;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mis Trabajos</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="trabajos-lista">
        <?php foreach ($trabajos as $trabajo) { ?>
            <div class="tarjeta-trabajo">
                <h3><?php echo $trabajo['titulo']; ?></h3>
                <p>Fecha de Emisión: <?php echo $trabajo['fechaemision']; ?></p>
                <p><?php echo $trabajo['descripcion']; ?></p>
                <div class="botones-tarjeta">
                    <a class="boton-editar" href="editar_trabajo.php?id=<?php echo $trabajo['id']; ?>">Editar</a>
                    <a class="boton-eliminar" href="eliminar_trabajo.php?id=<?php echo $trabajo['id']; ?>">Eliminar</a>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>
