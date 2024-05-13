<?php
$variable = 1;
?>
<?= "" //"El número es:" . $variable . "<br>"?>

<?php

$diccionario = array(
    [
        'Nombre' => 'Jeanpier Johann',
        "Apellido" => "Maza Tamariz",
        "Enlace" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png",
        "Descripcion" => "Es un estudiante de 10mo ciclo, regular."
    ],
    [
        'Nombre' => 'Thayli Milagros',
        "Apellido" => "Delgado Julca",
        "Enlace" => "https://png.pngtree.com/png-vector/20190406/ourmid/pngtree-html-file-document-icon-png-image_913761.jpg",
        "Descripcion" => "Es una Ingeniera de la Universidad Nacional Santiago Antúnez de Mayolo."
    ],
    [
        'Nombre' => 'Juan Miguel',
        "Apellido" => "Sanchez Julca",
        "Enlace" => "https://w7.pngwing.com/pngs/241/797/png-transparent-cascading-style-sheets-css3-javascript-logo-world-wide-web-blue-angle-text-thumbnail.png",
        "Descripcion" => "Es un Carpintero de profesión con un grado de estudio, Primario."
    ],
    [
        'Nombre' => 'Milena Milagros',
        "Apellido" => "Mendoza Milla",
        "Enlace" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFZ0Gy068hsbTG6MVcSBE11zBx4gRtcPgk3p5kdZnrbg&s",
        "Descripcion" => "Es el Abogado de la Universidad Nacional Santiago Antúnez de Mayolo"
    ],
    [
        'Nombre' => 'Noemi Miriam',
        "Apellido" => "Julca Julca",
        "Enlace" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzydXo9YYB2dFu_6O_b8SsY4u2ZTVOiG9OwT798zyGxQ&s",
        "Descripcion" => "Es un docente de la Universidad Nacional Santiago Antúnez de Mayolo"
    ]
);

foreach ($diccionario as $key => $value) {
    echo "";
}

define('LOGO','https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png');

?>

<head>
    <title>Perfiles</title>
    <link rel="icon" type="image/ico" href="<?= LOGO ?>">
</head>

<div class="contenido">
    <?php foreach ($diccionario as $dicc) : ?>
        <div>
            <img src=" <?= $dicc["Enlace"] ?>" alt="" style="height: 90px;">
            <h2>
                <?= $dicc["Nombre"] ?>
                <?= $dicc["Apellido"] ?>
            </h2>
            <hgroup>
                <?= $dicc["Descripcion"] ?>
            </hgroup>
        </div>
    <?php endforeach; ?>
</div>

<style>
    body {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .contenido {
        display: flex;
        justify-content: space-around;
        gap: 10px;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .contenido div {
        margin: 15px;
        text-align: center;
        border-radius: 15px;
        box-shadow: 5px 2px 10px 0px #000;
        padding: 5px;
        max-width: 200px;
        width: 100%;
        transition: all 1.5s;
    }

    h2 {
        color: #000;
    }

    hgroup {
        color: #aa90ff;
    }

    .contenido div:hover {
        transform: scale(1.1);
    }
</style>
