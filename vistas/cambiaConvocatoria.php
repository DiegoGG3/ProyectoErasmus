<?php
$conexion = DB::abreConexion();
$convocatoria = convocatoriaRepository::obtenerConvocatoriaPorId($conexion, $_GET["idConvocatoria"]);

?>

<body>
    <table border=1>
        <tr>
            <th>Movilidades</th>
            <th>Tipo</th>
            <th>Fecha Inicio Solicitud</th>
            <th>Fecha Fin Solicitud</th>
            <th>Fecha Inicio Prueba</th>
            <th>Fecha Fin Prueba</th>
            <th>Fecha Listado Provisional</th>
            <th>Fecha Listado Definitivo</th>
            <th>Destino</th>
            <th></th>
        </tr>
        <tr>
            <input id="idConvocatoria" type="hidden" value="<?php echo htmlspecialchars($convocatoria[0]->getIdConvocatoria()); ?>">
            <td><input id="movilidades" type="number" value="<?php echo htmlspecialchars($convocatoria[0]->getMovilidades()); ?>"> </td>
            <td><input id="tipo" type="text" value="<?php echo htmlspecialchars($convocatoria[0]->getTipo()); ?>"></td>
            <td><input id="FechaInicioSolicitud" type="date" value="<?php echo htmlspecialchars($convocatoria[0]->getFechaInicioSolicitud()); ?>"> </td>
            <td><input id="FechaFinSolicitud" type="date" value="<?php echo htmlspecialchars($convocatoria[0]->getFechaFinSolicitud()); ?>"></td>
            <td><input id="FechaInicioPrueba" type="date" value="<?php echo htmlspecialchars($convocatoria[0]->getFechaInicioPrueba()); ?>"></td>
            <td><input id="FechaFinPrueba" type="date" value="<?php echo htmlspecialchars($convocatoria[0]->getFechaFinPrueba()); ?>"></td>
            <td><input id="FechaListadoProvisional" type="date" value="<?php echo htmlspecialchars($convocatoria[0]->getFechaListadoProvisional()); ?>"></td>
            <td><input id="FechaListadoDefinitivo" type="date" value="<?php echo htmlspecialchars($convocatoria[0]->getFechaListadoDefinitivo()); ?>"></td>
            <td><input id="destino" type="text" value="<?php echo htmlspecialchars($convocatoria[0]->getDestino()); ?>"></td>
            <td><input type="button" value="Editar" id="editar"></td>
        </tr>
    </table>

    <script src="./js/editarConvocatoria.js"></script>

</body>