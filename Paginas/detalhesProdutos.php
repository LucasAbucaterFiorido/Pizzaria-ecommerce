<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css_Slider/core-style.css">
    <link rel="icon" type="../img/png" href="../img/logo/pizzalogo.png">
    <?php include_once('../conexao.php'); ?>
    <title>Produto "exemplo"</title>
</head>
<body>
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
                        <div class="col-6 teste1"> <!-- Imagem do produto -->

                            <div class="img_pos_detalhesProduto"> 
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="col-6 teste2"> <!-- Detalhes do produto -->
                            <div>
                                <h2>Nome Produto</h2>
                                <h4>Preço Produto</h4>
                                <p>ESTOQUE</p>
                                <p>Estrelas de avaliação</p>
                                <p>Opções/Tipo</p> <!-- Opçoes de tamnhos ou tipos de sabores -->

                                <!-- <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span> -->

                                <div class="input-group" style="width: 185px;">
                                    <span class="input-group-text" id="bttMais"><a href="#" class="btt_detalhesProduto"><i class="fa fa-plus"></i></a></span>
                                    <input type="text" class="form-control" placeholder="Quantidade">
                                    <span class="input-group-text" id="bttMenos"><a href="#" class="btt_detalhesProduto"><i class="fa fa-minus"></i></a></span>
                                </div>

                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</body>
</html>