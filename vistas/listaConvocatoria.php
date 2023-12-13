<?php
$conexion = DB::abreConexion();
$curso = $_SESSION['user']->getCurso();
$convocatorias = destinatarioConvocatoriaRepository::obtenerConvocatoriaPorId($conexion, $curso);
var_dump($convocatorias);
?>
<form method='post' id='formSolicitud' action="./vistas/hacerSolicitud.php">
    <table border=1>
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
    <input type="hidden" id="convocatoriaId" name="convocatoriaId" value="">

</form>
<script>
    function hacerSolicitud(button, convocatoriaId) {
        document.getElementById('convocatoriaId').value = convocatoriaId;
        document.getElementById('formSolicitud').submit();
    }
</script>
