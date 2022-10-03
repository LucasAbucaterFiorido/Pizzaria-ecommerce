<?php 
    include_once("conexao.php");
    session_start();
    include_once("Formularios/Login/validar_login.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" type="img/png" href="img/logo/pizzalogo.png">
    <?php include_once('conexao.php'); ?>
    <title>Pizzaria</title>
</head>
<body class="body_config">
    <div class="container-fluid">
        
        <?php include_once('index-div/cabecalho-div.php'); ?> <!-- CABEÇALHO -->

        <?php include_once('index-div/descontos-div.php'); ?> <!-- DESCONTOS -->

        <!-- ****** Area dos Slides ****** -->
        <div class="row">
            
        </div>
        <!-- ****** FIM Area dos Slides ****** -->

        <?php include_once('index-div/cardapio-div.php'); ?> <!-- CARDAPIO -->

        <!-- ****** Rodapé ****** -->
        <div class="row text-white divisao_rodape">
            <!-- linha -->
        </div>

        <div class="row text-white pos_rodape"> <!-- d-md-flex -->
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="img_pos_rodape">
                                <img class="w-100" src="img/logo/pizzalogo.png" alt="lôgo da pizzaria">
                            </div>
                            <h6>Copyright ©2022 Todos os direitos reservados | Produzido por Lucas Abucater Fiorido</h6>
   
                        </div>
                        <div class="col-6">
                            <form action="" id="" name="" onsubmit="return false;">
                                <h6 class="titulo_rodape">Receba novas Ofertas e Cupons gratis</h6>
                                <input type="email" id="" name="" class="form-control input-email_rodape" placeholder="Digite seu email">
                                <a href="" class="btt-email_rodape">Receber</a>
                            </form>
                        </div>
                    </div>

                    <div class="row divisao_rodape">
                        <!-- linha -->
                    </div>

                    <div class="row">
                        <div class="col-12 pos-redes_rodape">
                            <div class="text-center">
                                <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** FIM Rodapé ****** -->
    </div>    


    




    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.1.js"></script>
    <script>
        
    </script>
</body>
</html>