<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="./public/css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./public/css/style.css">

        <script src="./public/js/jquery.js"></script>

        <title>Prova - Dev</title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 offset-xl-2 offset-lg-2">
                <img src="./public/images/logo.png" alt="">
            </div>
        </nav><!-- /nav-->
        <div class="fundo"></div>
        <section id="conteudo">
            <div class="container-fluid">
                <div class="row">
                    <div id="card" class="col-xl-6 col-lg-6 col-md-8 col-sm-8 offset-sm-2 offset-xl-2 offset-lg-2">                        
                        <div class="card">
                            <div class="header col-md-12 text-center">
                                <?php
                                    if (isset($msg)){
                                        echo "<div class='p-3 mb-2 bg-info text-white'>
                                        {$msg} </div>";                                            
                                        }
                                ?>
                                <p class="color-text-primary">Faca a cotação de seguro do seu veículo</p>
                                <p class="color-text-second">Entraremos em contato com você</p>
                            </div><!-- /div.header-->
                            <div class="card-body col-md-10 col-sm-12 offset-md-1"> 
                                <form action="sendForm" method="POST" id="form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="group form-group row">
                                                <label for="nome" class="col-xl-12 col-lg-12 col-md-4 col-sm-4 col-form-label">Nome</label>
                                                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-8 col-12">
                                                    <input type="text" class="control form-control col-12" id="nome" place="Nome" name="nombre" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="group form-group row">
                                                <label for="email" class="col-xl-12 col-lg-12 col-md-4 col-sm-4 col-form-label">E-mail</label>
                                                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-8 col-12">
                                                    <input type="email" class="control form-control col-12" id="email" place="E-mail" name="email" required>
                                                </div>

                                            </div>
                                        </div>
                                    </div> <!-- /row -->
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-8">
                                            <div class="group form-group row">
                                                <label for="tipo-documento" class="col-xl-12 col-lg-12 col-md-4 col-sm-4 col-form-label">Tipo de Documento</label>
                                                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-8 col-12">
                                                    <select class="control form-control col-12" name="tipodoc" id="tipo-documento" required>
                                                        <option id="option">Tipo de Documento</option>
                                                        <option value="cedula" tam="10">Cedula</option>
                                                        <option value="cedula_extranjeria" tam="15">Cedula extranjería</option>
                                                        <option value="tarjeta_de_identidad" tam="10">Tarjeta de identidad </option>
                                                    </select>     
                                                </div>             
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-4">
                                            <div class="group form-group row">
                                                <label for="numero-documento" class="col-xl-12 col-lg-12 col-md-4 col-sm-4 col-form-label">Número do Documento</label>
                                                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-8">
                                                    <input type="number" class="control form-control col-12" name="numdoc" place="N.º Doc." id="numero-documento" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="btn btn-submit btn-lg btn-block" type="submit" value="Cotar">
                                        </div>
                                    </div><!-- /row -->
                                </form><!-- /div.form-->
                                <div class="row">
                                    <div class="recuperar col-md-12 text-center">
                                        <a href="#">Recuperar Cotação</a>
                                    </div>
                                </div><!-- /row -->
                            </div><!-- /div.card-body-->
                        </div><!-- /div.card-->
                    </div><!-- /div#card-->
                </div><!-- /row-->
            </div><!-- /container-fluid-->
        </section><!-- /section-->
        
        <script src="./public/js/main.js"></script>
    </body>
</html>