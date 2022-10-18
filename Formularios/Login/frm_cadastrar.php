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
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <div class="pos_cadastrar">
                    <div class="container">
                        <div class="row"> <!-- lôgo -->
                            <div class="col-3" style="line-height: 150px; margin-left: 16px;">
                                <img class="pos_logo" src="../../img/logo/pizzalogo.png" alt="">
                            </div>
                            <div class="col-1" style="margin-top: 25px;">
                                <div class="divisao-vertical_login"></div>
                            </div>
                            <div class="col-3">
                                <h1 style="line-height: 150px;">Cadastrar</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                
                                <div class="input_cadastrar text-center">
                                    <i class="ti-pencil-alt icone-editar_cadastrar"></i>
                                    <img src="../../img/usuario/images.png" alt="" class="img_cadastrar">
                                </div>
                                <input class="form-control img_cadastrar" type="file" id="arquivoimg" name="arquivoimg">
                            </div>
                        </div>
                        <div class="row">
                            <form action="" method="POST" class="text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group mb-3 input_login">
                                                <input class="form-control" type="file" id="arquivoimg" name="arquivoimg" onchange="previewImg(this)" required>
                                            </div>
                                            <div class="input-group mb-3 input_login">
                                                <span class="input-group-text"><i class="ti-user"></i></span>
                                                <input type="text" class="form-control " placeholder="Nome" id="txtnome" name="txtnome" required>
                                            </div>
                                            <div class="input-group mb-3 input_login">
                                                <span class="input-group-text"><i class="ti-user"></i></span>
                                                <input type="email" class="form-control " placeholder="Email" id="txtemail" name="txtemail" required>
                                            </div>
                                            <div class="input-group mb-3 input_login">
                                                <span class="input-group-text"><i class="ti-user"></i></span>
                                                <input type="text" class="form-control " placeholder="Login" id="txtlogin" name="txtlogin" required>
                                            </div>
                                            <div class="input-group mb-3 input_login">
                                                <span class="input-group-text"><i class="ti-lock"></i></span>
                                                <input type="password" class="form-control" placeholder="Senha" id="txtsenha" name="txtsenha" required>
                                            </div>
                                            <input type="hidden" id="selectcargo" value="Comum">
                                            <input type="hidden" id="selectsts" value="Ativo">
                                            <input type="hidden" id="txtobs" value="conta criada por usuario">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                        <button type="submit" class="btn btn-primary col-10 btt-entrar_cadastrar" id="btt_cadastrar">Cadastrar</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="callback"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row mt-3">
                            <div class="col-9" style="margin: auto;">
                                <div class="divisao_rodape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ****** Rodapé ****** -->
        <a name ='contatoAncora'></a>
        <div class="row text-white "> <!-- divisao_rodape -->
            <!-- linha -->
        </div>

        <div class="row text-white"> <!-- pos_rodape -->
            <div class="col-12">
                <div class="container">

                    <div class="row divisao_rodape">
                        <!-- linha -->
                    </div>

                    <div class="row pos-redes_rodape text-center">
                        <div class="col-4"><!-- coluna visual --></div>
                        <div class="col-1">
                            <a href=""><i class="icones_rodape fa fa-pinterest" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-1">
                            <a href=""><i class="icones_rodape fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-1">
                            <a href=""><i class="icones_rodape fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-1">
                            <a href=""><i class="icones_rodape fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-4"><!-- coluna visual --></div>
                        <div class="col-12">
                            <div id="output"></div>
                            <div><!-- style="position: relative;" -->
                                <h6 class="titulo_rodape" style="margin: 0px;">Copyright ©2022 Todos os direitos reservados | Produzido por Lucas Abucater Fiorido</h6> <!-- style="position: absolute; margin: 0;" -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** FIM Rodapé ****** -->
    </div>
    <script src="../../js/bootstrap.bundle.js"></script>
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
                $(location).attr('href', 'http://localhost/n7/php/github/Pizzaria-ecommerce/index.php');
                // callback.empty().html('<pre>'+datas+'</pre>');
            }
            function erro_enviar()
            {
                callback.empty().html("Erro ao enviar");
            }
            $.ajaxSetup({
                type:           'POST',
                beforeSend:     carregando,
                error:          erro_enviar,
                success:        sucesso
            });

            $("#btt_cadastrar").click(function()
            {
                // alert('teste');  //linha de teste
                action='cadastrar_usuario-login.php';

                $.ajax({
                    url:            action,
                    data:{
                        txtnome:     $("#txtnome").val(),
                        selectsts:     $("#selectsts").val(),
                        txtlogin:     $("#txtlogin").val(),
                        txtsenha:     $("#txtsenha").val(),
                        arquivoimg:     $("#arquivoimg").val(),
                        selectcargo:     $("#selectcargo").val(),
                        txtobs:     $("#txtobs").val()
                    }
                });  
            });
        });
    </script>
</body>
</html>