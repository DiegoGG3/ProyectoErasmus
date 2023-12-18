<?php
$conexion = DB::abreConexion();

$convocatorias = DB::selectUniversal($conexion, 'convocatoria');
?>

<!DOCTYPE html>
<html>

<head>

    <title>Lista de convocatorias</title>
</head>

<body>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Destino</th>
            <th></th>
        </tr>
        <?php foreach ($convocatorias as $convocatoria) :
        ?>
            <tr>
                <td id="<?php echo htmlspecialchars($convocatoria->getIdConvocatoria()); ?>"><?php echo htmlspecialchars($convocatoria->getIdConvocatoria()); ?></td>
                <td><?php echo htmlspecialchars($convocatoria->getTipo()); ?></td>
                <td><?php echo htmlspecialchars($convocatoria->getDestino()); ?></td>
                <td>
                    <button class="asignar" onclick="accederConvocatoria(this)">Editar convocatoria</button>
                    <button class="asignar" onclick="eliminarConvocatoria(this)">Eliminar convocatoria</button>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>

 
</body>
<script src="./js/editaConvocatoria.js"></script>
<script src="./js/eliminaConvocatoria.js"></script>

</html>