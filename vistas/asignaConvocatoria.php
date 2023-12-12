<?php
$conexion = DB::abreConexion();

$convocatorias = DB::selectUniversal($conexion, 'convocatoria');
$destinatarios = DB::selectUniversal($conexion, 'destinatario');


?>
<!DOCTYPE html>
<html>

<head>
    <title>Lista de convocatorias</title>
    <style>
        /* Agrega estilos CSS según sea necesario */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Destino</th>
            <th></th>
        </tr>
        <?php foreach ($convocatorias as $convocatoria) : ?>
            <tr>
                <td><?php echo htmlspecialchars($convocatoria->getIdConvocatoria()); ?></td>
                <td><?php echo htmlspecialchars($convocatoria->getTipo()); ?></td>
                <td><?php echo htmlspecialchars($convocatoria->getDestino()); ?></td>
                <td>
                    <button class="asignar" onclick="openModal(<?php echo $convocatoria->getIdConvocatoria(); ?>)">Asignar clases</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Asignar Clases</h2>

            <div class="table-container">
                <!-- Tabla de clases asignadas -->
                <h3>Clases Asignadas</h3>
                <table border=1 id="tablaAsignadas">
                    <!-- Aquí se llenarán las clases asignadas dinámicamente -->
                </table>

                <!-- Tabla de todas las clases -->
                <h3>Todas las Clases</h3>
                <table border=1 id="tablaTodas">
                    <!-- Aquí se llenarán todas las clases dinámicamente -->
                </table>

                <!-- Botones para mover clases entre tablas -->
                <div>
                    <button onclick="moverClase('tablaTodas', 'tablaAsignadas')">Agregar Clase</button>
                    <button onclick="moverClase('tablaAsignadas', 'tablaTodas')">Quitar Clase</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/asignaConvocatoria.js"></script>
</body>

</html>
