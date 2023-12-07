<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Instituto</title>
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
        <?php
        $convocatorias = DB::selectUniversal($conexion, 'convocatoria');

        foreach ($convocatorias as $convocatoria) :
        echo "<p>Nueva Convocatoria Generada:</p>";
        echo "<ul>";
        echo "<li>Tipo: " . $convocatoria['tipo'] . "</li>";
        echo "<li>Fecha de Inicio: " . $convocatoria['fechaInicio'] . "</li>";
        echo "<li>Fecha de Fin: " . $convocatoria['fechaFin'] . "</li>";
        echo "<li>Destino: " . $convocatoria['destino'] . "</li>";
        echo "</ul>";
        endforeach;
        ?>
    </section>

</body>
</html>