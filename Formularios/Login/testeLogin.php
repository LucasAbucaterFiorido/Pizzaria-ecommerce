<form action="cadastrar_usuario-login.php" method="post" onsubmit="return false;">
    <input type="text" id="txtcargo" name="selectcargo" value="Comum" disabled> 
    <input type="text" id="txtstatus" name="selectsts" value="Ativo" disabled>

    <br>
    <label for="txtnome">Nome</label>
    <br>
    <input type="text" id="txtnome" name="txtnome">
    <br>
    <label for="txtlogin">Login</label>
    <br>
    <input type="text" id="txtlogin" name="txtlogin">
    <br>
    <label for="txtsenha">senha</label>
    <br>
    <input type="text" id="txtsenha" name="txtsenha">
    <br>
    <label for="txtdesc">Descrição</label>
    <br>
    <input type="text" id="txtdesc" name="txtdesc">
    <br>
    <label for="txtobs">obs</label>
    <br>
    <input type="text" id="txtobs" name="txtobs">
    <br><br> 
    <button type="submit" id="btt_cadastrar">Enviar</button>
</form>
<hr>
<div id="callback"></div>


    <script src="../../js/bootstrap.bundle.js"></script>
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
                //$(location).attr('href', 'http://localhost/n7/php/github/Pizzaria-ecommerce/index.php');
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
                        selectcargo:     $("#selectcargo").val(),
                        txtobs:     $("#txtobs").val()
                    }
                });  
            });
        });
    </script>

