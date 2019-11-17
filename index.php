<?php
require 'Banco.php';
require 'Tabela.php';
$tabela = new Tabela('modelo');
$modelos = $tabela->obterRegistros();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <meta charset="UTF-8">
        <title>Listando candidatos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div>
                    <col-md-6>

                        <h1>Lista de Modelos Cadastrados</h1>   
                        <a class="btn btn-secondary" a href="modelo.php">Adicionar modelo</a> 
                        <a class="btn btn-secondary" a href="manutencao.php">Voltar a Página Inicial</a> 
                        <table class="table table-striped">
                            <tr>
                                <td>#</td>
                                <td>Modelo</td>
                                <td>Marca</td>
                                <td colspan="2">Ações</td>
                            </tr>
            <?php foreach ($modelos as $modelo): ?>
            <tr>
                <td><?= $modelo['rowid']; ?></td>
                <td><?= $modelo['nome']; ?></td>
                <td>
                <a class="btn btn-secondary" a href="modelo.php?rowid=<?= $modelo['rowid'] ?>">
                                            Editar</a>
                                            </td>
                                    <td>
    <a class="btn btn-danger" a href="excluir.php?rowid=<?=$modelo['rowid']?>">
                                            Excluir</a>
                                    </td>
              
            </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>