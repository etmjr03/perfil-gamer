<?php

    $resultados = '';

    foreach($perfis as $perfil){
        $resultados .= '<tr>
                            <td>'.$perfil->id.'</td>
                            <td>'.$perfil->nome.'</td>
                            <td>'.$perfil->jogo.'</td>
                            <td>'.$perfil->descricao.'</td>
                            <td>'.date('d/m/Y à\s H:i:s', strtotime($perfil->data)).'</td>
                            <td></td>
                        </tr>';
    }
?>

<div class="card-perfil p-4">
    <a class="botao-padrao" href="cadastrar.php">
        Cadastrar perfil
    </a>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nick</th>
                    <th>Jogo principal</th>
                    <th>Descrição</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>
</div>