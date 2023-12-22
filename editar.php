<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Perfil;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    header('location: perfil.php?status=error');
    exit;
}

$obPerfil = Perfil::getPerfil($_GET['id']);
print_r($obPerfil);

//VALIDAÇÃO DA PERFIL
if(!$obPerfil instanceof Perfil){
    header('location: perfil.php?status=error');
    exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'], $_POST['jogo'], $_POST['descricao'])){
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
include __DIR__.'/includes/listagem.php';

//INCLUDE DO FOOTER
include __DIR__.'/includes/footer.php';