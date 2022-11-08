<!-- ****** Cardápio Pizzas ****** -->
    <div class="row">
        <div class="col-12">
            <div class="container mid">

                <div class="row">
                    <div class="col-1"><!-- margem visual --></div>
                    <div class="col-10">
                        <div class="text-center titulo-cardapio_mid">
                            <h1 class="">Cardápio</h1>
                        </div>
                    </div>
                    <div class="col-1"><!-- margem visual --></div>
                </div>

                <div class="row mt-4">
                    <div class="col-1"><!-- margem visual --></div>
                    <div class="col-10">
                        <nav class="navbar navbar-expand justify-content-center titulo-cardapio_mid">
                                <ul class="navbar-nav">
                                    <a name="cardapioAncora"></a> 
                                    <?php
                                        try 
                                        {
                                            $data = $cone->query("SELECT * FROM Categoria WHERE obs_categoria = 'c' AND status_categoria = 'Ativo'");
                                            
                                            foreach($data as $linha)
                                            {
                                                echo "
                                                    <li class='nav-item'>
                                                        <a href='#' class='nav-link' id='btt-filtro' onclick='var a = ".$linha['codigo_categoria'].";teste(a)'>".$linha['nome_categoria']."</a>
                                                    </li>";
                                            }
                                            //primeira versao do filtro de categoria
                                            // <li class='nav-item'>
                                            //     <form action='' method='post'>
                                            //         <input type='hidden' id='cod-filtro' value='".$linha['codigo_categoria']."'>
                                            //         <button class='nav-link' id='btt-filtro'>".$linha['nome_categoria']."</button>
                                            //     </form>
                                            // </li>";
                                        }
                                        catch ( PDOException $erro) 
                                        {
                                            echo 'Erro: ' .$erro->getMessage();
                                        }
                                    ?>
                                </ul>
                        </nav>
                    </div> 
                    <div class="col-1"><!-- margem visual --></div>  
                </div>
                <div id="callback"></div> <!-- style="display: none;" -->
                <div class="row mt-5" id="teste">
                    
                </div>
            </div>
        </div>
    </div>
<!-- ****** FIM Cardápio Pizzas ****** -->

<!-- <script> //primeira versao do filtro de categoria do ecommerce
    $(function()
    {
        // alert('teste');  //linha de teste
        var callback = $("#callback");

        $("#teste").load("http://localhost/projetos/GitHub/Pizzaria-ecommerce/index-div/catalogo.php");

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
        $.ajaxSetup({
            type:           'POST',
            beforeSend:     carregando,
            error:          erro_enviar,
            success:        sucesso
        });

        $("#btt-filtro").click(function()
        {
            // alert('teste');  //linha de teste
            $("#teste").html("");
            action='http://localhost/projetos/GitHub/Pizzaria-ecommerce/index-div/catalogo.php';

            $.ajax({
                url:            action,
                data:{
                    txtcod:     $("#cod-filtro").val()
                }
            });  
        });
    });
</script> -->
<script>    //segunda versao do filtro de categoria do ecommerce
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
        action = "http://localhost/projetos/gitHub/Pizzaria-ecommerce/index-div/catalogo.php";
        // action = "http://localhost/projetos/gitHub/Pizzaria-ecommerce/teste2.php";

        $.ajax({
            url:        action,
            data:{
                txtcod: cod
            }
        });
    }
</script>