<?php
$titulo = "Condicionales | Laboratorio PHP";

// Ejemplo para if, elseif y else
$calificacion = 85;
$asistencia = 90;

if ($calificacion >= 90) {
    $resultado = "Excelente";
    $color = "success";
} elseif ($calificacion >= 70) {
    $resultado = "Aprobado";
    $color = "success";
} else {
    $resultado = "Reprobado";
    $color = "danger";
}

// Ejemplo de if y else
if ($asistencia >= 80) {
    $estadoAsistencia = "Asistencia suficiente";
} else {
    $estadoAsistencia = "Asistencia insuficiente";
}

// Ejemplo de switch
$opcion = 2;

switch ($opcion) {
    case 1:
        $seccion = "Variables";
        break;

    case 2:
        $seccion = "Condicionales";
        break;

    case 3:
        $seccion = "Bucles";
        break;

    case 4:
        $seccion = "Arreglos";
        break;

    default:
        $seccion = "Opción no válida";
}

include("includes/header.php");
include("includes/menu.php");
?>

<main class="container">

    <section class="page-heading">
        <span class="tag">FUNDAMENTOS DE PHP</span>
        <h2>Estructuras condicionales</h2>
        <p>
            Las estructuras condicionales permiten que un programa tome
            decisiones dependiendo de si una condición se cumple o no.
        </p>
    </section>

    <section class="content-section">
        <h3>1. Condicional if, elseif y else</h3>

        <p>
            Estas instrucciones permiten evaluar diferentes condiciones.
            PHP ejecuta el bloque correspondiente a la primera condición
            que resulte verdadera.
        </p>

        <div class="code-example">
            <code>
                if ($calificacion >= 90) { ... }<br>
                elseif ($calificacion >= 70) { ... }<br>
                else { ... }
            </code>
        </div>

        <div class="result-box">
            <span class="result-label">Resultado de la evaluación</span>
            <h2><?= $calificacion ?> / 100</h2>
            <span class="type-badge"><?= $resultado ?></span>
        </div>
    </section>

    <section class="content-section">
        <h3>2. Condicional if y else</h3>

        <p>
            Permite elegir entre dos posibles resultados dependiendo
            de una condición.
        </p>

        <div class="stats-grid">
            <div class="stat-card">
                <span>Porcentaje de asistencia</span>
                <strong><?= $asistencia ?>%</strong>
            </div>

            <div class="stat-card">
                <span>Evaluación</span>
                <strong><?= $estadoAsistencia ?></strong>
            </div>
        </div>
    </section>

    <section class="content-section">
        <h3>3. Estructura switch</h3>

        <p>
            switch permite comparar el valor de una variable con diferentes
            alternativas. La instrucción break evita que se ejecuten
            los siguientes casos.
        </p>

        <div class="code-example">
            <code>
                switch ($opcion) {<br>
                &nbsp;&nbsp;case 1: ... break;<br>
                &nbsp;&nbsp;case 2: ... break;<br>
                &nbsp;&nbsp;default: ...<br>
                }
            </code>
        </div>

        <div class="result-box">
            <span class="result-label">Opción seleccionada: <?= $opcion ?></span>
            <h2><?= htmlspecialchars($seccion) ?></h2>
        </div>
    </section>

</main>

<?php include("includes/footer.php"); ?>