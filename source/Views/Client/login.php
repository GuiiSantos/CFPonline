<?php $this->layout("Client/base") ?>

<main id="main">


    <section style="padding-top: 35px; padding-bottom: 35px; padding-left: 30px; padding-right: 50px;">







        <div class="container">
            <center>
                <h2><b>Já é nosso aluno(a)?</b></h2><br/>
                <h3>Faça seu login e boa aula!</h3>
                <br/><br/>

                <div class="col-sm">

                    <form class="form-signin" method="POST" action="/LoginServlet">

                        <div class="col-sm-5   form-group">
                            <label for="email" class="sr-only">E-mail</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
                        </div>

                        <div class="col-sm-5 form-group">
                            <label for="senha" class="sr-only">Senha</label>
                            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                        </div>

                        <div class="col-sm-5 form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                        </div>





                    </form>
                    <a href="#">
                        <p style="font-size: 16px; color: #000;"><u>Esqueci minha senha?</u></p>
                    </a>

                    <a href="cadastrar-aluno.html">
                        <p style="font-size: 16px; color: #000;"><u>Cadastre-se</u></p>
                    </a>
                </div>

            </center>

        </div>





    </section>





</main>
<!-- End #main -->
