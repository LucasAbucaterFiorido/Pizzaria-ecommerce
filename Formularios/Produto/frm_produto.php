<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="icon" type="img/png" href="../../img/logo/pizzalogo.png">
    <title>Produto</title>
</head>
<body class="body_config">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container form">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="card-title"><u>Formulário Produto</u></h1>
                            <hr>
                            <br>
                        </div>
                    </div>
                    <form action="" method="POST" id="form_produto" name="form_produto" onsubmit="return false;">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="form-label" for="txtcod">Código:</label>
                                <br>
                                <input class="form-control" type="text" id="txtcod" name="txtcod">
                            </div>
                            <div class="col-sm-2 btt-pesquisa_form">
                                <p><button id="btt_pesquisar" class="btn btn-secondary">&#128269;</button></p>
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
                                <input class="form-control" type="file" id="arquivoimg" name="arquivoimg" onchange="previewImg(this)">
                            </div>
                            <div class="col-sm-4">
                                <label for="selectcateg">Categoria:</label>
                                <br>
                                <select class='form-control mt-2' name='selectcateg' id='selectcateg'>
                                    <?php
                                        include_once('../../conexao.php');
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
                            <div class="col-sm-3 border pos-preimg_form">
                                <img class="preimg_form" src="" alt="" id="preImg" style="max-width: 200px; max-height: 200px;">     
                            </div>
                            <div class="col-sm-8">
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
                                <div id="callback"></div> <!-- resposta das requisiçoes via javascript -->
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
                        <div class="row">   <!-- linha para ajuste visual-->
                            <div class="col-12">
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    




    <script src="../../js/jquery-3.6.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://compressjs.herokuapp.com/compress.js"></script>
    <script>
        const compress = new Compress()
        const preview = document.getElementById('preImg')
        const output = document.getElementById('output')
        const txtbase64 = document.getElementById('base64Code')

        const upload = document.getElementById('arquivoimg')

        upload.addEventListener('change', (evt) => {
        const files = [...evt.target.files]
        compress.compress(files, {
            size: 4, // the max size in MB, defaults to 2MB
            quality: 0.75, // the quality of the image, max is 1,
            maxWidth: 1920, // the max width of the output image, defaults to 1920px
            maxHeight: 1920, // the max height of the output image, defaults to 1920px
            resize: true // defaults to true, set false if you do not want to resize the image width and height
        }).then((images) => {

            const img = images[0]
            // returns an array of compressed images
            preview.src = `${img.prefix}${img.data}`
            txtbase64.value = `${img.prefix}${img.data}`

            const {
            endSizeInMb,
            initialSizeInMb,
            iterations,
            sizeReducedInPercent,
            elapsedTimeInSeconds,
            alt
            } = img

            output.innerHTML = `<b>Start Size:</b> ${initialSizeInMb} MB <br/><b>End Size:</b> ${endSizeInMb} MB <br/><b>Compression Cycles:</b> ${iterations} <br/><b>Size Reduced:</b> ${sizeReducedInPercent} % <br/><b>File Name:</b> ${alt}`
        })
        }, false)
    </script>





    <script>
        $(function()
        {
            //alert("teste");
            var callback = $("#callback");
            
            function carregando(datas)
            {
                callback.empty().html('Carregando..');
            };
            function sucesso(datas)
            {
                callback.empty().html(datas);
            };
            function erro_enviar(datas)
            {
                callback.empty().html("Erro ao Enviar.");
            };
            function sucessoPesquisa(datas)
            {
                alert('aoba');   //linha de teste
                callback.empty().html('<pre>'+datas+'</pre>')   //linha de teste
                $("#txtcod").val($("#cod_pesquisa").html());
                $("#txtnome").val($("#nome_pesquisa").html());
                $("#txtdata").val($("#cadastro_pesquisa").html());
                $("#arquivoimg").val($("#imagem_pesquisa").html());
                $("#txtdesc").val($("#descricao_pesquisa").html());
                $("#txtqtd").val($("#quantidade_pesquisa").html());
                $("#txtvalor").val($("#valor_pesquisa").html());
                $("#selectcateg").val($("#codCategoria_pesquisa").html());
                $("#txtobs").val($("#obs_pesquisa").html());
                $("#selectsts").val($("#status_pesquisa").html());
            }
            function limpar()
            {
                $("#txtcod").val("");
                $("#txtnome").val("");
                $("#txtdata").val("");
                $("#arquivoimg").val("");
                $("#txtdesc").val("");
                $("#txtqtd").val("");
                $("#txtvalor").val("");
                $("#selectcateg").val("");
                $("#txtobs").val("");
                $("#selectsts").val("");
                callback.html("");
            }
            $.ajaxSetup({
                type:       'POST',
                beforeSend: carregando,
                error:      erro_enviar,
                success:    sucesso
            });

            $("#btt_pesquisar").click(function()
            {
                alert("botao pesquisar");
                action = '../Formularios/Produto/pesquisar_produto.php'

                $.ajax({
                    url:        action,
                    data:{
                        txtnome:    $("#txtcod").val()
                    },
                    success:    sucesso  //não funciona o Ajaxsetup
                });
            });
            
            $("#btt_cadastrar").click(function()
            {
                alert("botao cadastrar");
                action = '../Formularios/Produto/cadastrar_produto.php'

                $.ajax({
                    url:        action,
                    data:{
                        txtnome:    $("#txtnome").val()
                    },
                    success:    sucesso  //não funciona o Ajaxsetup
                });
            });
            $("#btt_limpar").click(limpar);
        });
    </script>
</body>
</html>