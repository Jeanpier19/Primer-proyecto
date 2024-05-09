<?php
//Variables
$a = "Jeanpier";
$boleano = true;
$age = 12;
$newAge = 12 + '1';
//Forzar la variable
$age = (bool) 0;
//Concatenación
$output = "Hola \"$a\", como estas? 😊";
$output .= "Dime que tal?";
?>

<?php
// var_dump($a); //Muestra datos.
// echo gettype($age); //Muestra el tipo de dato.
// ❎ is_int($a); //Tipo de dato
?>

<?php
//Constante global
define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');
//Constante local
const NOMBRE = 'Johann';
?>

<?php
//If
$ages = 12;
$isOLD = $ages > 40;
if ($isOLD) {
    echo "<h2>Eres joven</h2>";
} else {
    echo "<h2>Eres viejo</h2>";
}
?>

<!-- If mejorado -->
<?php if ($isOLD) : ?>
    <h2>Eres joven</h2>
<?php elseif ($isOLD) : ?>
    <h2>Eres viejo</h2>
<?php else : ?>
    <h2>Eres adulto</h2>
<?php endif; ?>

<!-- If Ternaria  -->
<?php
$autoAge = $isOLD
    ? 'Eres viejo'
    : 'Eres joven';
?>
<h2><?= $autoAge ?></h2>

<!-- match -->
<?php
$Edad = 40;
// ❎$outputEdad = match (true) {
//     $Edad < 2 => "Eres bebé",
//     $Edad < 42 => "Eres Joven",
//     default => "Eres Viejo",
// };
// echo $outputEdad;
?>

<!-- Array -->
<?php
$Frutas = ['Papaya','Uva','Mango',1,2];
$Frutas[] = "Java";
echo implode(", ", $Frutas);
?>

<!-- Iterar Arrays -->
<ul>
<?php foreach ($Frutas as $key => $indice) : ?>
    <li><?= $key." ".$indice ?></li>
<?php endforeach; ?>
</ul>

<!-- Dicionarios -->
<?php
$Dicionario = array(
    "Nombre" => "Juan",
    "Apellido" => "Perez"
);
unset($Dicionario["Apellido"]); //Eliminar
$Dicionario["Nombre"] = "Jeanpier Johann";//Editar
echo "Mi nombre es ".$Dicionario["Nombre"];//Mostrar Uno
foreach ($Dicionario as $key => $value) {
    echo "<br>".$key.": ".$value;
}
?>

<!-- Mostrar un global -->
<img src="<?= LOGO_URL ?>" alt="PHP Logo">
<!-- Mostrando una constante -->
<h1><?= NOMBRE ?></h1>

<h1>
    <!-- echo -->
    <?= "Hola " . $a . ", Edad: " . $newAge . "<br>" ?>
    <!-- Salto de linea -->
    <?= "<br>Salto<br> de linea" ?>
</h1>

<!-- Estilo Css -->
<style>
    body {
        background-color: #f0f;
    }
</style>

<!-- Llamar tu página desde un servidor local -->
<!-- php -S localhost:8000 -->
