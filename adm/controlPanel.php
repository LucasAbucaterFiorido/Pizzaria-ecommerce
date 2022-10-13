<?php
    include_once("../conexao.php");
    session_start();
    include_once("../Formularios/Login/validar_login.php");
    include_once("../Paginas/Cart/validar_carrinho.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" type="../img/png" href="../img/logo/pizzalogo.png">
    
    <title>Admin</title>
</head>
<body class="body_config">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2 p-0 pos-menu_perfil">
                            <ul class="nav flex-column btts_perfil">
                                <li class="nav-item mt-4 mb-3">
                                    <h5>
                                        <div class="divisao_adm"></div>
                                        Formularios
                                        <div class="divisao_adm"></div>
                                    </h5>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_usuario"><i class="ti-user icones"></i> Usuário</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_produto"><i class="ti-receipt icones"></i> Produto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_categoria"><i class="ti-help-alt icones"></i> Categoria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_cargo"><i class="ti-help-alt icones"></i> Cargo</a>
                                </li>
                                <li class="nav-item mt-4 mb-3">
                                    <h5>
                                        <div class="divisao_adm"></div>
                                        Consultas
                                        <div class="divisao_adm"></div>
                                    </h5>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_usuarios"><i class="ti-user icones"></i> Usuarios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_pedidos"><i class="ti-user icones"></i> Pedidos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_produtos"><i class="ti-receipt icones"></i> Produtos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_categorias"><i class="ti-receipt icones"></i> Categorias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_cargos"><i class="ti-receipt icones"></i> Cargos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btt_menu" href="#" id="aba_produto"><i class="ti-receipt icones"></i> </a>
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
    
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/jquery-3.6.1.js"></script>
    <script src="../js/admin-menu-config.js"></script>
</body>
</html>