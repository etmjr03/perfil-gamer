<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Perfil;

if(isset($_POST['nome'], $_POST['jogo'], $_POST['descricao'])){
    $obPerfil = new Perfil;
    $obPerfil->nome          = $_POST['nome'];
    $obPerfil->jogo = $_POST['jogo'];
    $obPerfil->descricao     = $_POST['descricao'];
    $obPerfil->cadastrar();

    //DIRECIONA PARA A PÁGINA DE PERFIL APÓS CADASTRAR
    header('location: perfil.php?status=sucesso');
    exit;
}

//INCLUDE DO HEADER
include __DIR__.'/includes/header.php';

//INCLUDE DA LISTAGEM
include __DIR__.'/includes/formulario.php';

//INCLUDE DO FOOTER
include __DIR__.'/includes/footer.php';