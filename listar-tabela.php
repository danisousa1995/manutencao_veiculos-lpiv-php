<?php
require 'Banco.php';
require 'Tabela.php';
$tabela = new Tabela('marca');
$tabela->inserir(['Jaguar']);
$tabela->inserir(['Ferrari']);

$registros = $tabela->obterRegistros();
$tabela2 = new Tabela('Modelo');
$tabela2->inserir(['Luxo', 1]);
$tabela2->inserir(['Sedan', 1]);
$marcas = $tabela2->obterRegistros();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listando registros da tabela</title>
    </head>
    <body>
        <h1>Listando registros da tabela</h1>
        <h2>TABELA: <?=$tabela->nome;?></h2>
        <ul>
            <?php foreach ($registros as $marca): ?>
         <li><?= $departamento['rowid']?> - <?= $marca['nome']?></li>
            <?php endforeach; ?>
        </ul>
        
        <hr>
        
        <h2>TABELA: <?=$tabela2->nome;?></h2>
        <ul>
            <?php foreach ($modelos as $modelo): ?>
         <li><?= $empregado['rowid']?> - <?= $modelo['marca_id']?> - <?= $modelo['nome']?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>