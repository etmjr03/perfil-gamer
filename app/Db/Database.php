<?php

namespace App\Db;

//DEFININDO PDO COMO DEPENDENCIA PARA A CLASSE
use \PDO;
use \PDOException;

class Database{
    const HOST_DB    = 'localhost';
    const NOME_DB    = 'perfil_jogador';
    const USUARIO_DB = 'root';
    const SENHA_DB   = 'toor';

    private $tabela;
    private $conexaoPdo;

    //CONSTRUTOR DA CLASSE RECEBENDO A TABELA QUE SERÁ MANIPULADA
    public function __construct($tabela = null){
        $this->tabela = $tabela;
        $this->setConexao();
    }

    //MÉTODO RESPONSÁVEL POR CRIAR A CONEXÃO DO BANCO
    private function setConexao(){
        try{
            $this->conexaoPdo = new PDO('mysql:host='.self::HOST_DB.';dbname='.self::NOME_DB, self::USUARIO_DB, self::SENHA_DB);
            
            //TRATANDO O PDO PARA LANÇAR UMA EXCEPTION CASO NÃO SAIA ALGO COMO ESPERADO
            $this->conexaoPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    public function insert(){
        
    }
}