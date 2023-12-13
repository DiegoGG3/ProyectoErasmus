<?php
$conexion = DB::abreConexion();
$idSolicitud = isset($_GET['idSolicitud']) ? $_GET['idSolicitud'] : null;
$dniCandidato = isset($_GET['dniCandidato']) ? $_GET['dniCandidato'] : null;
$idConvocatoria = isset($_GET['idConvocatoria']) ? $_GET['idConvocatoria'] : null;

$items=convocatoriaBaremoRepository::obtenerConvocatoriaBaremoId($conexion,$idSolicitud);

$archivoIdiomas = "./archivos/idiomas/" . $idConvocatoria . $dniCandidato . ".pdf";
$archivoNotas = "./archivos/notas/" . $idConvocatoria . $dniCandidato . ".pdf";

// Verificar si los archivos existen antes de intentar leerlos
if (file_exists($archivoIdiomas) && file_exists($archivoNotas)) {
    // Leer el contenido de los archivos
    $contenidoIdiomas = file_get_contents($archivoIdiomas);
    $contenidoNotas = file_get_contents($archivoNotas);

} else {
    echo "Alguno de los archivos no existe.";
}
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
                <th>Baremo</th>
                <th>Valor minimo</th>
                <th>Valor máximo</th>
                <th>Ver documento</th>
                <th>Nota</th>
            </tr>
            <?php foreach ($items as $item) : 
             $Iteme=itemBaremableRepository::obtenerItemPorId($conexion,$item->getIdBaremo());
            $nombreItem=$Iteme[0]->getNombre();
                ?>
                
                <tr>
                    <input type="hidden" id="idSolicitud" value="<?php echo htmlspecialchars($item->getIdConvocatoriaBaremo()); ?>">
                    <input type="hidden" id="documentoIdiomas" value="<?php echo htmlspecialchars($contenidoIdiomas); ?>">
                    <input type="hidden" id="documentoNotas" value="<?php echo htmlspecialchars($contenidoNotas); ?>">


                    <td><?php echo htmlspecialchars($item->getIdConvocatoria()); ?></td>
                    <td><?php echo htmlspecialchars($nombreItem); ?></td>
                    <td><?php echo htmlspecialchars($item->getValorMin()); ?></td>
                    <td><?php echo htmlspecialchars($item->getValorMax()); ?></td>
                    <td><button id="abrirPDF">Documento</td>

                    <td><input type="number" min="<?php echo htmlspecialchars($item->getValorMin()); ?>" max="<?php echo htmlspecialchars($item->getValorMax()); ?>"></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <button>Baremar</button>
</body>
<script src="./js/pdfBaremo.js" defer></script>

</html>