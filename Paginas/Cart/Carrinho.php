<?php 
    include_once('../../conexao.php');
    session_start();
    include_once("validar_carrinho.php");
    // echo "<pre>";print_r($_POST);echo "</pre>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="icon" type=" " href="../../img/logo/pizzalogo.png">
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
                <div class="row">
                    <div class="col-1"><!-- margem visual --></div>
                    <div class="col-10">
                        <div class="container">
                            <div class="row">
                                <div class="col-1"><!-- margem visual --></div>
                                <div class="col-10">
                                    <table class="table text-center">  
                                        <thead class="top-table_cart">
                                            <tr>
                                                <th scope="col-1">Produto:</th>
                                                <th scope="col-1">Nome</th>
                                                <th scope="col-1">Preço</th>
                                                <th scope="col-1">Quantidade</th>
                                                <th scope="col-1">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="body-table_cart">
                                            <?php 
 
                                                try
                                                {
                                                    $dadosI = $cone->query("SELECT * FROM Item WHERE codigo_venda = $codVenda_sessao"); // seleciona todos os items do carrinho usando o codigo de venda vinculado ao usario
                                                    $valorTotal = 0; //declarando variavel do valor total da Compra
                                                    $qtdTotal = 0; //declarando variavel do quantidade total da Compra

                                                    foreach ($dadosI as $linhaI) 
                                                    {
                                                        // echo "<pre>"; print_r($linhaI); echo "</pre>";

                                                        $codProduto = $linhaI['codigo_produto'];
                                                        $dadosP = $cone->query("SELECT * FROM Produto WHERE codigo_produto = $codProduto"); //seleciona os dados do Produto pelo codigo retirado da tabela 'Item'
                                                        
                                                        foreach ($dadosP as $linhaP) 
                                                        {
                                                            // echo "<pre>"; print_r($linhaP); echo "</pre>";

                                                            echo "
                                                            <tr>                                                 
                                                                <td>
                                                                    <div class='img-table_cart'>
                                                                        <img class='w-100' src='".$linhaP['imagem_produto']."' alt='imgproduto'>
                                                                    </div>
                                                                </td>
                                                                <td>" .$linhaP['nome_produto'] ."</td>
                                                                <td>" .$linhaP['valor_produto'] ."</td>  
                                                                <td>
                                                                    <div class='input-group'>
                                                                        <span class='input-group-text btt-qtd_cart' id='bttMais'><a href='#' class='btt-MaisMenos_dp'><i class='fa fa-plus'></i></a></span>
                                                                        <input type='number' class='input-qtd_cart' id='txtqtd' names='txtqtd' step='1' min='1' max=''>
                                                                        <span class='input-group-text btt-qtd_cart' id='bttMenos'><a href='#' class='btt-MaisMenos_dp'><i class='fa fa-minus'></i></a></span>
                                                                    </div>
                                                                </td>   
                                                                <td>" .$linhaI['qtdProd_item'] ."</td>   
                                                            </tr>";
                                                            $valorTotal = $valorTotal + $linhaP['valor_produto'];
                                                            $qtdTotal ++;
                                                        }   
                                                    }
                                                }
                                                catch ( PDOException $erro) 
                                                {
                                                    echo 'Erro: ' .$erro->getMessage();
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <h3>
                                        <p>Total: R$<?= $valorTotal;?></p>
                                        <p>Quantidade de Produtos: <?= $qtdTotal;?></p>
                                    </h3>
                                    <form action='finalizarCompra.php' method='POST'>
                                        <input type='hidden' name='txtvalorTotal' id='txtvalorTotal' value='<?= $valorTotal;?>'>
                                        <input type='hidden' name='txtqtdTotal' id='txtqtdTotal' value='<?= $qtdTotal;?>'>
                                        <button class="btn btn-primary" type='submit'>Comprar</button>
                                    </form>
                                    <br>
                                    <a class='btn btn-success' href='../../index.php'>Continuar comprando</a> <!-- ?acao=cadastrar-->
                                </div>
                                <div class="col-1"><!-- margem visual --></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"><!-- margem visual --></div>
                </div>
            </div>
        </div>

    </div>
    <script src="../../js/bootstrap.bundle.js"></script>
</body>
</html>









        <!-- <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row row-cols-3"> <!-- limita a quantidade de colunas que podem ser criadas dentro de um Linha(row)
                        <div class="col">Item 1</div>
                        <div class="col">Item 2</div>
                        <div class="col">Item 3</div>
                        <div class="col">Item 4</div>
                        <div class="col">Item 5</div>
                    </div>
                </div>
            </div>
        </div> -->