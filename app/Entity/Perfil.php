<?php

namespace App\Entity;

use \App\Db\Database;

class Perfil{

    public $id;
    public $nome;
    public $jogoPrincipal;
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
            'jogo_principal' => $this->jogoPrincipal,
            'descricao'      => $this->descricao,
            'data'           => $this->data
        ]);

        return true;
    }
}