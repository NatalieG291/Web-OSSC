<p>Hola Mundo</p>
<?php
$var = 5;
$var2 = 10;

for ($i = 0; $i < 10; $i++) {
    $var++;
    $var2++;
    $suma = $var + $var2;
    echo '<p>' . 'El valor de la suma es: ' . $suma . '<p>';
}
?>