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
        $obDatabase->insert([
            'nome' => $this->nome,
            'jogoPrincipal' => $this->jogoPrincipal,
            'descricao' => $this->descricao,
        ]);

        //ATRIBUIR O ID DO PERFIL NA INSTANCIA

        //RETORNAR SUCESSO
    }
}