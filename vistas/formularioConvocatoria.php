<?php

$conexion = DB::abreConexion();

$items = DB::selectUniversal($conexion, 'itemBaremable');
$proyectos = DB::selectUniversal($conexion, 'proyecto');
$clases = DB::selectUniversal($conexion, 'destinatario');


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Convocatoria</title>

</head>

<body>


    <form action="./api/procesar_convocatoria.php" method="post">
    <h2>Formulario de Convocatoria</h2>

        <label for="movilidades">Número de Movilidades:</label>
        <input type="number" id="movilidades" name="movilidades" required><br>

        <label for="tipo">Tipo de Convocatoria:</label>
        <select id="tipo" name="tipo" required>
            <option value="corto">Corto</option>
            <option value="largo">Largo</option>
        </select><br>

        <label for="fechaInicioSolicitud">Fecha de Inicio de Solicitud:</label>
        <input type="date" id="fechaInicioSolicitud" name="fechaInicioSolicitud" required><br>

        <label for="fechaFinSolicitud">Fecha de Fin de Solicitud:</label>
        <input type="date" id="fechaFinSolicitud" name="fechaFinSolicitud" required><br>

        <label for="fechaInicioPrueba">Fecha de Inicio de Prueba:</label>
        <input type="date" id="fechaInicioPrueba" name="fechaInicioPrueba" required><br>

        <label for="fechaFinPrueba">Fecha de Fin de Prueba:</label>
        <input type="date" id="fechaFinPrueba" name="fechaFinPrueba" required><br>

        <label for="fechaListadoProvisional">Fecha de Listado Provisional:</label>
        <input type="date" id="fechaListadoProvisional" name="fechaListadoProvisional" required><br>

        <label for="fechaListadoDefinitivo">Fecha de Listado Definitivo:</label>
        <input type="date" id="fechaListadoDefinitivo" name="fechaListadoDefinitivo" required><br>

        <label for="idProyecto">Nombre del Proyecto:</label>
        <select id="idProyecto" name="idProyecto" required>
            <?php foreach ($proyectos as $proyecto) : ?>
                <option value="<?php echo ($proyecto->getIdProyecto()); ?>"><?php echo strtoupper($proyecto->getNombreProyecto()); ?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="destino">Destino de la Convocatoria:</label>
        <input type="text" id="destino" name="destino" required><br>

        <label>Clases:</label>
        <?php foreach ($clases as $clase) : ?>
            <input type="checkbox" id="<?php echo ($clase->getCodigoGrupo()); ?>" name="<?php echo ($clase->getCodigoGrupo()); ?>"><?php echo ($clase->getNombre()); ?>
        <?php endforeach; ?>


        <table border="2" id="tablaItem">
            <tr>
                <th>Seleccionar</th>
                <th>ID Item</th>
                <th>Nombre</th>
                <th>Valor Maximo</th>
                <th>Valor minimo</th>
                <th>Obligatorio</th>
                <th>Es presentado por el usuario</th>

            </tr>
            <?php 
            $i=1;
            foreach ($items as $item): ?>
                <tr>
                    <td><input type="checkbox" onclick="desactivarEdicion(this)" id="seleccionar<?php echo $i; ?>"></td>
                    <td class="id" id="<?php echo ($item->getIdItem()); ?>" name="<?php echo ($item->getIdItem()); ?>"><input type="number" disabled name="idBaremo<?php echo $i; ?>" value="<?php echo $item->getIdItem(); ?>"></td>
                    <td id="<?php echo ($item->getNombre()); ?>"><?php echo $item->getNombre(); ?></td>
                    <td><input type="number" disabled name="max<?php echo $i; ?>"></td>
                    <td><input type="number" disabled name="min<?php echo $i; ?>"></td>
                    <td><input type="checkbox" disabled name="obligatorio<?php echo $i; ?>"></td>
                    <td>Si<input type="checkbox" disabled name="aportado<?php echo $i; ?>"></td>
                </tr>
            <?php 
            $i++;
            endforeach; ?>
        </table><br>
        <div class="tablaAdicional" id="tablaAdicional2">
        <table border="1">
            <tr>
                <th>A1</th>
                <th>A2</th>
                <th>B1</th>
                <th>B2</th>
                <th>C1</th>
                <th>C2</th>
            </tr>
            <tr>
            <td><input type="number"  name="A1"></td>
            <td><input type="number"  name="A2"></td>
            <td><input type="number"  name="B1"></td>
            <td><input type="number"  name="B2"></td>
            <td><input type="number"  name="C1"></td>
            <td><input type="number"  name="C2"></td>

            </tr>
        </table><br>
    </div>
        <input type="submit" value="Enviar" id="enviar">


    </form>

</body>
<script src="./js/formularioConvocatoria.js"></script>

</html>