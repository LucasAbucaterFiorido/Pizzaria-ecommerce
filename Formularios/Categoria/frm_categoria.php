<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="icon" type="img/png" href="../../img/logo/pizzalogo.png">
    <title>Categoria</title>
</head>
<body class="body_config">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container form">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="card-title"><u>Formulário Categoria</u></h1>
                            <hr>
                            <br>
                        </div>
                    </div>
                    <form action="" class="" method="POST" id="form_produto" name="form_produto" onsubmit="return false;">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="form-label" for="txtcod">Código:</label>
                                <br>
                                <input class="form-control" type="text" id="txtcod" name="txtcod">
                            </div>
                            <div class="col-sm-2 btt-pesquisa_form">
                                <!-- <p>&nbsp;</p> -->
                                <button id="btt_pesquisar" class="btn btn-secondary">&#128269;</button>
                            </div>
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-5">
                                <label class="form-label" for="txtlocal">Local de Armazenagem:</label>
                                <br>
                                <input class="form-control" type="text" id="txtlocal" name="txtlocal" required>
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
                                <textarea class="form-control" id="txtdesc" name="txtdesc" cols="20" rows="6" required></textarea>
                            </div>
                        </div>
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
                                <div id="callback"></div> <!-- resposta das requisiçoes via javascript / style="display: none; impede que o usuario veja o callback -->
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
    <script>    //formulario
        $(function()
        {
            // alert('teste');  //linha de teste
            var callback = $("#callback");

            function carregando(datas)
            {
                callback.empty().html('Carregando..');
            }
            function sucesso(datas)
            {
                // alert('tesasad');    //linha de teste
                callback.empty().html(datas); //se obtiver sucesso, ele mostrará os dados puxados
                // callback.empty().html('<pre>'+datas+'</pre>');
            }
            function erro_enviar()
            {
                callback.empty().html("Erro ao enviar");
            }
            function sucessoPesquisa(datas)
            {
                // alert('aoba');   //linha de teste
                callback.empty().html('<pre>'+datas+'</pre>');   //linha de teste
                $("#txtlocal").val($("#local_pesquisa").html());
                $("#txtnome").val($("#nome_pesquisa").html());
                $("#selectsts").val($("#status_pesquisa").html());
                $("#txtdesc").val($("#descricao_pesquisa").html());
                $("#txtobs").val($("#obs_pesquisa").html());
            }
            function limpar()
            {
                $("#txtcod").val("");
                $("#txtlocal").val("");
                $("#txtnome").val("");
                $("#selectsts").val("");
                $("#txtdesc").val("");
                $("#txtobs").val("");
                callback.html("");
            }
            $.ajaxSetup({
                type:           'POST',
                beforeSend:     carregando,
                error:          erro_enviar,
                success:        sucesso
            });

            $("#btt_pesquisar").click(function()
            {
                // alert('teste');  //linha de teste 
                if($("#txtcod").val())
                {
                    action='http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Categoria/pesquisar_categoria.php';

                    $.ajax({
                        url:            action,
                        data:{
                            txtcod:     $("#txtcod").val()
                        },
                        success:        sucessoPesquisa
                    });  
                }
                else
                {
                    alert("Necessario código para pesquisar");
                }
            });

            $("#btt_cadastrar").click(function()
            {
                // alert('teste');  //linha de teste

                action='http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Categoria/cadastrar_categoria.php';

                $.ajax({
                    url:            action,
                    data:{
                        txtlocal:       $("#txtlocal").val(),
                        txtnome:        $("#txtnome").val(),
                        selectsts:      $("#selectsts").val(),
                        txtdesc:        $("#txtdesc").val(),
                        txtobs:         $("#txtobs").val()
                    }
                });  
                
            });
            $("#btt_alterar").click(function()
            {
                // alert('teste');  //linha de teste

                if($("#txtcod").val())
                {
                    action='http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Categoria/alterar_categoria.php';

                    $.ajax({
                        url:            action,
                        data:{
                            txtcod:         $("#txtcod").val(),
                            txtlocal:       $("#txtlocal").val(),
                            txtnome:        $("#txtnome").val(),
                            selectsts:      $("#selectsts").val(),
                            txtdesc:        $("#txtdesc").val(),
                            txtobs:         $("#txtobs").val()
                        }
                    });  
                }
                else
                {
                    alert("Necessario código para identificação");
                }
            });
            $("#btt_excluir").click(function()
            {
                // alert('teste');  //linha de teste
                if($("#txtcod").val())
                {
                    action='http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Categoria/deletar_categoria.php';

                    $.ajax({
                        url:            action,
                        data:{
                            txtcod:         $("#txtcod").val()
                        }
                    });  
                }
                else
                {
                    alert("Não há código a ser deletado");
                }
            });
            $("#btt_limpar").click(limpar);
        });
    </script>
</body>
</html>