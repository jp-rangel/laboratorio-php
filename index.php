<?php
$titulo = "Inicio | Laboratorio PHP";
include("includes/header.php");
include("includes/menu.php");
?>

<main class="container">

    <section class="welcome">
        <span class="tag">PROYECTO PHP</span>

        <h2>Bienvenido al Laboratorio PHP</h2>

        <p>
            Explora los fundamentos de PHP mediante ejemplos prácticos
            que muestran cómo funcionan las variables, los tipos de datos,
            las estructuras de control, los arreglos y las sesiones.
        </p>

        <a href="variables.php" class="btn">
            Comenzar aprendizaje →
        </a>
    </section>

    <section class="section">
        <h2>Contenido del laboratorio</h2>

        <div class="cards">

            <article class="card">
                <span class="card-number">01</span>
                <h3>Variables</h3>
                <p>Declaración de variables y tipos de datos en PHP.</p>
                <a href="variables.php">Explorar →</a>
            </article>

            <article class="card">
                <span class="card-number">02</span>
                <h3>Condicionales</h3>
                <p>Decisiones mediante if, elseif, else y switch.</p>
                <a href="condicionales.php">Explorar →</a>
            </article>

            <article class="card">
                <span class="card-number">03</span>
                <h3>Bucles</h3>
                <p>Repetición de instrucciones mediante ciclos.</p>
                <a href="bucles.php">Explorar →</a>
            </article>

            <article class="card">
                <span class="card-number">04</span>
                <h3>Arreglos</h3>
                <p>Organización y recorrido de conjuntos de datos.</p>
                <a href="arreglos.php">Explorar →</a>
            </article>

            <article class="card">
                <span class="card-number">05</span>
                <h3>Sesiones</h3>
                <p>Almacenamiento temporal de información del usuario.</p>
                <a href="sesiones.php">Explorar →</a>
            </article>

        </div>
    </section>

</main>

<?php include("includes/footer.php"); ?>