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
                                <div class="col mt-5 mb-5">
                                    <div class="card-group ">
                                        <div class="card catalogo_mid">
                                            <a href="Paginas/detalhesProdutos.php">
                                                <img src="img/produtos/pizza5.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <a href="Paginas/detalhesProdutos.php">
                                                    <h5 class="card-title">Titulo</h5>
                                                </a>
                                                <a href="Paginas/detalhesProdutos.php">
                                                    <p class="card-text">Preço</p>
                                                </a>
                                                <br>
                                                <button class="btn btn-danger" ><i class="ti-bag"></i> Comprar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-5 mb-5">
                                    <div class="card-group">
                                        <div class="card catalogo_mid">
                                            <a href="#">
                                                <img src="img/produtos/pizza6.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <a href="#">
                                                    <h5 class="card-title">Titulo</h5>
                                                </a>
                                                <a href="#">
                                                    <p class="card-text">Preço</p>
                                                </a>
                                                <br>
                                                <button class="btn btn-danger"><i class="ti-bag"></i> Comprar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-5 mb-5">
                                    <div class="card-group">
                                        <div class="card catalogo_mid">
                                            <a href="#">
                                                <img src="img/produtos/pizza5.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <a href="#">
                                                    <h5 class="card-title">Titulo</h5>
                                                </a>
                                                <a href="#">
                                                    <p class="card-text">Preço</p>
                                                </a>
                                                <br>
                                                <button class="btn btn-danger"><i class="ti-bag"></i> Comprar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-5 mb-5">
                                    <div class="card-group">
                                        <div class="card catalogo_mid">
                                            <a href="#">
                                                <img src="img/produtos/pizza5.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <a href="#">
                                                    <h5 class="card-title">Titulo</h5>
                                                </a>
                                                <a href="#">
                                                    <p class="card-text">Preço</p>
                                                </a>
                                                <br>
                                                <button class="btn btn-danger"><i class="ti-bag"></i> Comprar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-5 mb-5">
                                    <div class="card-group">
                                        <div class="card catalogo_mid">
                                            <a href="#">
                                                <img src="img/produtos/pizza6.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <a href="#">
                                                    <h5 class="card-title">Titulo</h5>
                                                </a>
                                                <a href="#">
                                                    <p class="card-text">Preço</p>
                                                </a>
                                                <br>
                                                <button class="btn btn-danger"><i class="ti-bag"></i> Comprar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-5 mb-5">
                                    <div class="card-group">
                                        <div class="card catalogo_mid">
                                            <a href="#">
                                                <img src="img/produtos/pizza5.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <a href="#">
                                                    <h5 class="card-title">Titulo</h5>
                                                </a>
                                                <a href="#">
                                                    <p class="card-text">Preço</p>
                                                </a>
                                                <br>
                                                <button class="btn btn-danger"><i class="ti-bag"></i> Comprar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"><!-- Coluna visual --></div>
                </div>
            </div>
        </div>
    </div>
<!-- ****** FIM Cardápio Pizzas ****** -->