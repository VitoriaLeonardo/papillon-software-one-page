<hr/>
<section id="suporte" style="background-color: white;">
        <div>
            <div class="row">
                <h3>Entre em contato direto conosco!</h3>
                    <div class="row">
                    <div class=col-sm-12 col-md-6">
                        
                    <a href="mailto:email@contato.com"><button class="btn btn-info btn-lg btn-block">E-mail</button></a>
                    <br/>
                    <a href="tel:xx55555555"><button class="btn btn-info btn-lg btn-block">Telefone</button></a>
                    </div>
                    </div>
                    <br/>
                </div>
                    <h3>Ou deixe uma mensagem e logo retornaremos!</h3>
                    <h5>
                    <form method="post" action="contato.php">
                        <div class="row"/>
                        <div class="col-sm-6 col-md-6 col-lg mt-1">
                            <label for="message-text" class="col-form-label">E-mail:</label>
                            <input name="inEmail" type="email" placeholder="exemple@exemple.com" class="form-control">
                            <br/>
                            <label for="message-text" class="col-form-label">Assunto:</label>
                            <input name="inAssunto" type="text" maxlength="15" class="form-control">
                        </div>
                        <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg mt-1">
                            <label for="message-text" class="col-form-label">Mensagem:</label>
                            <textarea name="inMensagem" class="form-control" style="resize: none;"></textarea>

                            <label for="message-text" class="col-form-label">Telefone:</label>
                            <input name="inTelefone" type="text" placeholder="(11)1111-1111" maxlength="15" class="form-control">
                            <br/>
                        </div>
                            <button class="btn btn-info btn-lg btn-block" type="submit">Enviar</button>
                            <br/>
                            <br/>
                        </div>
                    </form>
                    </h5>
                </div>
            </div>
        </div>
</section>