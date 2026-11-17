<?php
require_once __DIR__ . "/session.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? "Laboratorio PHP"; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header class="header">
    <div class="header-content">
        <div class="logo">
            <span class="logo-icon">&lt;/&gt;</span>
            <div>
                <h1>Laboratorio PHP</h1>
                <p>Aprendiendo PHP desde cero</p>
            </div>
        </div>

        <span class="header-version">PHP 8.4</span>
    </div>
</header>