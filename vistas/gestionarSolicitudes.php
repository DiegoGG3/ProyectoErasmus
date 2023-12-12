<?php
$conexion = DB::abreConexion();

$solicitudes = DB::selectUniversal($conexion, "solicitud");
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
                <th>Dni candidato</th>
                <th>Id Convocatoria</th>
                <th>Curso</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Domicilio</th>
                <th>Revisar</th>
            </tr>
            <?php foreach ($solicitudes as $solicitud) : ?>
                
                <tr>
                    <input type="hidden" id="idSolicitud" value="<?php echo htmlspecialchars($solicitud->getIdSolicitud()); ?>">
                    <td><?php echo htmlspecialchars($solicitud->getDniCandidato()); ?></td>
                    <td><?php echo htmlspecialchars($solicitud->getIdConvocatoria()); ?></td>
                    <td><?php echo htmlspecialchars($solicitud->getDestinatario()); ?></td>
                    <td><?php echo htmlspecialchars($solicitud->getTelefono()); ?></td>
                    <td><?php echo htmlspecialchars($solicitud->getEmail()); ?></td>
                    <td><?php echo htmlspecialchars($solicitud->getDomicilio()); ?></td>
                    <td><input type="button" id="revisar" value="Revisar" onclick="accederSolicitud(this)"></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

</body>
<script src="./js/revisarSolicitud.js"></script>

</html>