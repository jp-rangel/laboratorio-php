<?php
$titulo = "Variables | Laboratorio PHP";

$nombre = "Juan";
$edad = 19;
$promedio = 9.2;
$activo = true;

$materias = ["Programación", "Redes", "Bases de datos"];

$variables = [
    "Nombre" => $nombre,
    "Edad" => $edad,
    "Promedio" => $promedio,
    "Activo" => $activo,
    "Materias" => $materias
];

include("includes/header.php");
include("includes/menu.php");
?>

<main class="container">

    <section class="page-heading">
        <span class="tag">FUNDAMENTOS DE PHP</span>
        <h2>Variables y tipos de datos</h2>
        <p>
            Las variables permiten almacenar información que puede utilizarse
            y modificarse durante la ejecución de un programa.
            En PHP, las variables comienzan con el símbolo $.
        </p>
    </section>

    <section class="content-section">
        <h3>1. Declaración de variables</h3>
        <p>
            En PHP no es necesario indicar el tipo de dato al declarar una
            variable. El lenguaje identifica automáticamente el tipo según
            el valor que se le asigna.
        </p>

        <div class="code-example">
            <code>
                $nombre = "Juan";<br>
                $edad = 19;<br>
                $promedio = 9.2;<br>
                $activo = true;
            </code>
        </div>
    </section>

    <section class="content-section">
        <h3>2. Tipos de datos</h3>
        <p>
            PHP admite diferentes tipos de datos. A continuación se muestran
            variables reales y sus respectivos tipos.
        </p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Variable</th>
                        <th>Contenido</th>
                        <th>Tipo de dato</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($variables as $clave => $valor): ?>
                        <tr>
                            <td>$<?= htmlspecialchars($clave) ?></td>
                            <td>
                                <?php
                                if (is_array($valor)) {
                                    echo htmlspecialchars(implode(", ", $valor));
                                } elseif (is_bool($valor)) {
                                    echo $valor ? "true" : "false";
                                } else {
                                    echo htmlspecialchars((string)$valor);
                                }
                                ?>
                            </td>
                            <td>
                                <span class="type-badge">
                                    <?= gettype($valor) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="content-section">
        <h3>3. Uso de echo</h3>
        <p>
            La instrucción echo permite mostrar información en el navegador.
            En este ejemplo se utilizan las variables declaradas anteriormente.
        </p>

        <div class="result-box">
            <?php
            echo "Mi nombre es " . $nombre . " y tengo " . $edad . " años.";
            ?>
            <br>
            <?php
            echo "Mi promedio es de " . $promedio . ".";
            ?>
        </div>
    </section>

    <section class="content-section">
        <h3>4. Funciones date() y count()</h3>
        <p>
            date() permite obtener la fecha y hora actual con el formato
            indicado. count() permite conocer la cantidad de elementos
            almacenados en un arreglo.
        </p>

        <div class="stats-grid">
            <div class="stat-card">
                <span>Fecha actual</span>
                <strong><?= date("d/m/Y") ?></strong>
            </div>

            <div class="stat-card">
                <span>Hora actual</span>
                <strong><?= date("H:i:s") ?></strong>
            </div>

            <div class="stat-card">
                <span>Cantidad de materias</span>
                <strong><?= count($materias) ?></strong>
            </div>
        </div>
    </section>

    <section class="content-section">
        <h3>5. Arreglo como tipo de dato</h3>
        <p>La variable $materias almacena varios valores dentro de una misma estructura.</p>

        <ul class="data-list">
            <?php foreach ($materias as $materia): ?>
                <li><?= htmlspecialchars($materia) ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

</main>

<?php include("includes/footer.php"); ?>