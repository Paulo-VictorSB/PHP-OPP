<?php

require_once 'veiculos.php';

$veiculos = [];

$file = fopen('dados.csv', 'r');
while(!feof($file)){
    $linha = fgetcsv($file);
    if($linha){
        switch ($linha[0]) {
            case 'automovel':
                $veiculos[] = new Automovel($linha);
                break;
            case 'aviao':
                $veiculos[] = new Aviao($linha);
                break;
            case 'barco':
                $veiculos[] = new Barco($linha);
                break;
            default:
                break;
        }
    }
}
fclose($file);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos</title>
</head>
<body>
    
    <h1>Automóvel</h1>

    <ul>
    <?php foreach($veiculos as $veiculo): ?>
        <?php if($veiculo->get_tipo() == 'automovel'):?>
            <li><?= $veiculo->apresentar() ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    
    <hr>

    <h1>Avião</h1>

    <ul>
    <?php foreach($veiculos as $veiculo): ?>
        <?php if($veiculo->get_tipo() == 'aviao'):?>
            <li><?= $veiculo->apresentar() ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>

    <hr>

    <h1>Barco</h1>

    <ul>
    <?php foreach($veiculos as $veiculo): ?>
        <?php if($veiculo->get_tipo() == 'barco'):?>
            <li><?= $veiculo->apresentar() ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>

</body>
</html>