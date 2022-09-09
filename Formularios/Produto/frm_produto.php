<head>
    <title>Produto</title>
</head>
<body>
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
                            $consulta = $cone->query('SELECT * FROM Categoria');

                            if($consulta->rowCount() >= 1)
                            {
                                foreach ($consulta as $linha) 
                                {
                                    echo "<option value=".$linha['codigo_categoria'].">".$linha['nome_categoria']."</option>";
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
    <script>
        $(function(){
        alert("teste");
        var callback = $("#callback");
        var action = "";

        function loading(datas)
        {
            callback.empty().html("Carregando...");
        }

        function cheirinho_de_sucesso(datas)
        {
            callback.empty().html("<pre>"+ datas +"</pre>");
            $("#txtcod").val($("#cod_pesquisa").html());
        }

        function erro_enviar(datas)
        {
            callback.empty().html("Erro ao enviar.");
        }

        // function limpar()
        // {
        //     $("#txtcod").val("");
        //     $("#txtnome").val("");
        //     $("#txtlogin").val("");
        //     $("#txtsenha").val("");
        //     $("#arquivoimg").val("");
        //     $("#selectsts").val("");
        //     $("#base64Code").val("");
        //     $("#txtobs").val("");
        // }

        function successPesquisa(datas)
        {
            callback.empty().html("<pre>"+ datas +"</pre>");

            $("#txtcod").val($("#cod_pesquisa").html());
            $("#txtnome").val($("#nome_pesquisa").html());
            $("#txtlogin").val($("#login_pesquisa").html());
            $("#txtsenha").val($("#senha_pesquisa").html());
            $('#base64Code').val($('#imagem_pesquisa').html());
            // $("#arquivoimg").val($("#imagem_pesquisa").html());
            $('#txtdata').val($('#cadastro_pesquisa').html());
            $("#selectsts").val($("#status_pesquisa").html());
            $("#txtobs").val($("#obs_pesquisa").html());

            var preview = document.getElementById("preImg")

            $("#base64Code").val($("#imagem_pesquisa").html());
            preview.src = $("#imagem_pesquisa").html();
        }

        $.ajaxSetup({
            type:           'POST',
            beforeSend:     loading,
            error:          erro_enviar,
            success:        cheirinho_de_sucesso
        })

        $("#btt_pesquisar").click(function()
        {
            action= "Usuario/pesquisar_usuario.php";

            $.ajax({
                url:    action,
                data:{
                    txtcod: $("#txtcod").val()
                },
                success:    successPesquisa
            });
        });

        $("#btt_cadastrar").click(function()
        {
            action = "Usuario/cadastrar_usuario.php";

            $.ajax({
                url:        action,
                data:{
                    txtnome: $("#txtnome").val(),
                    txtlogin: $("#txtlogin").val(),
                    txtsenha: $("#txtsenha").val(),
                    arquivoimg: $("#base64Code").val(),
                    selectsts: $("#selectsts").val(),
                    txtobs: $("#txtobs").val()
                }
            });
        });

        $("#btt_alterar").click(function()
        {
            action = "Usuario/alterar_usuario.php";

            $.ajax({
                url:    action,
                data:{
                    txtcod: $("#txtcod").val(),
                    txtnome: $("#txtnome").val(),
                    txtlogin: $("#txtlogin").val(),
                    txtsenha: $("#txtsenha").val(),
                    arquivoimg: $("#base64Code").val(),
                    selectsts: $("#selectsts").val(),
                    txtobs: $("#txtobs").val()
                }
            });
        });
    });
    </script>