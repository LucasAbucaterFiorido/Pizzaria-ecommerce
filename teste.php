
<button onclick="var a = 30;teste(a)"> <!-- var a = 35; teste(a) -->
    Enviar
</button>

<div id="callback"></div>

<script src="js/jquery-3.6.1.js"></script>
<script>
    $(function()
    {
        // alert("teste");
        var callback = $("#callback");
        var action = "";


        function carregando(datas)
        {
            callback.empty().html("Carregando...");
        }

        function sucesso(datas)
        {
            callback.empty().html("<pre>"+ datas +"</pre>");
            $("#txtcod").val($("#cod_pesquisa").html());
        }

        function erro_enviar(datas)
        {
            callback.empty().html("Erro ao enviar.");
        }

        $.ajaxSetup({
            type:           'POST',
            beforeSend:     carregando,
            error:          erro_enviar,
            success:        sucesso
        })
    });

    function teste(cod) //pelo visto está função não funciona se estiver em um $funcion(){..}, não sei se é o evento onClick, pois com o evento onChange funciona
    {
        // alert("teste");
        // $("#callback").html(cod);
        action = "http://localhost/projetos/gitHub/Pizzaria-ecommerce/teste2.php";

        $.ajax({
            url:        action,
            data:{
                txtcod: cod
            }
        });
    }
</script>