<?php
// Definir funciones para cada problema
function problema_a($x, $y) {
    return (1/$x) + (($x + $y)/3) + 2 * ($x/$y);
}

function problema_b($x) {
    return ((1/2) * $x + (3 + $x/2) * (2 * pow($x, 2))) / ((2 + 3) * $x);
}

function problema_c($x) {
    return (sqrt((2 * $x) ** 2 + pow(3, 3)) / 5) + sqrt(pow($x, 2));
}

function problema_d($x) {
    return ((1/2 + 1/4 + 1/8) * pow($x, 1/3)) / ((sqrt($x) / 2) + (3 * pow($x, 2) / 4));
}

function problema_e($x) {
    return sqrt((pow($x, 2) / 2 + 1 / sqrt($x)) / (3 + (1/2) * pow($x, 3)));
}

$x = isset($_GET['x']) ? (int)$_GET['x'] : 2;
$y = isset($_GET['y']) ? (int)$_GET['y'] : 4;

echo '<img src="prob1.png"; width="300">' . "<br>"; 
echo "Resultado <b>a: " . problema_a($x, $y) ."</b>" . "<br>" . "<br>";
echo '<img src="probB.png"; width="200">' . "<br>";
echo "Resultado <b>b: " . problema_b($x) . "</b>" . "<br>" . "<br>";
echo '<img src="prob3.png"; width="200">' . "<br>";
echo "Resultado <b>c: " .  number_format(problema_c($x), 1) . "</b>" . "<br>" . "<br>";
echo '<img src="prob4.png"; width="200">' . "<br>";
echo "Resultado <b>d: " . problema_d($x) . "</b>" . "<br>" . "<br>";
echo '<img src="prob5.png"; width="300">' . "<br>";
echo "Resultado <b>e: " . problema_e($x) . "</b>" . "<br>" . "<br>";
?>