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

    //MÉTODO RESPONSÁVEL POR EXECUTAR QUERY NO BANCO DE DADOS ($query = string, $parametro = array)
    public function execute($query, $parametros = []){
        try{
            $statement = $this->conexaoPdo->prepare($query);
            $statement->execute($parametros);
            return $statement;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    //MÉTODO RESPONSÁVEL POR INSERIR OS DADOS NO BANCO ($values = array)
    public function insert($values){
        //DADOS DA QUERY
        $dados = array_keys($values);
        //CRIA UM ARRAY QUE TERÁ A QUANTIDADE DE POSIÇÕES DE DADOS E ADICIONA '?' CASO NÃO TENHA
        $posicao = array_pad([], count($dados), '?');

        //MONTA A QUERY DE INSERT
        $query = 'INSERT INTO perfil ('.implode(', ',$dados).') VALUES ('.implode(', ',$posicao).')';

        //EXECUTA O INSERT
        $this->execute($query, array_values($values));

        return $this->conexaoPdo->lastInsertId();
    }
}