<?php
$conexion = DB::abreConexion();
$dniCandidato = $_SESSION['user']->getDniCandidato();

$solicitudes=SolicitudRepository::obtenerSolicitudId($conexion, $dniCandidato);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis solicitudes</title>

</head>

<body>
    <section id="solicitudes">
        <h2>Mis solicitudes</h2>

        <table border=1>
            <tr>
                <th>Curso</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Domicilio</th>
                <th>Estado</th>
            </tr>
            <?php foreach ($solicitudes as $solicitud) :?>
                <tr>
                    <td><?php echo htmlspecialchars($solicitud->getDestinatario()); ?></td>
                    <td><?php echo htmlspecialchars($solicitud->getTelefono()); ?></td>
                    <td><?php echo htmlspecialchars($solicitud->getEmail()); ?></td>
                    <td><?php echo htmlspecialchars($solicitud->getDomicilio()); ?></td>
                    <td><?php echo htmlspecialchars($solicitud->getEstado()); ?></td>

                </tr>
            <?php endforeach; ?>
        </table>
    </section>

</body>

</html>