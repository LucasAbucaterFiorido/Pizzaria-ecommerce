<!-- ****** top ****** -->
<?php
    $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização
    $nomeUser_sessao = $_SESSION['nomeUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização
    $loginUser_sessao = $_SESSION['loginUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização
    $codVenda_sessao = $_SESSION['codVenda_sessao']; //declara variavel de sessao em variavel local para melhor utilização
?>
    <div class="row">
        <div class="col-12">
            <input type="hidden" id="txtcodVenda" value="<?= $codVenda_sessao ?>">
            <input type="hidden" id="txtcodUser" value="<?= $codUser_sessao ?>">
            <div class="container top">
                <div class="row">

                    <div class="col-1"> <!-- style="background-color: lightgray;" -->
                        <!-- margem visual -->
                    </div> 
                    
                    <div class="col-1"> <!-- style="background-color: salmon;"-->
                        <!-- logo -->
                        <a href="#" id="top_logotipo">
                            <img class="pos_logo" src="http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/img/logo/pizzalogo.png">
                        </a>
                    </div>

                    <div class="col-7"> <!-- style="background-color: violet;"-->
                        <!-- NavBar-top -->
                        <nav class="navbar navbar-expand top_nav"> <!-- 'justify-content-center' centraliza a nav-bar -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#cardapioAncora" id="btt_cardapio">
                                        <span class="msg" id="msg_hot">hot</span>
                                        Cardápio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#qmSomosAncora" id="btt_quemsomos">Quem Somos ?</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='#contatoAncora' id='btt_contato'>Contato</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#">
                                        <span class="msg" id="msg_compartilhe">Compartilhe</span>
                                    </a>
                                    <a class="nav-link" href="#" id="btt_compartilhe">
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
                            <!-- <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="" id="">
                                        <div class="cart_quantity">
                                            <span style="font-size: 10px;">
                                                Nº  
                                            </span> 
                                        </div>
                                        <div>
                                            <i class="ti-shopping-cart icone_carrinho" style="font-size: 24px;"></i>
                                            <span style="font-size: 15px;">R$</span>
                                        </div>
                                    </a>
                                </li>
                            </ul> -->
                            <div class="dropdown" style="position: relative;">
                                <a class="nav-link dropdown" href="#" role="button" id="cart-list" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="cart_quantity">
                                        <span style="font-size: 10px;">
                                            Nº
                                        </span>
                                    </div>
                                    <div style="position: relative;">
                                        <i class="ti-shopping-cart icone_carrinho"></i>
                                        <span style="font-size: 15px; margin-right: 34px;">R$:<span id="valorTotalIcone"></span></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="login-list">
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-item" href="http://localhost/projetos/php/GitHub/Pizzaria-Ecommerce/Paginas/Cart/carrinho.php">
                                            <div class="text-center py-2 icone_logoff"><i class="ti-shopping-cart"></i> Carrinho </div>     <!--   ti-shift-right  //  ti-power-off   -->
                                        </a>
                                    </li>
                                    <li class="nav-item"><hr class="dropdown-divider"></li>
                                </ul>
                            </div>
                            <!-- <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="icone_config"><i class="ti-user"></i></div>
                                </a>
                                <ul class="navbar-nav dropdown-menu dropdown-menu-dark">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="">
                                            <div class="icone_config dropdown-item active"><i class="ti-user"></i>Log-out</div>
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="">
                                            <div class="icone_config dropdown-item active"><i class="ti-user"></i>teste</div>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                            <!-- Login-top -->
                            <div class="dropdown">
                                <a class="nav-link dropdown" href="#" role="button" id="login-list" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="icone_config"><i class="ti-settings"></i></div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="login-list">
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-item" href="http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/Paginas/Usuario/perfil.php">
                                            <div class="text-center py-2 icone_logoff"><i class="ti-id-badge"></i> Perfil</div>     <!--   ti-shift-right  //  ti-power-off   -->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-item" href="http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/adm/controlPanel.php">
                                            <div class="text-center py-2 icone_logoff"><i class="ti-panel"></i> Area Admin</div>     <!--   ti-star  //  ti-panel   -->
                                        </a>
                                    </li>
                                    <li class="nav-item"><hr class="dropdown-divider"></li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-item" href="http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/Formularios/Login/log-off.php">
                                            <div class="text-center py-2 icone_logoff"><i class=" ti-power-off"></i> Desconectar</div>     <!--   ti-shift-right  //  ti-power-off   -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    
                    <div class="col-1">  <!-- style="background-color: lightgray;" -->
                        <!-- margem visual --> <div id="resposta"></div>
                    </div> 
                    
                </div>
            </div>
        </div>
    </div>
<!-- ****** FIM top ****** -->
    <script src="http://localhost/projetos/php/github/Pizzaria-ecommerce/js/jquery-3.6.1.js"></script>
    <script>
        $(function()
        {
            // alert("teste");  //linha de teste
            function sucessoCabecalho(datas)
            {
                $("#resposta").empty().html(datas);
            }
            function carregando(datas) //$("");
            {
                $("#resposta").empty().html("Carregando..");
            }
            function erro_enviar()
            {
                $("#resposta").empty().html("Erro ao enviar");
            }
            // $.ajaxSetup({
            //     type:           'POST',
            //     success:        sucessoCabecalho,
            //     error:          erro_enviar,
            //     beforeSend:     carregando
            // });
            
                //http://localhost/n7/php/github/Pizzaria-ecommerce/Paginas/Cart/Carrinho.php 
            // action = 'Paginas/Cart/validar_carrinho.php';
            // $.ajax({
            //     url:        action,
            //     data:{
            //         codVenda:       $('#txtcodVenda').val(),
            //         codUsuario:     $('#txtcodUser').val()
            //     }
            // });
            //usar .load ao invés de ajax, pois não há necessidade de enviar e depois puxar informação. Apenas puxar.
        });
    </script>