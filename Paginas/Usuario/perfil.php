<?php
    include_once("../../conexao.php");
    session_start();
    include_once("../../Formularios/Login/validar_login.php");
    include_once("../Cart/validar_carrinho.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="icon" type="../../img/png" href="../../img/logo/pizzalogo.png">
    
    <title>Produto "exemplo"</title>
</head>
<body class="body_config">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1><p class="text-center">Cabeçalho</p></h1>
                <br>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-6 p-0" style="height: 700px;"> <!-- Imagem do produto -->
                            <div class="img_pos_dp">
                                <img class="w-100" alt="imagem do produto" id="img-1">
                            </div>
                            <div class="imgs-list_dp">
                                <label for="">IMAGEM</label>
                                <img src="" alt="">
                            </div>
                            <div class="imgs-list_dp">
                                <label for="">IMAGEM</label>
                                <img src="" alt="">
                            </div>
                            <div class="imgs-list_dp">
                                <label for="">IMAGEM</label>
                                <img src="" alt="">
                            </div>
                            <div class="imgs-list_dp">
                                <label for="">IMAGEM</label>
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="col-6" style="height: 600px;"> <!-- Detalhes do produto -->
                            <div>
                                <div>
                                    <h2 id="nome-produto">Nome Produto</h2>
                                </div>
                                <div class="mt-1">
                                    <h4>R$:<span id="valor-produto">Preço Produto</span></h4>
                                </div>
                                <div class="mt-2">
                                    <p class="titulo_dp" id="estoque-produto">ESTOQUE</p>
                                </div>
                                <div id="avaliacao_estrelas" class="mt-2">
                                    <a href="#" class="estrelas_dp">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </a>  
                                </div>
                                <div id="Opcoes_tipo" class="btt-opcoes_dp mt-5">
                                    <p class="titulo_dp">Opções/Tipo:</p> <!--  Opçoes de tamanhos ou tipos de sabores -->
                                    <ul>
                                        <li><a href="">Broto</a></li>
                                        <li><a href="">Média</a></li>
                                        <li><a href="">Grande</a></li>
                                    </ul>
                                </div>
                                

                                <!-- <span class="qty-minus" 
                                onclick="var effect = document.getElementById('qty'); 
                                var qty = effect.value; 
                                if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                <i class="fa fa-minus" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span> -->

                                    
                              
                               <!--  onsubmit="return false;" /// "../Cart/cadastrar_carrinho.php" -->  
                               
                                <div class="mt-5">                                   
                                    <p class="titulo_dp">Quantidade:</p>
                                    <div class="input-group quantidade-config_dp">
                                        <span class="input-group-text bttMais" id="bttMais"><a id="bttMais" class="btt-MaisMenos_dp"><i class="fa fa-plus"></i></a></span>
                                        <input type="number" class="form-control testInput text-center" id="txtqtd" name="txtqtd" step="1" min="1" max="" value="1" readonly>  <!-- input quantidade produto -->
                                        <span class="input-group-text bttMenos" id="bttMenos"><a href="" class="btt-MaisMenos_dp"><i class="fa fa-minus"></i></a></span>
                                    </div>
                                </div>
                                <form action="" method="post"  onsubmit="return false;">
                                    <div id="bttComprar_carrinho" class="mt-5">
                                        <input type="hidden" id="txtCodProduto" name="txtCodProduto" value="<?= $codProduto ?>">    <!-- input codigo produto -->
                                        <button type="submit" class='btn btt-addCart_dp' id='btt-comprar'>Comprar</button>
                                    </div>
                                </form>
                                
                                <form action="" id="" method="POST" onsubmit="return false;">
                                    <input type="hidden" id="txtCodProduto" name="txtCodProduto" value="<?= $codProduto ?>">    <!-- input codigo produto -->
                                    <div id="add_carrinho" class="mt-5">
                                        <a  class="btn btt-addCart_dp" id="btt-cart">
                                            <i id="icone_carrinho" class="<?= $autenticacaoInicial == 1 ? "ti-shopping-cart-full" : "ti-shopping-cart" ?>" style="font-size: 30px;"></i>
                                        </a> 
                                    </div>
                                    <div id="resposta"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/jquery-3.6.1.js"></script>
    <script src="../../js/scriptDetalhesProduto.js"></script>
</body>
</html>