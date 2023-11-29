<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Convocatoria</title>
    <link rel="stylesheet" href="../css/estilo.css">

</head>
<body>

<h2>Formulario de Convocatoria</h2>

<form action="procesar_convocatoria.php" method="post">
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

    <label for="idProyecto">ID del Proyecto:</label>
    <input type="text" id="idProyecto" name="idProyecto" required><br>

    <label for="destino">Destino de la Convocatoria:</label>
    <input type="text" id="destino" name="destino" required><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
