<?php
$conexion = DB::abreConexion();
$proyectos = DB::selectUniversal($conexion, 'proyecto');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Instituto</title>

</head>

<body>
    <section id="convocatorias">
        <h2>Proyectos disponibles</h2>

        <table border=1>
            <tr>
                <th>Nombre</th>
                <th>Fecha de Inicio</th>
                <th>Fecha Fin</th>
                <th>Apuntate</th>
            </tr>
            <?php foreach ($proyectos as $proyecto) :
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($proyecto->getNombreProyecto()); ?></td>
                    <td><?php echo htmlspecialchars($proyecto->getFechaInicio()); ?></td>
                    <td><?php echo htmlspecialchars($proyecto->getFechaFin()); ?></td>

                    <td>
                        <a class="asignar" id="enlaceBoton" href="index.php?menu=iniciarSesion">Solicita</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

</body>

</html>