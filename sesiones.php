<?php
$titulo = "Sesiones | Laboratorio PHP";

include("includes/header.php");
include("includes/menu.php");

// Obtener información almacenada en la sesión
$horaRegistrada = $_SESSION["hora_inicio"];
$estadoSesion = session_status() === PHP_SESSION_ACTIVE
    ? "Activa"
    : "Inactiva";
?>

<main class="container">

    <section class="page-heading">
        <span class="tag">FUNDAMENTOS DE PHP</span>
        <h2>Manejo de sesiones</h2>

        <p>
            Las sesiones permiten almacenar información temporal de un usuario
            en el servidor. Esta información permanece disponible mientras
            el usuario navega por diferentes páginas del sitio.
        </p>
    </section>

    <section class="content-section">

        <h3>1. Inicio de sesión</h3>

        <p>
            La función session_start() permite iniciar o recuperar una sesión.
            En este proyecto se utiliza para identificar la visita del usuario.
        </p>

        <div class="code-example">
            <code>
                session_start();<br><br>
                if (!isset($_SESSION["hora_inicio"])) {<br>
                &nbsp;&nbsp;$_SESSION["hora_inicio"] = time();<br>
                }
            </code>
        </div>

        <div class="result-box">
            <span class="result-label">Estado de la sesión</span>
            <h2><?= $estadoSesion ?></h2>
            <p>
                La sesión se encuentra almacenada y disponible
                durante la navegación.
            </p>
        </div>

    </section>

    <section class="content-section">

        <h3>2. Información almacenada</h3>

        <p>
            La variable superglobal $_SESSION permite guardar y consultar
            información entre diferentes páginas.
        </p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Dato</th>
                        <th>Valor almacenado</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Hora inicial (time)</td>
                        <td><?= $horaRegistrada ?></td>
                    </tr>

                    <tr>
                        <td>Hora de inicio</td>
                        <td><?= date("H:i:s", $horaRegistrada) ?></td>
                    </tr>

                    <tr>
                        <td>Hora actual</td>
                        <td><?= date("H:i:s", time()) ?></td>
                    </tr>

                    <tr>
                        <td>Tiempo activo</td>
                        <td>
                            <?= $minutosActivos ?> minutos
                            <?= $segundosActivos ?> segundos
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>

    <section class="content-section">

        <h3>3. Cálculo del tiempo activo</h3>

        <p>
            La función time() obtiene la marca de tiempo actual.
            Al restarle la hora inicial almacenada en $_SESSION,
            obtenemos los segundos que han transcurrido.
        </p>

        <div class="code-example">
            <code>
                $tiempoActivo = time() - $_SESSION["hora_inicio"];<br><br>
                $minutos = intdiv($tiempoActivo, 60);<br>
                $segundos = $tiempoActivo % 60;
            </code>
        </div>

        <div class="stats-grid">

            <div class="stat-card">
                <span>Hora de inicio</span>
                <strong><?= $horaInicio ?></strong>
            </div>

            <div class="stat-card">
                <span>Hora actual</span>
                <strong><?= date("H:i:s") ?></strong>
            </div>

            <div class="stat-card">
                <span>Tiempo transcurrido</span>
                <strong>
                    <?= $minutosActivos ?>:<?= str_pad($segundosActivos, 2, "0", STR_PAD_LEFT) ?>
                </strong>
            </div>

        </div>

    </section>

    <section class="content-section">

        <h3>4. Destrucción y reinicio de sesión</h3>

        <p>
            session_destroy() permite eliminar los datos de una sesión.
            En este proyecto se utiliza para finalizar la sesión anterior
            y comenzar una nueva visita con otra hora inicial.
        </p>

        <div class="code-example">
            <code>
                $_SESSION = [];<br>
                session_destroy();<br><br>
                // Se inicia una nueva sesión<br>
                // y se registra una nueva hora con time().
            </code>
        </div>

        <a href="index.php?reiniciar=1" class="btn">
            Reiniciar sesión ↻
        </a>

    </section>

</main>

<?php include("includes/footer.php"); ?>