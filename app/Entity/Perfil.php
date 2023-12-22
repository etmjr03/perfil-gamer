<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Perfil{

    public $id;
    public $nome;
    public $jogo;
    public $data;
    public $descricao;

    //MÉTODO RESPONSÁVEL POR CADASTRAR UM NOVO PERFIL NO BANCO
    public function cadastrar(){
        //DEFINIR A DATA DE CRIAÇÃO
        $this->data = date('Y-m-d H:i:s');

        //INSERIR O PERFIL NO BANCO
        $obDatabase = new Database('perfil');
        $this->id = $obDatabase->insert([
            'nome'           => $this->nome,
            'jogo' => $this->jogo,
            'descricao'      => $this->descricao,
            'data'           => $this->data
        ]);

        return true;
    }

    //MÉTODO RESPONSÁVEL POR OBTER OS PERFIL DO BANCO ($where = string, $order = string, $limit = string)
    public static function getPerfil($where = null, $order = null, $limit = null){
        return (new Database('perfil'))->select($where, $order, $limit)
                                       ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}