<?php $this->layout("Client/base") ?>

<main id="main">


    <section style="padding-top: 35px; padding-bottom: 35px; padding-left: 30px; padding-right: 50px;">








        <div class="container">

            <center>
                <h2><b>Cadastre-se</b></h2>
            </center> <br/><br/>
            <form class="forms-sample" action="/CadastrarAlunoServlet" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">E-mail</label>
                        <input type="email" class="form-control" id="email1" name="email1" value="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Repetir e-mail</label>
                        <input type="email" class="form-control" id="email2" name="email2" value="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Senha</label>
                        <input type="password" class="form-control" id="senha1" name="senha1">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Repetir senha</label>
                        <input type="password" class="form-control" id="senha2" name="senha2">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Cpf</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Data de nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">DDD</label>
                        <input type="tel" maxlength="2" class="form-control" id="telefoneDdd" name="telefoneDdd" value="">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Telefone</label>
                        <input type="tel" class="form-control" id="telefoneNumero" name="telefoneNumero" value="">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>

        </div>





    </section>




</main>
<!-- End #main -->
