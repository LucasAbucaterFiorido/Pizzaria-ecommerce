<!-- ****** Cardápio Pizzas ****** -->
    <div class="row">
        <div class="col-12">
            <div class="container mid">

                <div class="row">
                    <div class="col-1"><!-- margem visual --></div>
                    <div class="col-10">
                        <div class="text-center titulo-cardapio_mid">
                            <h1 class="">Cardápio</h1>
                        </div>
                    </div>
                    <div class="col-1"><!-- margem visual --></div>
                </div>

                <div class="row mt-4">
                    <div class="col-1"><!-- margem visual --></div>
                    <div class="col-10">
                        <nav class="navbar navbar-expand justify-content-center titulo-cardapio_mid">
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

                <div class="row mt-5">
                    <div class="col-1"><!-- Coluna visual --></div>
                    <div class="col-10">
                        <div class="container">
                            <div class="row row-cols-3">
                                <?php
                                    try 
                                    {
                                        // echo "<pre>"; print_r($_SESSION);echo "</pre>";
                                        // echo "<pre>"; print_r($_POST);echo "</pre>";

                                        $dadosP = $cone->query("SELECT * FROM Produto WHERE status_produto = 'Ativo' ");

                                        foreach($dadosP as $linha)
                                        {
                                            echo "
                                                <div class='col mt-5 mb-5'>
                                                    <div class='card-group'>
                                                        <div class='card catalogo_mid'>
                                                            <a href='Paginas/detalhesProdutos.php?codigoProduto=".$linha['codigo_produto']."'>
                                                                <img src='" .$linha['imagem_produto']."' class='card-img-top' alt='...'>
                                                            </a>
                                                            <div class='card-body'>
                                                                <a href='Paginas/detalhesProdutos.php?codigoProduto=".$linha['codigo_produto']."'>
                                                                    <h5 class='card-title'>".$linha['nome_produto']."</h5>
                                                                </a>
                                                                <a href='Paginas/detalhesProdutos.php?codigoProduto=".$linha['codigo_produto']."'>
                                                                    <p class='card-text'>R$:".$linha['valor_produto']."</p>
                                                                </a>
                                                                <br>
                                                                <a href='Paginas/detalhesProdutos.php?codigoProduto=".$linha['codigo_produto']."' class='btn btn-danger'><i class='ti-bag'></i> Comprar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
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
                </div>
            </div>
        </div>
    </div>
<!-- ****** FIM Cardápio Pizzas ****** -->