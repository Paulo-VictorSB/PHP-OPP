<?php

require_once('humanos.php');

$dados = [
   ['m', 'João Ribeiro'],
   ['f', 'Ana Silva'],
   ['M', 'Carlos Martins'],
   ['m', 'Joaquim Santos'],
   ['f', 'Marta Rodrigues'],
   ['M', 'Rui Fernandes'],
   ['F', 'Márcia Antunes'],
   ['g', 'Pantufa'],
   ['f', 'Carla Maria'],
   ['M', 'Fernando Joaquim'],
   ['m', 'Ricardo Moita'],
   ['c', 'Lassie'],
   ['F', 'Daniela Cardoso'],
   ['F', 'Susana Dinis'],
];

$humanos = new Humanos();

foreach ($dados as $pessoa) {
   $humanos->definir($pessoa[0], $pessoa[1]);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Humanos</title>
</head>
<body>
   
   <h1>Masculinos</h1>

   <?php
      echo "<ul>";
      for($i = 0; $i < count($humanos->get_masculinos()); $i++){
         echo "<li>" . $humanos->get_masculinos()[$i] . "</li>"; 
      }
      echo "</ul>";
   ?>

   <hr>

   <h1>Femininos</h1>

   <?php
      echo "<ul>";
      for($i = 0; $i < count($humanos->get_femininos()); $i++){
         echo "<li>" . $humanos->get_femininos()[$i] . "</li>"; 
      }
      echo "</ul>";
   ?>

   <hr>

   <h1>Desconhecidos</h1>

   <?php
      echo "<ul>";
      for($i = 0; $i < count($humanos->get_desconhecidos()); $i++){
         echo "<li>" . $humanos->get_desconhecidos()[$i] . "</li>"; 
      }
      echo "</ul>";
   ?>

</body>
</html>