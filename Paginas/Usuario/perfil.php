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
    
    <title>Minha Conta</title>
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
            <div class="col-12 p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2 p-0 pos-menu_perfil">
                            <ul class="nav flex-column btts_perfil">
                                <li class="nav-item active">
                                    <a class="nav-link btt_perfil" href="#" id="aba_dados"><i class="ti-user icones"></i> Meus dados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_perfil" href="#" id="aba_pedidos"><i class="ti-receipt icones"></i> Meus Pedidos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_perfil" href="#" id="aba_cartoes"><i class="ti-credit-card icones"></i> Meus Cartões</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_perfil" href="#" id="aba_favoritos"><i class="ti-heart icones"></i> Favoritos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_perfil" href="#" id="aba_ajuda"><i class="ti-help-alt icones"></i> Ajuda</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-9 p-0 pos-tela_perfil">
                            <div class="" id="telas"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/jquery-3.6.1.js"></script>
    <script src="../../js/conta-menu-config.js"></script>
</body>
</html>