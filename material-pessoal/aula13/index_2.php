<?php

// NAMESPACE 

require('index_1.php');

// $matematica = new matematica();
// Fatal error: Uncaught Error: Class "matematica" not found in C:\laragon\www\aula13\index_2.php:7 Stack trace: #0 {main} thrown in C:\laragon\www\aula13\index_2.php on line 7

$matematica = new classes_principais\matematica();
echo $matematica->adicionar(1,4);
echo "<br>";
echo $matematica->subtrair(5,1);