<?php
$titulo = "Arreglos | Laboratorio PHP";

// 1. Arreglo indexado
$frutas = ["Manzana", "Naranja", "Plátano", "Uva", "Sandía"];

// 2. Arreglo asociativo
$estudiante = [
    "nombre" => "Carlos",
    "edad" => 20,
    "carrera" => "Ingeniería en Sistemas",
    "semestre" => 5
];

// 3. Arreglo multidimensional
$productos = [
    [
        "nombre" => "Teclado",
        "precio" => 450,
        "disponible" => true
    ],
    [
        "nombre" => "Mouse",
        "precio" => 250,
        "disponible" => true
    ],
    [
        "nombre" => "Monitor",
        "precio" => 3200,
        "disponible" => false
    ],
    [
        "nombre" => "Audífonos",
        "precio" => 800,
        "disponible" => true
    ]
];

include("includes/header.php");
include("includes/menu.php");
?>

<main class="container">

    <section class="page-heading">
        <span class="tag">FUNDAMENTOS DE PHP</span>
        <h2>Arreglos en PHP</h2>
        <p>
            Los arreglos permiten almacenar varios valores dentro de una
            sola variable. Son útiles para organizar, consultar y recorrer
            conjuntos de información.
        </p>
    </section>

    <section class="content-section">
        <h3>1. Arreglo indexado</h3>

        <p>
            Un arreglo indexado almacena elementos identificados mediante
            posiciones numéricas que comienzan desde cero.
        </p>

        <div class="code-example">
            <code>
                $frutas = ["Manzana", "Naranja", "Plátano"];
            </code>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Índice</th>
                        <th>Fruta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($frutas as $indice => $fruta): ?>
                        <tr>
                            <td><?= $indice ?></td>
                            <td><?= htmlspecialchars($fruta) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <p class="info-text">
            Total de frutas almacenadas: <strong><?= count($frutas) ?></strong>
        </p>
    </section>

    <section class="content-section">
        <h3>2. Arreglo asociativo</h3>

        <p>
            Un arreglo asociativo utiliza claves con nombre para identificar
            cada valor, en lugar de utilizar únicamente índices numéricos.
        </p>

        <div class="code-example">
            <code>
                $estudiante = [<br>
                &nbsp;&nbsp;"nombre" => "Carlos",<br>
                &nbsp;&nbsp;"edad" => 20,<br>
                &nbsp;&nbsp;"carrera" => "Ingeniería en Sistemas"<br>
                ];
            </code>
        </div>

        <div class="data-list">
            <?php foreach ($estudiante as $clave => $valor): ?>
                <div class="data-row">
                    <strong><?= htmlspecialchars(ucfirst($clave)) ?></strong>
                    <span><?= htmlspecialchars((string)$valor) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="content-section">
        <h3>3. Arreglo multidimensional</h3>

        <p>
            Un arreglo multidimensional contiene otros arreglos en su interior.
            Esto permite organizar datos relacionados, como una lista
            de productos con sus respectivos atributos.
        </p>

        <div class="code-example">
            <code>
                $productos = [<br>
                &nbsp;&nbsp;[ "nombre" => "Teclado", "precio" => 450 ],<br>
                &nbsp;&nbsp;[ "nombre" => "Mouse", "precio" => 250 ]<br>
                ];
            </code>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Disponibilidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td><?= htmlspecialchars($producto["nombre"]) ?></td>
                            <td>$<?= number_format($producto["precio"], 2) ?></td>
                            <td>
                                <?php if ($producto["disponible"]): ?>
                                    <span class="type-badge">Disponible</span>
                                <?php else: ?>
                                    <span class="type-badge danger-badge">Agotado</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <p class="info-text">
            Productos registrados: <strong><?= count($productos) ?></strong>
        </p>
    </section>

</main>

<?php include("includes/footer.php"); ?>