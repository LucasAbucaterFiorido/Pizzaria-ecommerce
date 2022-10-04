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
        <div class="pos-icone-whats">
            <a href="tel:+5511969708196">
                <img class="icone-whats" src="img/logo/icons8-whatsapp-160.png" alt="">
            </a>
            
        </div>    

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
                            <div class="container">
                                <div class="row">
                                    <!--<div class="col-6">
                                         <div class="img_pos_rodape">
                                            <img class="w-100" src="img/logo/pizzalogo.png" alt="lôgo da pizzaria">
                                        </div> 
                                    </div>-->
                                    <div class="col-12">
                                        <!-- <h6 class="titulo_rodape">Copyright ©2022 Todos os direitos reservados | Produzido por Lucas Abucater Fiorido</h6> -->
                                        <span class="titulo_rodape text-center"><h6><u>Venha visitar um dos nossos restaurantes!</u></h6></span>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.7742347815793!2d-46.528414485015645!3d-23.468606764058595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef559cf4ee709%3A0x1717e03b607d1685!2sSenac%20Guarulhos%20-%20Faccini!5e0!3m2!1spt-BR!2sbr!4v1664839434158!5m2!1spt-BR!2sbr" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>

                            
   
                        </div>
                        <div class="col-6" style="position: relative;">
                            <form action="" id="" name="" onsubmit="return false;">
                                <span class="titulo_rodape"><h6>Receba novas Ofertas e Cupons gratis!</h6></span>
                                <input type="email" id="" name="" class="form-control input-email_rodape" placeholder="Digite seu email">
                                <a href="" class="btt-email_rodape">Receber</a>
                            </form>
                            <div class="pos-contato-rodape">
                                <span class="titulo_rodape"><h6>Contatos</h6></span>
                                <ul class="">
                                    <li>lucas.abucater@hotmail.com</li>
                                    <li>11 969708196</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="row divisao_rodape">
                        <!-- linha -->
                    </div>

                    <div class="row pos-redes_rodape text-center">
                        <div class="col-4"><!-- coluna visual --></div>
                        <div class="col-1">
                            <a href=""><i class="icones_rodape fa fa-pinterest" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-1">
                            <a href=""><i class="icones_rodape fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-1">
                            <a href=""><i class="icones_rodape fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-1">
                            <a href=""><i class="icones_rodape fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-4"><!-- coluna visual --></div>
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