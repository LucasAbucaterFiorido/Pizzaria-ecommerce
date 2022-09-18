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
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Login" id="txtlogin" name="txtlogin">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="ti-lock"></i></span>
                                        <input type="text" class="form-control" placeholder="Senha" id="txtsenha" name="txtsenha">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success col-3">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/jquery-3.6.0.js"></script>
    <script>
        
    </script>
</body>
</html>