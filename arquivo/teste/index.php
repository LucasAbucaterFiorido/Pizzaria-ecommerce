<form action="" method="POST" onsubmit="return false;">
    <input type="hidden" id="txtcod" value="1">
    <label for="">Uma Palavra</label>
    <input type="text" id="txtpalavra">
    <a href="#" id="btt-enviar">Enviar</a>
    <div id="resposta"></div>
</form>
<script src="js/jquery-3.6.1.js"></script>
<script>
    $(function(){
        function carregando(datas)
        {
            $("#resposta").empty().html("Carregando..");
        }
        function sucesso(datas)
        {
            $("#resposta").empty().html("<pre>"+datas+"</pre>");
        }
        function erro_enviar()
        {
            $("#resposta").empty().html("Erro ao enviar");
        }
        $.ajaxSetup({
            type:           'POST',
            beforeSend:     carregando,
            error:          erro_enviar,
            success:           sucesso
        });

        $("#btt-enviar").click(function()
        {
            action = 'pagina-secundaria.php';
            $.ajax({
                url:        action,
                data:{
                    txtpalavra:     $("#txtpalavra").val(),
                    txtcod:     $("#txtcod").val()
                }
            });
        });
    });
</script>
