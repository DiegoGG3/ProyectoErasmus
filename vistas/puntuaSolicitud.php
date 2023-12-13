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
                <th>Id Convocatoria</th>
                <th>idBareno</th>
                <th>requisiyo</th>
                <th>valormin</th>
                <th>valormax</th>
                <th>presenyta</th>
            </tr>
            <?php foreach ($items as $item) : 
             $Iteme=itemBaremableRepository::obtenerItemPorId($conexion,$item->getIdBaremo());
            $nombreItem=$Iteme[0]->getNombre();
                ?>
                
                <tr>
                    <input type="hidden" id="idSolicitud" value="<?php echo htmlspecialchars($item->getIdConvocatoriaBaremo()); ?>">

                    <td><?php echo htmlspecialchars($item->getIdConvocatoria()); ?></td>
                    <td><?php echo htmlspecialchars($nombreItem); ?></td>
                    <td><?php echo htmlspecialchars($item->getRequisito()); ?></td>
                    <td><?php echo htmlspecialchars($item->getValorMin()); ?></td>
                    <td><?php echo htmlspecialchars($item->getValorMax()); ?></td>
                    <td><?php echo htmlspecialchars($item->getPresentaUser()); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>