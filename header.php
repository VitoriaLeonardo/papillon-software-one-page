<header>
    <main>
        <div class="header-1">
            <div class="logo">
                <img class="image-logo" src="./imagens/logo.png" />
            </div>

            <div class="redes-sociais">
                <ul>
                    <li> <a href="URL do linkdin"><img border="0" src="./imagens/face.png" /></a></li>
                    <li><a href="URL do Gmail"><img border="0" src="./imagens/linkedin.png" /></a></li>
                    <li><a href="URL do GitHub"><img border="0" src="./imagens/github.png" /></a></a></li><BR />
                </ul>
            </div>
            <div>

            <?php if (empty($_SESSION['id'])) { ?> 
                <div class="btn-func">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal"> Sou funcionário</button>
                </div>

                    <?php } else {
                    if ($_SESSION['id'] > 0) {
                        $consulta_usuario = $cn->query("select nomeFuncionario from funcionario where idFuncionario = ".$_SESSION['id']);
                        $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
                    ?>
                        <li><span class="glyphicon glyphicon-user"><a href="#"><?php echo $exibe_usuario['nomeFuncionario']; ?> </a></li>
                        <li><span class="glyphicon glyphicon-log-out"><a href="logout.php"> Sair</a></li>

                    <?php } else { ?>
                        <li><a href="adm.php"><button class="btn btn-sm btn-danger"> Administrador </button></a></li>
                        <li><span class="glyphicon glyphicon-log-out"><a href="sair.php"> Sair</a></li>

                <?php }
                } ?>



            </div>

            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Entrar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form name="frmLogin" method="post" action="login.php">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Login:</label>
                                    <input type="text" class="form-control" name="login" maxlength="20" size="25">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Senha:</label>
                                    <input type="password" class="form-control" name="senha" maxlength="20" size="25"></textarea>
                                </div>

                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</header>