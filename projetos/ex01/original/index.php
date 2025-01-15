<?php

require('class_numero.php');



$numero_5 = new numero(5);

echo $numero_5->get_numero();
echo "<br>";
echo $numero_5->par_ou_impar();
echo "<br>";
echo $numero_5->raiz_quadrada();
echo "<br>";
echo "<pre>";
print_r($numero_5->tabuada());
echo "</pre>";
echo "<hr>";

$numero_7 = new numero(7);

echo $numero_7->get_numero();
echo "<br>";
echo $numero_7->par_ou_impar();
echo "<br>";
echo $numero_7->raiz_quadrada();
echo "<br>";
echo "<pre>";
print_r($numero_7->tabuada());
echo "</pre>";
echo "<hr>";

$numero_16 = new numero(16);

echo $numero_16->get_numero();
echo "<br>";
echo $numero_16->par_ou_impar();
echo "<br>";
echo $numero_16->raiz_quadrada();
echo "<br>";
echo "<pre>";
print_r($numero_16->tabuada());
echo "</pre>";
echo "<hr>";

$numero_123 = new numero(123);

echo $numero_123->get_numero();
echo "<br>";
echo $numero_123->par_ou_impar();
echo "<br>";
echo $numero_123->raiz_quadrada();
echo "<br>";
echo "<pre>";
print_r($numero_123->tabuada());
echo "</pre>";