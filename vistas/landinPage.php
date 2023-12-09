<?php
    $conexion = DB::abreConexion();
    $convocatorias = DB::selectUniversal($conexion, 'convocatoria');
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Instituto</title>
    <link rel="stylesheet" type="text/css" href="./css/landin.css">

</head>
<body>

    <header>
        <h1>IES Fuentezuelas</h1>
    </header>

    <section id="quienes-somos">
        <h2>Quiénes Somos</h2>
        <p>Breve descripción sobre el instituto y sus actividades.</p>
    </section>

    <section id="convocatorias">
        <h2>Convocatorias</h2>
       
         <table border=1>
        <tr>
            <th>Destino</th>
            <th>Tipo</th>
            <th>Clases De La Convocatoria</th>
            <th>Apuntate</th>
        </tr>
        <?php foreach ($convocatorias as $convocatoria) :
        $clases = destinatarioConvocatoriaRepository::obtenerDestinatariosConvocatoriaId($conexion, $convocatoria->getIdConvocatoria());
        ?>
            <tr>
                <td><?php echo htmlspecialchars($convocatoria->getDestino()); ?></td>
                <td><?php echo htmlspecialchars($convocatoria->getTipo()); ?></td>
                <td>
                <?php 
                    foreach ($clases as $clase) :
                        echo htmlspecialchars($clase->getIdDestinatario()); 
                endforeach;
                ?>
                </td>
                <td>
                    <button class="asignar" onclick="openModal()">Asignar clases</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </section>

</body>
</html>