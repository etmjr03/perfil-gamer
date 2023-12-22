<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Perfil;

$perfis = Perfil::getPerfis();

//INCLUDE DO HEADER
include __DIR__.'/includes/header.php';

//INCLUDE DA LISTAGEM
include __DIR__.'/includes/listagem.php';

//INCLUDE DO FOOTER
include __DIR__.'/includes/footer.php';