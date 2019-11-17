<?php
require 'Banco.php';
require 'Tabela.php';
$tabela = new Tabela('marca');
$modelos = $tabela->obterRegistros();
if (isset($_POST['nome'])) {
    $marcas = new Tabela('modelo');
    $marcas->inserir([$_POST['nome'], $_POST['marca_id']]);
    header('LOCATION: index.php');
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Modelo</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>

       
         <div class="container">
        <div class="row justify-content-center">
        <div class="col-6">

    <h1>Cadastro de Modelo</h1>
    <form method="POST">
        <p>
             <p>
             Id: <br>
         <input class="form-control" type="text" name="marca_id" value="<?= $marcas ?>" readonly>
                            </p>
        <p>
    Modelo: <br>
    <input type="text" class ="form-control"name="nome" required>
    </p>
    <p>
    Marca: <br>
    <input type="text" class ="form-control"name="marca" required>
                    </p>
    <p>
<input type="submit" class="btn btn-primary" value="Gravar">
<input type="button" class ="btn btn-secondary"value="Voltar" onclick="window.location='modelo.php';">
</p>
</form>
</div>
</div>
</div>      
    </body>
</html>
