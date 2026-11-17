<section class="session-panel">
    <div class="session-heading">
        <div>
            <span class="session-indicator"></span>
            <strong>Sesión activa</strong>
        </div>

        <span class="session-caption">Información en tiempo real de la visita</span>
    </div>

    <div class="session-stats">

        <div class="session-stat">
            <span>Hora de inicio</span>
            <strong><?= $horaInicio ?></strong>
        </div>

        <div class="session-stat">
            <span>Hora actual</span>
            <strong><?= $horaActual ?></strong>
        </div>

        <div class="session-stat">
            <span>Tiempo activo</span>
            <strong>
                <?= $minutosActivos ?> min
                <?= $segundosActivos ?> seg
            </strong>
        </div>

    </div>

    <p class="session-note">
        La información se conserva mediante sesiones PHP mientras navegas
        por el laboratorio.
    </p>
</section>

<footer class="footer">
    <p>Laboratorio PHP</p>
</footer>

</body>
</html>