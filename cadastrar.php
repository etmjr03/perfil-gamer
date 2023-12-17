<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Perfil;

if(isset($_POST['nome'], $_POST['jogoPrincipal'], $_POST['descricao'])){
    $obPerfil = new Perfil;
    $obPerfil->nome          = $_POST['nome'];
    $obPerfil->jogoPrincipal = $_POST['jogoPrincipal'];
    $obPerfil->descricao     = $_POST['descricao'];

    echo '<pre>'; print_r($obPerfil); echo '</pre>';
}

//INCLUDE DO HEADER
include __DIR__.'/includes/header.php';

//INCLUDE DA LISTAGEM
include __DIR__.'/includes/formulario.php';

//INCLUDE DO FOOTER
include __DIR__.'/includes/footer.php';