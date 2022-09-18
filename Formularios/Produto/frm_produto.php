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
    <title>Produto</title>
</head>
<body class="body_config">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container input_formP">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="card-title"><u>Formulário Produto</u></h1>
                            <hr>
                            <br>
                        </div>
                    </div>
                    <form action="" method="POST" id="form_produto" name="form_produto">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="form-label" for="txtcod">Código:</label>
                                <br>
                                <input class="form-control" type="text" id="txtcod" name="txtcod">
                            </div>
                            <div class="col-sm-2">
                                <p>&nbsp;</p>
                                <p><button id="btoPesquisar" formaction="pesquisar_produto.php" class="btn btn-secondary">&#128269;</button></p>
                            </div>
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="txtdata">Data de Cadastro:</label>
                                <br>
                                <input class="form-control" type="date" id="txtdata" name="txtdata">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="form-label" for="txtnome">Nome:</label>
                                <br>
                                <input class="form-control" type="text" id="txtnome" name="txtnome">   
                            </div>
                            <div class="col-sm-2">
                                <label class="form-label" for="txtqtd">Quantidade:</label>
                                <br>
                                <input class="form-control" type="number" id="txtqtd" name="txtqtd">   
                            </div>
                            <div class="col-sm-2">
                                <label class="form-label" for="txtvalor">Valor:</label>
                                <br>
                                <input class="form-control" type="number" id="txtvalor" name="txtvalor">   
                            </div>
                            <div class="col-sm-2">
                                <label for="selectsts">Status:</label>
                                <br>
                                <select class="form-control mt-2" name="selectsts" id="selectsts">
                                    <option value="Ativo">Ativo</option>
                                    <option value="Desativo">Desativo</option>
                                </select> 
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="form-label" for="txtdesc">Descrição:</label>
                                <br>
                                <textarea class="form-control" id="txtdesc" name="txtdesc" cols="20" rows="6"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-8">
                                <label class="form-label" for="arquivoimg">Foto do Produto:</label>
                                <br>
                                <input class="form-control" type="file" id="arquivoimg" name="arquivoimg">
                            </div>
                            <div class="col-sm-4">
                                <label for="selectcateg">Categoria:</label>
                                <br>
                                <select class='form-control mt-2' name='selectcateg' id='selectcateg'>
                                    <?php
                                        include_once('../conexao.php');
                                        try
                                        {
                                            $consulta = $cone->query('SELECT * FROM categoria');

                                            if($consulta->rowCount() >= 1)
                                            {
                                                foreach ($consulta as $linha) 
                                                {
                                                    echo "<option value=".$linha[0].">".$linha[1]."</option>";
                                                }
                                            }
                                        }
                                        catch(PDOException $erro)
                                        {
                                            echo "Erro: " .$erro->getMessage();
                                        }
                                    ?>
                                </select> 
                            </div>      
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3 border">
                                <img src="" alt="" id="preImg" style="max-width: 200px; max-height: 200px;">     
                            </div>
                            <div class="col-sm-9">
                                <label class="form-label" for="base64Code">Base 64:</label>
                                <br>
                                <textarea class="form-control" id="base64Code" name="base64Code" cols="140" rows="6"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="form-label" for="txtobs">Observação:</label>
                                <br>
                                <textarea class="form-control" id="txtobs" name="txtobs" cols="140" rows="4"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="callback"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="card-footer">
                                    <button class="btn btn-success" id="btt_cadastrar">Cadastrar</button>
                                    <button class="btn btn-primary" id="btt_alterar">Alterar</button>
                                    <button class="btn btn-warning" id="btt_limpar">Limpar</button>
                                    <button class="btn btn-danger" id="btt_excluir">Excluir</button>
                                </div>
                            </div>
                        </div>
                    </form>
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