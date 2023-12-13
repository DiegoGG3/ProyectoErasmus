<?php

$conexion = DB::abreConexion();

$destinatarios = DB::selectUniversal($conexion, 'destinatario');
$convocatoriaId = isset($_POST['convocatoriaId']) ? $_POST['convocatoriaId'] : null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Solicitud</title>

</head>

<body>
<input type="hidden" id="convocatoriaId" name="convocatoriaId" value="<?php echo ($convocatoriaId); ?>">

    <h2>Formulario de Solicitud</h2>
    <form method="post">
        <label for="curso">Curso:</label>
        <select id="curso" name="curso" required>
            <?php foreach ($destinatarios as $destinatario) : ?>
                <option value="<?php echo ($destinatario->getCodigoGrupo()); ?>"><?php echo strtoupper($destinatario->getNombre()); ?></option>
            <?php endforeach; ?>

        </select>

        <label for="telefonoCandidato">Teléfono:</label>
        <input type="tel" id="telefonoCandidato" name="telefonoCandidato">

        <label for="correoCandidato">Correo Electrónico:</label>
        <input type="email" id="correoCandidato" name="correoCandidato">

        <label for="domicilioCandidato">Domicilio:</label>
        <input type="text" id="domicilioCandidato" name="domicilioCandidato">

        <div id="divFiles">
            <label for="documentoIdiomas">Documento de nivel de idiomas:</label>
            <input type="file" id="documentoIdiomas" name="documentoIdiomas">
            <button id="abrirPDF">Abrir PDF</button><br>
    
            <label for="documentoNotas">Documento de Notas:</label>
            <input type="file" id="documentoNotas" name="documentoNotas">
            <button id="abrirPDF2">Abrir PDF</button><br>
    
            <img id="foton">
            <input type="hidden" id="blob">
            <button id="foto" onclick="modalFoto(event)">Hacer foto</button><br>
        </div>

        <button type="submit" id="botonSolicitar">Solicitar</button>
    </form>
</body>
<script src="./js/pdf.js" defer></script>
<script src="./js/hacerSolicitud.js" defer></script>
<script src="./js/foto.js" defer></script>



</html>