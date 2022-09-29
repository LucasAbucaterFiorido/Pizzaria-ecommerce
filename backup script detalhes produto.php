<script>
        $(function()
        {
            //ti-shopping-cart
            //ti-shopping-cart-full
            var bttComprar = $("#comprar-Cart");
            var bttCart= $("#btt-cart");
            var icone_cart = $("#icone_carrinho");
            var resposta = $("#txtresposta");

            function sucesso(datas)
            {
                // if(icone_cart.hasClass("ti-shopping-cart")) //verifica se a classe na tag '<i>' há uma classe especifica
                // {   
                //     icone_cart.removeClass("ti-shopping-cart"); //remove uma classe no DOM '<i>'
                //     icone_cart.addClass("ti-shopping-cart-full"); //adciona uma classe no DOM '<i>'
                // }
                // else if(icone_cart.hasClass("ti-shopping-cart-full")) //verifica se a classe na tag '<i>' há uma classe especifica
                // {
                //     icone_cart.removeClass("ti-shopping-cart-full"); //remove uma classe no DOM '<i>'
                //     icone_cart.addClass("ti-shopping-cart"); //adciona uma classe no DOM '<i>'
                // }
                resposta.html(datas);
            }
            function erro_enviar()
            {
                alert('Erro ao enviar');
                resposta.html(datas);
            }

            $.ajaxSetup({
                type:       'POST',
                error:      erro_enviar,
                success:    sucesso
            });

            bttComprar.click(function()
            {
                alert('botao COMPRAR');
            });

            bttCart.click(function()
            {
                
                //alert('botao CARRINHO');
                //action = '../Cart/cadastrar_carrinho.php';
                action = 'teste.php';
                $.ajax({
                    URL:                action,
                    data:{
                        txtCodProduto:  $("#txtCodProduto").val(),
                        txtqtd:         $("#txtqtd").val()
                        //adicionar outras informações para adicionar ao cadastramento do produto
                    }
                });


                // if(icone_cart.hasClass("ti-shopping-cart")) //verifica se a classe na tag '<i>' há uma classe especifica
                // {
                //     action = '../Cart/cadastrar_carrinho.php';
                //     $.ajax({
                //         URL:                action,
                //         data:{
                //             txtCodProduto:  $("#txtCodProduto").val(),
                //             txtqtd:         $("#txtqtd").val()
                //             //adicionar outras informações para adicionar ao cadastramento do produto
                //         }
                //     });
                // }
                // else if(icone_cart.hasClass("ti-shopping-cart-full")) //verifica se a classe na tag '<i>' há uma classe especifica
                // {
                //    action = '../Cart/delete_carrinho.php';
                //    $.ajax({
                //         URL:            action,
                //         data:{
                //             txtCodProduto:  $("#txtCodProduto").val()
                //             //adicionar outras informações para adicionar ao cadastramento do produto
                //         }
                //    });
                // }
            });
            
        });
    </script>