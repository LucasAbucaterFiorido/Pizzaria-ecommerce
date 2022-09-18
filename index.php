<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css_Slider/core-style.css">
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
    </div>    


    




    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script>
        
    </script>
</body>
</html>