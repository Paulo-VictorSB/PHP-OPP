<?php
    
require 'produtos.php';

$file = fopen('produtos.csv', 'r');
$produtos = [];

while(!feof($file)){
    $linha = fgetcsv($file);
    if($linha){
        switch($linha[0]){
            case 'Móveis':
                $produtos[] = new Movel($linha);
                break;
            case 'Brinquedos':
                $produtos[] = new Brinquedo($linha);
                break;
            case 'Eletrodomésticos':
                $produtos[] = new Eletrodomestico($linha);
                break;
            case 'Eletrônicos':
                $produtos[] = new Eletronico($linha);
                break;
            case 'Livros':
                $produtos[] = new Livro($linha);
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
    <title>Gerenciamento de Produtos e Categorias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    

    <table>
        <thead>
            <th>CATEGORIA</th>
            <th>NOME</th>
            <th>PREÇO</th>
        </thead>
        <tbody>
    <?php foreach($produtos as $produto): ?>
        <?php if($produto->get_categoria() == 'Eletrônicos'): ?>
            <tr>
                <td><?=$produto->get_categoria()?></td>
                <td><?=$produto->get_nome()?></td>
                <td><?=$produto->get_preco()?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    </tbody>
    </table>

    <table>
        <thead>
            <th>CATEGORIA</th>
            <th>NOME</th>
            <th>PREÇO</th>
        </thead>
        <tbody>
    <?php foreach($produtos as $produto): ?>
        <?php if($produto->get_categoria() == 'Móveis'): ?>
            <tr>
                <td><?=$produto->get_categoria()?></td>
                <td><?=$produto->get_nome()?></td>
                <td><?=$produto->get_preco()?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    </tbody>
    </table>

    <table>
        <thead>
            <th>CATEGORIA</th>
            <th>NOME</th>
            <th>PREÇO</th>
        </thead>
        <tbody>
    <?php foreach($produtos as $produto): ?>
        <?php if($produto->get_categoria() == 'Livros'): ?>
            <tr>
                <td><?=$produto->get_categoria()?></td>
                <td><?=$produto->get_nome()?></td>
                <td><?=$produto->get_preco()?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    </tbody>
    </table>

    <table>
        <thead>
            <th>CATEGORIA</th>
            <th>NOME</th>
            <th>PREÇO</th>
        </thead>
        <tbody>
    <?php foreach($produtos as $produto): ?>
        <?php if($produto->get_categoria() == 'Brinquedos'): ?>
            <tr>
                <td><?=$produto->get_categoria()?></td>
                <td><?=$produto->get_nome()?></td>
                <td><?=$produto->get_preco()?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    </tbody>
    </table>

    <table>
        <thead>
            <th>CATEGORIA</th>
            <th>NOME</th>
            <th>PREÇO</th>
        </thead>
        <tbody>
    <?php foreach($produtos as $produto): ?>
        <?php if($produto->get_categoria() == 'Eletrodomésticos'): ?>
            <tr>
                <td><?=$produto->get_categoria()?></td>
                <td><?=$produto->get_nome()?></td>
                <td><?=$produto->get_preco()?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    </tbody>
    </table>

</body>
</html>