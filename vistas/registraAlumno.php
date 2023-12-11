<?php
$conexion = DB::abreConexion();

$destinatarios = DB::selectUniversal($conexion, 'destinatario');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Candidato</title>
</head>
<body>
    <h2>Formulario de Registro de Candidato</h2>
    <form action="./api/procesarAlumno.php" method="post">
        <label for="dniCandidato">DNI del Candidato:</label>
        <input type="text" id="dniCandidato" name="dniCandidato" required>

        <label for="fechanacCandidato">Fecha de Nacimiento:</label>
        <input type="date" id="fechanacCandidato" name="fechanacCandidato" onchange="validarEdad()" required>

        <label for="dniTutor">DNI del Tutor:</label>
        <input type="text" id="dniTutor" name="dniTutor" disabled>

        <label for="ap1Candidato">Apellido Paterno:</label>
        <input type="text" id="ap1Candidato" name="ap1Candidato" required>

        <label for="ap2Candidato">Apellido Materno:</label>
        <input type="text" id="ap2Candidato" name="ap2Candidato" required>

        <label for="nombreCandidato">Nombre:</label>
        <input type="text" id="nombreCandidato" name="nombreCandidato" required>

        <label for="curso">Curso:</label>
        <select id="curso" name="curso" required>
        <?php foreach ($destinatarios as $destinatario) :?>
            <option value="<?php echo ($destinatario->getCodigoGrupo()); ?>"><?php echo strtoupper($destinatario->getNombre()); ?></option>
        <?php endforeach; ?>

        </select>

        <label for="telefonoCandidato">Teléfono:</label>
        <input type="tel" id="telefonoCandidato" name="telefonoCandidato" required>

        <label for="correoCandidato">Correo Electrónico:</label>
        <input type="email" id="correoCandidato" name="correoCandidato" required>

        <label for="domicilioCandidato">Domicilio:</label>
        <input type="text" id="domicilioCandidato" name="domicilioCandidato" required>

        <label for="contraseñaCandidato">Contraseña:</label>
        <div>
            <input type="password" id="contraseñaCandidato" name="contraseñaCandidato" required>
            <button type="button" onclick="mostrarContraseña()">Mostrar</button>
        </div>

        <label for="repetirContraseña">Repetir Contraseña:</label>
        <div>
            <input type="password" id="repetirContraseña" name="repetirContraseña" required oninput="validarContraseñas()">
            <button type="button" onclick="mostrarRepetirContraseña()">Mostrar</button>
        </div>

        <p id="mensajeErrorContraseña" style="color: red;"></p>

        <button type="submit" id="boton">Registrar</button>
    </form>
</body>
<script src="./js/registraAlumno.js" defer></script>
</html>
