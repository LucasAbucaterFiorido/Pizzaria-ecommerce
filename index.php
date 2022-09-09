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
    <title>Ouroborus</title>
</head>
<body>
    <div class="container-fluid">
        <!-- ****** top ****** -->
        <div class="row">
            <div class="col-12">
                <div class="container top">
                    <div class="row">

                        <div class="col-1"> <!-- style="background-color: lightgray;" -->
                            <!-- margem visual -->
                        </div> 
                        
                        <div class="col-1"> <!-- style="background-color: salmon;"-->
                            <!-- logo -->
                            <a href="#" id="top_logotipo">
                                <img class="top_logo" src="img/logo/pizzalogo.png" alt="Logotipo Ouroborus">
                            </a>
                        </div>

                        <div class="col-7"> <!-- style="background-color: violet;"-->
                            <!-- NavBar-top -->
                            <nav class="navbar navbar-expand top_nav"> <!-- 'justify-content-center' centraliza a nav-bar -->
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="filtro_tudo">
                                            <span class="karl-level" id="msg_hot">hot</span>
                                            <b>Cardápio</b>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id=""><b>Quem Somos ?</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id=""><b>Contato</b></a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="">
                                            <span class="karl-level" id="msg_compartilhe">Compartilhe</span> 
                                            <div class="icone_redes"><i class="fa fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#" id="">
                                            <div class="icone_redes"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="">
                                            <div class="icone_redes"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#" id="">
                                            <div class="icone_redes"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-2"> <!-- style="background-color: orangered;"-->
                            <!-- Carrinho-top -->
                            <nav class="navbar navbar-expand justify-content-center top_nav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="">
                                            <div class="cart_quantity">
                                                <span style="font-size: 11px;">
                                                    Nº
                                                </span> 
                                            </div>
                                            <div style="font-size: 14px;">
                                                <i class="ti-bag icone_carrinho"></i>
                                                R$
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            <!-- Login-top -->
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="">
                                            <div class="icone_login"><i class="ti-user"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-1">  <!-- style="background-color: lightgray;" -->
                            <!-- margem visual -->
                        </div> 
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** FIM top ****** -->

        <!-- ****** top-Descontos ****** -->
        <div class="row text-center text-white top_descontos"> <!-- d-md-flex -->

            <!-- Area desconto 1 -->
            <div class="col-4" style="background-color: #b8b8b8;">
                <div class="top_descontos_d1">
                    <h5>Free Shipping &amp; Returns</h5>
                    <h6><a href="#">BUY NOW</a></h6>
                </div>
            </div>
            <!-- Area desconto 2 -->
            <div class="col-4" style="background-color: #ff084e;">
                <div class="top_descontos_d2">
                    <h5>20% Discount for all dresses</h5>
                    <h6>USE CODE: Colorlib</h6>
                </div>
            </div>
            <!-- Area desconto 3 -->
            <div class="col-4" style="background-color: #3a3a3a;">
                <div class="top_descontos_d3">
                    <h5>20% Discount for students</h5>
                    <h6>USE CODE: Colorlib</h6>
                </div>
            </div>

        </div>
        <!-- ****** FIM top-Descontos ****** -->

        <!-- ****** Area dos Slides ****** -->
        <div class="row">
            
        </div>
        <!-- ****** FIM Area dos Slides ****** -->

        <!-- ****** Cardápio Pizzas ****** -->
        <div class="row">
            <div class="col-12">
                <div class="container mid">

                    <div class="row">
                        <div class="col-1"><!-- margem visual --></div>
                        <div class="col-10">
                            <div class="text-center mid_cardapio">
                                <h1 class="">Cardápio</h1>
                            </div>
                        </div>
                        <div class="col-1"><!-- margem visual --></div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-1"><!-- margem visual --></div>
                        <div class="col-10">
                            <nav class="navbar navbar-expand justify-content-center mid_cardapio">
                                <ul class="navbar-nav">
                                    <?php
                                        try 
                                        {
                                            $data = $cone->query('SELECT * FROM Categoria');
                                            
                                            foreach($data as $linha)
                                            {
                                                echo "
                                                    <li class='nav-item'>
                                                        <a class='nav-link' href='#' id='filtro_tudo'>".$linha['nome_categoria']."</a>
                                                    </li>";
                                            }
                                        }
                                        catch ( PDOException $erro) 
                                        {
                                            echo 'Erro: ' .$erro->getMessage();
                                        }
                                    ?>
                                </ul>
                            </nav>
                        </div> 
                        <div class="col-1"><!-- margem visual --></div>   
                    </div>

                    <div class="row">
                        <div class="col-1"><!-- margem visual --></div>
                        <div class="col-10">
                            <?php
                                try 
                                {
                                    $data = $cone->query('SELECT * FROM Produto');

                                    foreach($data as $linha)
                                    {
                                        echo "<!-- Primeira galeria de item -->
                                            <div class='col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig' data-wow-delay='0.2s'>
                                                <!-- Imagem do produto -->
                                                <div class='product-img'>
                                                    <img src='" .$linha['imagem_produto']."' alt=''>
                                                    <div class='product-quicview'>
                                                        <a href='#' data-toggle='modal' data-target='#quickview'><i class='ti-plus'></i></a>
                                                    </div>
                                                </div>
                                                <!-- Descrição do produto -->
                                                <div class='product-description'>
                                                    <h4 class='product-price'>R$".$linha['valor_produto']."</h4>
                                                    <p>".$linha['nome_produto']."</p>
                                                    <!-- Adicionar ao Carrinho -->
                                                    <a href='#' class='add-to-cart-btn'>+Adicionar Carrinho</a>
                                                </div>
                                            </div>";
                                    }
                                }
                                catch ( PDOException $erro) 
                                {
                                    echo 'Erro: ' .$erro->getMessage();
                                }
                            ?>
                        </div>
                            <div class="col-1"><!-- margem visual --></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** FIM Cardápio Pizzas ****** -->
    </div>    


    




    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script>
        
    </script>
</body>
</html>