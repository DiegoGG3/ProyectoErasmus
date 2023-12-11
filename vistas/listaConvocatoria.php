<?php
$conexion = DB::abreConexion();
$curso = $_SESSION['user']->getCurso();
$convocatorias = destinatarioConvocatoriaRepository::obtenerConvocatoriaPorId($conexion, $curso);
?>

<table border=1>
    <tr>
        <th>Destino</th>
        <th>Tipo</th>
        <th>Apuntate</th>
    </tr>
    <?php foreach ($convocatorias as $convocatoria) :
        $convo=convocatoriaRepository::obtenerConvocatoriaPorId($conexion, $convocatoria->getIdConvocatoria());
    ?>
        <tr>
            <td><?php echo htmlspecialchars($convo[0]->getDestino()); ?></td>
            <td><?php echo htmlspecialchars($convo[0]->getTipo()); ?></td>
            <td>
                <button class="asignar">Solicitud</button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>