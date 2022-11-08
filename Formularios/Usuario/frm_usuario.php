<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="icon" type="img/png" href="../../img/logo/pizzalogo.png">
    <title>Usuário</title>
</head>
<body class="body_config">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container form">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="card-title"><u>Formulário Usuário</u></h1>
                            <hr>
                            <br>
                        </div>
                    </div>
                    <form action="" class="" method="POST" id="form_produto" name="form_produto" onsubmit="return false;">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="form-label" for="txtcod">Código:</label>
                                <br>
                                <input class="form-control" type="text" id="txtcod" name="txtcod">
                            </div>
                            <div class="col-sm-2 btt-pesquisa_form">
                                <!-- <p>&nbsp;</p> -->
                                <button id="btt_pesquisar" class="btn btn-secondary">&#128269;</button>
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
                            <div class="col-sm-9">
                                <label class="form-label" for="txtnome">Nome:</label>
                                <br>
                                <input class="form-control" type="text" id="txtnome" name="txtnome" required>   
                            </div>
                            <div class="col-sm-3 testi">
                                <label for="selectsts">Status:</label>
                                <br>
                                <select class="form-control mt-2" name="selectsts" id="selectsts" required>
                                    <option value="Ativo">Ativo</option>
                                    <option value="Desativo">Desativo</option>
                                </select> 
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="form-label" for="txtlogin">Login:</label>
                                <br>
                                <input class="form-control" type="text" id="txtlogin" name="txtlogin" required>   
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="txtsenha">Senha:</label>
                                <br>
                                <input class="form-control" type="text" id="txtsenha" name="txtsenha" required>   
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
                                <label for="selectcateg">Cargo:</label>
                                <br>
                                <select class='form-control mt-2' name='selectcargo' id='selectcargo' required>
                                    <?php
                                        include_once('../../conexao.php');
                                        try
                                        {
                                            $consultaC = $cone->query("SELECT * FROM Cargo WHERE status_cargo = 'Ativo'");

                                            if($consultaC->rowCount() >= 1)
                                            {
                                                foreach ($consultaC as $linhaC) 
                                                {
                                                    // echo '<pre>';print_r($linhaC);echo '</pre>';
                                                    echo "<option value=".$linhaC[0].">".$linhaC[1]."</option>";
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
                            <div class="col-sm-3 border pos-preimg_form text-center">
                                <img class="preimg_form" src="" alt="" id="preImg">   
                                <div class="output"></div>  
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





    <script> //FORMULARIO
        $(function()
        {
            var callback = $("#callback");
            var action = "";

            function carregando(datas)
            {
                callback.empty().html('Carregando..');
            };

            function sucesso(datas)
            {
                callback.empty().html(datas); //se obtiver sucesso, ele mostrará os dados puxados
                //callback.empty().html('aksdjlkajskldjklasjlkdjaslkjdklasjklsda');
                //$('#txtcod').val($("#cod_pesquisa").html()); //ja organiza a informação trazida para seu input
            }
            
            function erro_enviar()
            {
                callback.empty().html("Erro ao enviar");
            }

            function sucessoPesquisa(datas)
            {
                callback.empty().html('<pre>'+datas+'</pre>');

                $("#txtcod").val($("#cod_pesquisa").html());
                $("#txtnome").val($("#nome_pesquisa").html());
                $('#base64Code').val($('#imagem_pesquisa').html());
                // $("#arquivoimg").val($("#imagem_pesquisa").html());
                $('#selectsts').val($('#cadastro_pesquisa').html());
                $("#txtlogin").val($("#descricao_pesquisa").html());
                $("#txtsenha").val($("#quantidade_pesquisa").html());
                $("#selectcargo").val($("#valor_pesquisa").html());
                $("#txtobs").val($("#obs_pesquisa").html());

                var preview = document.getElementById("preImg")

                $("#base64Code").val($("#imagem_pesquisa").html());
                preview.src = $("#imagem_pesquisa").html();
            }

            $.ajaxSetup({
                type:       'POST',
                beforeSend: carregando,
                error:      erro_enviar,
                success:    sucesso
            });

            $("#btt_pesquisar").click(function()
            {
                // alert($("#txtcod").val());
                action="http://localhost/projetos/GitHub/Pizzaria-Ecommerce/Formularios/Produto/pesquisar_produto.php";

                $.ajax({
                    url:        action,
                    data:{
                        txtcod: $("#txtnome").val()
                    },
                    success:    sucessoPesquisa
                });
            });
            $("#btt_cadastrar").click(function()
            {
                action = 'http://localhost/projetos/GitHub/Pizzaria-Ecommerce/Formularios/Produto/cadastrar_produto.php';
                // console.log("teste");
                $.ajax({
                    url:        action,
                    data:{
                        txtnome: $("#txtnome").val(),
                        arquivoimg: $("#base64Code").val(),
                        txtdesc: $("#txtdesc").val(),
                        txtqtd: $("#txtqtd").val(),
                        txtvalor: $("#txtvalor").val(),
                        selectcateg: $("#selectcateg").val(),
                        txtobs: $("#txtobs").val(),
                        selectsts: $("#selectsts").val()
                    }
                });
            });


            $("#btt_alterar").click(function()
            {
                action = 'http://localhost/projetos/GitHub/Pizzaria-Ecommerce/Formularios/Produto/alterar_produto.php';

                $.ajax({
                    URL:        action,
                    data:{
                        txtcod: $("#txtcod").val()
                    },
                    success:    sucessoPesquisa
                });
            });
            function limpar()
            {
                $("#txtcod").val(""),
                $("#arquivoimg").val(""),
                $("#txtnome").val(""),
                $("#base64Code").val(""),
                $("#txtdesc").val(""),
                $("#txtqtd").val(""),
                $("#txtvalor").val(""),
                $("#selectcateg").val(""),
                $("#txtobs").val(""),
                $("#selectsts").val(""),
                callback.html("");
                
            }

            $("#btt_limpar").click(limpar);

            $("#btt_excluir").click(function()
            {
                action = 'http://localhost/projetos/GitHub/Pizzaria-Ecommerce/Formularios/Produto/deletar_produto.php';                
                // console.log("alalal");

                $.ajax({
                    url:        action,
                    data:{
                        txtcod: $('#txtcod').val()
                    }                
                });
            });
        });
    </script>
</body>
</html>