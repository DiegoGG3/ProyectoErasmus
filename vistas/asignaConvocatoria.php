<?php
$conexion = DB::abreConexion();

$convocatorias = DB::selectUniversal($conexion, 'convocatoria');
$destinatario = DB::selectUniversal($conexion, 'destinatario');


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
        <?php foreach ($convocatorias as $convocatoria): 
            ?>
        <tr>
            <td><?php echo htmlspecialchars($convocatoria->getIdConvocatoria()); ?></td>
            <td><?php echo htmlspecialchars($convocatoria->getTipo()); ?></td>
            <td><?php echo htmlspecialchars($convocatoria->getDestino()); ?></td>
            <td>
               <button class="eliminar">Asignar clases</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>