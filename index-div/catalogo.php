<div class="col-1"><!-- Coluna visual --></div>
    <div class="col-10">
    <div class="container">
        <div class="row row-cols-3">
            
            <?php
                include_once("../conexao.php");
                // echo "teste";
                try 
                {
                    // echo "<pre>"; print_r($_SESSION);echo "</pre>";
                    if(isset($_POST['txtcod']))
                    {
                        $codCategoria = $_POST['txtcod'];
                        // echo "<pre>"; print_r($_POST);echo "</pre>";
                        $dadosP = $cone->query("SELECT * FROM Produto WHERE codigo_categoria = $codCategoria AND status_produto = 'Ativo'");
                        foreach($dadosP as $linha)
                        {
                            echo "
                                <div class='col mt-5 mb-5'>
                                    <div class='card-group'>
                                        <div class='card catalogo_mid'>
                                            <a href='Paginas/Produtos/detalhesProdutosPage.php?codigoProduto=".$linha['codigo_produto']."'>
                                                <img src='".$linha['imagem_produto']."' class='card-img-top' alt='...'>
                                            </a>
                                            <div class='card-body'>
                                                <a href='Paginas/Produtos/detalhesProdutosPage.php?codigoProduto=".$linha['codigo_produto']."'>
                                                    <h5 class='card-title'>".$linha['nome_produto']."</h5>
                                                </a>
                                                <a href='Paginas/Produtos/detalhesProdutosPage.php?codigoProduto=".$linha['codigo_produto']."'>
                                                    <p class='card-text'>R$:".$linha['valor_produto']."</p>
                                                </a>
                                                <br>
                                                <a href='Paginas/Produtos/detalhesProdutosPage.php?codigoProduto=".$linha['codigo_produto']."' class='btn btn-danger'><i class='ti-bag'></i> Comprar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    }
                    else
                    {
                        $dadosP = $cone->query("SELECT * FROM Produto WHERE status_produto = 'Ativo'");
                        foreach($dadosP as $linha)
                        {
                            echo "
                                <div class='col mt-5 mb-5'>
                                    <div class='card-group'>
                                        <div class='card catalogo_mid'>
                                            <a href='Paginas/Produtos/detalhesProdutosPage.php?codigoProduto=".$linha['codigo_produto']."'>
                                                <img src='".$linha['imagem_produto']."' class='card-img-top' alt='...'>
                                            </a>
                                            <div class='card-body'>
                                                <a href='Paginas/Produtos/detalhesProdutosPage.php?codigoProduto=".$linha['codigo_produto']."'>
                                                    <h5 class='card-title'>".$linha['nome_produto']."</h5>
                                                </a>
                                                <a href='Paginas/Produtos/detalhesProdutosPage.php?codigoProduto=".$linha['codigo_produto']."'>
                                                    <p class='card-text'>R$:".$linha['valor_produto']."</p>
                                                </a>
                                                <br>
                                                <a href='Paginas/Produtos/detalhesProdutosPage.php?codigoProduto=".$linha['codigo_produto']."' class='btn btn-danger'><i class='ti-bag'></i> Comprar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    }
                }
                catch ( PDOException $erro) 
                {
                    echo 'Erro: ' .$erro->getMessage();
                }
            ?>
        </div>
    </div>
</div>
<div class="col-1"><!-- Coluna visual --></div>