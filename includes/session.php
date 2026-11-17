<?php
date_default_timezone_set("America/Mexico_City");

// Iniciar o recuperar la sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Solicitud para destruir la sesión actual
if (isset($_GET["reiniciar"]) && $_GET["reiniciar"] === "1") {

    $_SESSION = [];

    // Destruir la sesión anterior
    session_destroy();

    // Redirigir para crear una sesión nueva
    header("Location: index.php?nueva=1");
    exit;
}

// Crear una nueva sesión después de destruir la anterior
if (isset($_GET["nueva"]) && $_GET["nueva"] === "1") {

    // Generar un identificador de sesión nuevo
    session_regenerate_id(true);

    // Registrar la nueva hora inicial
    $_SESSION["hora_inicio"] = time();

    // Limpiar la URL
    header("Location: index.php");
    exit;
}

// Registrar la hora inicial si todavía no existe
if (!isset($_SESSION["hora_inicio"])) {
    $_SESSION["hora_inicio"] = time();
}

// Obtener las marcas de tiempo
$horaInicioTimestamp = $_SESSION["hora_inicio"];
$horaActualTimestamp = time();

// Calcular el tiempo activo
$tiempoActivo = $horaActualTimestamp - $horaInicioTimestamp;

// Convertir a minutos y segundos
$minutosActivos = intdiv($tiempoActivo, 60);
$segundosActivos = $tiempoActivo % 60;

// Formatear las horas
$horaInicio = date("H:i:s", $horaInicioTimestamp);
$horaActual = date("H:i:s", $horaActualTimestamp);

?>