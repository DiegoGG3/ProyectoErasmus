<?php
$conexion = DB::abreConexion();
$curso = $_SESSION['user']->getCurso();
$convocatorias = destinatarioConvocatoriaRepository::obtenerConvocatoriaPorId($conexion, $curso);
?>
<form method='post' id='formSolicitud' action="index.php?menu=hacerSolicitud">
<input type="hidden" id="convocatoriaId" name="convocatoriaId" value="">

    <table border=1>
    <h2>Convocatorias disponibles</h2>

        <tr>
            <th>Destino</th>
            <th>Tipo</th>
            <th>Solicita</th>
        </tr>
        <?php foreach ($convocatorias as $convocatoria) :
            $convo = convocatoriaRepository::obtenerConvocatoriaPorId($conexion, $convocatoria->getIdConvocatoria());
        ?>
            <tr>
                <td><?php echo htmlspecialchars($convo[0]->getDestino()); ?></td>
                <td><?php echo htmlspecialchars($convo[0]->getTipo()); ?></td>
                <td>
                <button type="submit" class="asignar" onclick='hacerSolicitud(this, <?php echo htmlspecialchars($convo[0]->getIdConvocatoria()); ?>)'>Solicitud</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</form>
<script>
    function hacerSolicitud(button, convocatoriaId) {
        document.getElementById('convocatoriaId').value = convocatoriaId;
        document.getElementById('formSolicitud').submit();
    }
</script>
