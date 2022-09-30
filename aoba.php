<?php
    include_once("conexao.php");
    session_start();
    include_once("Formularios/Login/validar_teste.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste aoba</title>
</head>
<body>
    <h1>Teste Aoba</h1>
    <hr>
    <br>
    <?=  "Inicio: " .$codProduto ?>
    <form action="" method="post" id="form-test" onsubmit="return false;">
        <input type="hidden" id="txtCodProduto" name="txtCodProduto" value="<?= $codProduto ?>">
        <label for="">Quantidade</label>
        <input type="number" id="txtqtd" name="txtqtd">
        <a href="#" id="btt-cart">+Add Cart</a>
    
        <br>
        <div id="resposta"></div>
    </form>
    <script src="js/jquery-3.6.1.js"></script>
    <script>
        $(function()
        {
            function sucesso(datas)
            {
                $("#resposta").html(datas);
            }
            function erro_enviar(datas)
            {
                alert('Erro ao enviar');
            }

            $.ajaxSetup({
                type:       'POST',
                error:      erro_enviar,
                success:    sucesso
            });
            $("#btt-cart").click(function()
            {
                //alert("teste");
                action = "http://localhost/projetos/php/Backup/Pizzaria-ecommerce/teste.php";
                $.ajax({
                    url:            action,
                    data:{
                        txtcodigo:     $("#txtCodProduto").val(),
                        txtqtd:     $("#txtqtd").val()
                    }
                });
            });
        });
    </script>
</body>
</html>