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

        <?php include_once('index-div/slider-div.php'); ?> <!-- CARDAPIO --> 

        <?php include_once('index-div/cardapio-div.php'); ?> <!-- CARDAPIO -->

        <?php include_once('index-div/rodape-div.php'); ?> <!-- ****** Rodapé ****** -->
    </div>    

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.1.js"></script>
    <script>
        
    </script>
</body>
</html>