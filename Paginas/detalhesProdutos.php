<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" type="../img/png" href="../img/logo/pizzalogo.png">
    <?php include_once('../conexao.php'); ?>
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
                            <div class="imgs-list_dp">
                                <label for="">IMAGEM</label>
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="col-6" style="height: 600px;"> <!-- Detalhes do produto -->
                            <div>
                                <div id="nome_produto">
                                    <h2>Nome Produto</h2>
                                </div>
                                <div id="preco_produto" class="mt-1">
                                    <h4>R$:Preço Produto</h4>
                                </div>
                                <div id="estoque" class="mt-2">
                                    <p class="titulo_dp">ESTOQUE</p>
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
                                        <li><a href="#">Broto</a></li>
                                        <li><a href="#">Média</a></li>
                                        <li><a href="#">Grande</a></li>
                                    </ul>
                                </div>
                                

                                <!-- <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span> -->

                                    
                                
                                <div class="mt-5">
                                    <p class="titulo_dp">Quantidade:</p>
                                <div class="input-group quantidade-config_dp">
                                    <span class="input-group-text bttMais"><a href="#" class="btt-MaisMenos_dp"><i class="fa fa-plus"></i></a></span>
                                    <input type="number" class="form-control testInput text-center" id="txtqtd" name="txtqtd" step="1" min="1" max="">
                                    <span class="input-group-text bttMenos"><a href="#" class="btt-MaisMenos_dp"><i class="fa fa-minus"></i></a></span>
                                </div>
                                </div>

                                <div id="botao_add_carrinho" class="mt-5">
                                    <button class="btt-addCart_dp" id="addCart">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-0" style="height: auto;">
                            <div class="accordion accordion-flush" id="acordeao">

                                <div class="accordion-item acordeao-item_dp">
                                    <h2 class="accordion-header" id="item1_header">
                                        <button class="accordion-button collapsed acordeao-btt_dp" type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
                                            <span class="titulo_dp">Descrição do Produto</span>
                                        </button>
                                    </h2>
                                    <div id="item1" class="accordion-collapse collapse" aria-labelledby="item1_header" data-bs-parent="#acordeao">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>

                                <div class="accordion-item acordeao-item_dp">
                                    <h2 class="accordion-header" id="item2_header">
                                        <button class="accordion-button collapsed acordeao-btt_dp" type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                                            <span class="titulo_dp">Perguntas frequentes</span>
                                        </button>
                                    </h2>
                                    <div id="item2" class="accordion-collapse collapse" aria-labelledby="item2_header" data-bs-parent="#acordeao">
                                        <div class="accordion-body">Sei la de sei lei oque ? <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>