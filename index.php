<!-- Llamar una API - Básico: CURL -->
<?php
const API_URL = "https://www.whenisthenextmcufilm.com/api";
// Inicializar una nueva sesión de curl
$ch = curl_init(API_URL);
// Recibir el resultado
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Ejecutar la petición y guardamos el resultado
$result = curl_exec($ch); //Podemos obtener el código HTTP
$data = json_decode($result, true);
curl_close($ch);

// var_dump($data); //Mostrar API

?>

<head>
    <title><?= $data["title"] ?></title>
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>
    <section>
        <h1>La próxima película de Marvel</h1>
        <img src="<?= $data["poster_url"] ?>" alt="<?= $data["title"] ?>" 
        style="border-radius: 16px;">
    </section>
    <hgroup>
        <h2><?= $data["title"] ?></h2>
        <h6>Fecha de estreno: <?= $data["release_date"] ?></h6>
        <h6>Restan: <?= $data["days_until"] ?> días.</h6>
        <p>La siguiente película es <?= $data["following_production"]["title"] ?></p>
    </hgroup>
    <br>
    <pre style="font-size: 8px; overflow: scroll; height: 250px;">
        <?php var_dump($data) ?>
    </pre>
</main>


<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section {
        text-align: center;
    }

    hgroup {
        flex-direction: column;
        text-align: start;
    }

    img {
        max-width: 90%;
    }
    pre {
        display: none;
    }
</style>


<!-- (curl EnlaceAPI) : Para llamar una API -->
