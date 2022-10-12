<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="stylesheet" href="../../css_Slider/core-style.css">
    <link rel="icon" type="img/png" href="../../img/logo/pizzalogo.png">
    <?php include_once('../../conexao.php'); ?>
    <title>Pizzaria</title>
</head>
<body class="body_config">
    <?php
        if($_POST)
        {
            //echo "<pre>"; print_r($_POST); echo "</pre>";
            
            $login = $_POST['txtlogin'];
            $senha = $_POST['txtsenha'];

            try 
            {
                $dadosU = $cone->query("SELECT * FROM Usuario WHERE login_usuario = '$login' and senha_usuario = $senha"); //valida se as o login está correto

                if($dadosU->rowCount() == 1)
                {
                    session_start();

                    foreach ($dadosU as $linhaU) 
                    {
                        $_SESSION['codUser_sessao'] = $linhaU['codigo_usuario']; //declarando codigo do usuario em variavel de sessao
                        $_SESSION['nomeUser_sessao'] = $linhaU['nome_usuario']; //declarando nome do usuario em variavel de sessao
                        $_SESSION['loginUser_sessao'] = $linhaU['login_usuario']; //declarando login do usuario em variavel de sessao

                        header("location: ../../index.php");
                    }
                }
                else
                {
                    echo "Login ou senha inválido";
                }
            } 
            catch (PDOException $erro) 
            {
                echo "Erro: ".$erro->getMessage();
            }
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Login</h1>
                <div class="pos_login">
                    <div class="container">
                        <div class="row"> <!-- lôgo -->
                            <div class="col-12 text-center">
                                <img class="pos_logo" src="../../img/logo/pizzalogo.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <form action="" method="POST" class="text-center">
                                <div class="col-12">
                                    <div class="input-group mb-3 input_login">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                        <input type="text" class="form-control " placeholder="Login" id="txtlogin" name="txtlogin">
                                    </div>
                                    <div class="input-group mb-3 input_login">
                                        <span class="input-group-text"><i class="ti-lock"></i></span>
                                        <input type="text" class="form-control" placeholder="Senha" id="txtsenha" name="txtsenha">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary col-9 btt-entrar_login">Entrar</button>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center mt-3" style="">
                                <a href="">Esqueceu a senha ?</a>
                            </div>                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-9" style="margin: auto;">
                                <div class="divisao_rodape"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center mt-3">
                                <a href="" class="btn btn-success btt-criaconta_login">Criar nova conta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php include_once('../../index-div/rodape-div.php'); ?> <!-- ****** Rodapé ****** -->
    </div>
    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/jquery-3.6.0.js"></script>
    <script>
        
    </script>
</body>
</html>