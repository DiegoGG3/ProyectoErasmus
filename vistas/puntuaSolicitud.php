<?php
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();
$id = isset($_GET['id']) ? $_GET['id'] : null;
$items=convocatoriaBaremoRepository::obtenerConvocatoriaBaremoId($conexion,$id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1>
            <tr>
                <th>Dni candidato</th>
                <th>Id Convocatoria</th>
                <th>Curso</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Domicilio</th>
                <th>Revisar</th>
            </tr>
            <?php foreach ($items as $item) : 
                ?>
                
                <tr>
                    <input type="hidden" id="idSolicitud" value="<?php echo htmlspecialchars($item->getIdConvocatoriaBaremo()); ?>">
                    <td><?php echo htmlspecialchars($item->getIdConvocatoria()); ?></td>
                    <td><?php echo htmlspecialchars($item->getIdBaremo()); ?></td>
                    <td><?php echo htmlspecialchars($item->getRequisito()); ?></td>
                    <td><?php echo htmlspecialchars($item->getValorMin()); ?></td>
                    <td><?php echo htmlspecialchars($item->getValorMax()); ?></td>
                    <td><?php echo htmlspecialchars($item->getPresentaUser()); ?></td>
                    <td><input type="button" id="revisar" value="Revisar" onclick="accederitem(this)"></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>