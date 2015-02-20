<div class="jumbotron">
    <h1>Formulário de Contato</h1>

    <form class="form-horizontal" method="post" action="?arquivo=contato.php">
        <div class="form-group">
            <label for="inputNome3" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputNome3" name="inputNome3" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAssunto3" class="col-sm-2 control-label">Assunto</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputAssunto3" name="inputAssunto3" placeholder="Assunto">
            </div>
        </div>
        <div class="form-group">
            <label for="txtMensagem4" class="col-sm-2 control-label">Mensagem</label>
            <div class="col-sm-4">
                <textarea name="txtMensagem" id="txtMensagem" cols="50" rows="10" placeholder="Digite sua mensagem..."></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    <?php
        if(isset($_POST['inputNome3'])){
            if(!empty($_POST['inputNome3']) and !empty($_POST['inputEmail3']) and !empty($_POST['inputAssunto3']) and !empty($_POST['txtMensagem'])) {
                echo '<p class="bg-success" align="center">Dados enviados com sucesso, abaixo segue os dados que você enviou:</p>';
                echo '<p class="bg-info" align="center">
                    Nome: '.$_POST['inputNome3'].'<br>
                    Email: '.$_POST['inputEmail3'].'<br>
                    Assunto: '.$_POST['inputAssunto3'].'<br>
                    Mensagem: '.$_POST['txtMensagem'].
                    '</p>';
            } else {
                echo '<p class="bg-danger" align="center">Preencha todos os campos!</p>';
            }
        }
    ?>
</div>