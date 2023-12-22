<div class="card-perfil p-4">
    <a class="botao-padrao" href="perfil.php">
        Listar perfil
    </a>
    <form class="mt-4" method="post">
        <div class="imagem-perfil mb-3 mt-3">
            <img class="" src="" alt="imagem de perfil">
        </div>
        <div class="form-group">
            <label class="mb-2">Seu 'Nick'</label>
            <input type="text" class="form-control mb-4" placeholder="máximo 15 digitos" name="nome">
        </div>
        <div class="form-group">
            <label class="mb-2">Seu jogo principal</label>
            <input type="text" class="form-control mb-4" placeholder="máximo 15 digitos" name="jogo">
        </div>
        <div class="form-group">
            <label class="mb-2">Sua descrição</label>
            <textarea class="form-control" rows="5" placeholder="máximo 45 digitos" name="descricao"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="botao-padrao mt-4">Enviar</button>
        </div>
    </form>
</div>