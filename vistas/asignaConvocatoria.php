<?php
$conexion = DB::abreConexion();

$convocatorias = DB::selectUniversal($conexion, 'convocatoria');
$destinatarios = DB::selectUniversal($conexion, 'destinatario');


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
                <td><?php echo htmlspecialchars($convocatoria->getIdConvocatoria()); ?></td>
                <td><?php echo htmlspecialchars($convocatoria->getTipo()); ?></td>
                <td><?php echo htmlspecialchars($convocatoria->getDestino()); ?></td>
                <td>
                    <button class="asignar" onclick="openModal()">Asignar clases</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

   
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Asignar Clases</h2>

        <div class="content-container">
            <div class="table-container">
                <table border=1 class="tablaModal">
                    <tr>
                        <th>Siglas</th>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                    <?php foreach ($destinatarios as $destinatario) : ?>
                        <tr>
                             <td><?php echo htmlspecialchars($destinatario->getCodigoGrupo()); ?></td>
                        <td><?php echo htmlspecialchars($destinatario->getNombre()); ?></td>
                        <td>
                            <input type="checkbox">
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div class="boton-container">
                <input type="button" value="->" class="botonModal">
                <input type="button" value="<-" class="botonModal">
            </div>

            <div class="table-container">
            <table border=1 class="tablaModal">
                <tr>
                    <th>Siglas</th>
                    <th>Nombre</th>
                    <th></th>
                </tr>
                <?php foreach ($destinatarios as $destinatario) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($destinatario->getCodigoGrupo()); ?></td>
                        <td><?php echo htmlspecialchars($destinatario->getNombre()); ?></td>
                        <td>
                            <input type="checkbox">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
                <button onclick="closeModal()">Cerrar</button>
                <button>Guardar</button>
            </div>
        </div>
    </div>
</div>

</body>
<script src="./js/asignaConvocatoria.js"></script>

</html>