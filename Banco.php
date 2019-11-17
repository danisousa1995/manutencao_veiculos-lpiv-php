<?php
class Banco
{
    private $dsn = 'sqlite:manutencao.sqlite';
    protected $pdo;
    
    public function conectar()
    {
        $this->pdo = new PDO($this->dsn);
    }
}