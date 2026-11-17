<?php
$titulo = "Bucles | Laboratorio PHP";

// Datos para foreach
$estudiantes = [
    "Ana" => 95,
    "Carlos" => 82,
    "María" => 68,
    "Pedro" => 90,
    "Luis" => 75
];

include("includes/header.php");
include("includes/menu.php");
?>

<main class="container">

    <section class="page-heading">
        <span class="tag">FUNDAMENTOS DE PHP</span>
        <h2>Bucles y estructuras repetitivas</h2>
        <p>
            Los bucles permiten ejecutar un bloque de instrucciones varias
            veces sin tener que escribir el mismo código repetidamente.
        </p>
    </section>

    <section class="content-section">
        <h3>1. Ciclo for</h3>

        <p>
            El ciclo for se utiliza cuando conocemos la cantidad de
            repeticiones que necesitamos realizar.
        </p>

        <div class="code-example">
            <code>
                for ($i = 1; $i <= 5; $i++) {<br>
                &nbsp;&nbsp;echo $i;<br>
                }
            </code>
        </div>

        <div class="number-grid">
            <?php
            for ($i = 1; $i <= 5; $i++):
            ?>
                <div class="number-card">
                    <?= $i ?>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <section class="content-section">
        <h3>2. Ciclo while</h3>

        <p>
            El ciclo while repite instrucciones mientras la condición
            especificada sea verdadera.
        </p>

        <div class="code-example">
            <code>
                $contador = 1;<br><br>
                while ($contador <= 5) {<br>
                &nbsp;&nbsp;echo $contador;<br>
                &nbsp;&nbsp;$contador++;<br>
                }
            </code>
        </div>

        <div class="number-grid">
            <?php
            $contador = 1;

            while ($contador <= 5):
            ?>
                <div class="number-card">
                    <?= $contador ?>
                </div>
            <?php
                $contador++;
            endwhile;
            ?>
        </div>
    </section>

    <section class="content-section">
        <h3>3. Ciclo foreach</h3>

        <p>
            foreach permite recorrer todos los elementos de un arreglo.
            En este ejemplo se recorren los nombres y calificaciones
            de varios estudiantes.
        </p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Estudiante</th>
                        <th>Calificación</th>
                        <th>Resultado</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($estudiantes as $nombre => $calificacion): ?>
                        <tr>
                            <td><?= htmlspecialchars($nombre) ?></td>
                            <td><?= $calificacion ?></td>
                            <td>
                                <?php if ($calificacion >= 70): ?>
                                    <span class="type-badge">Aprobado</span>
                                <?php else: ?>
                                    <span class="type-badge danger-badge">Reprobado</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

</main>

<?php include("includes/footer.php"); ?>