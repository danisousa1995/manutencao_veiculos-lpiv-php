<?php
require 'Banco.php';
require 'Tabela.php';
$rowid = $_GET['rowid'] ?? null;
if (!is_null($rowid)) {
    $modelo = new Tabela('modelo');
    $modelo->excluir($rowid);
}
header('LOCATION: index.php');