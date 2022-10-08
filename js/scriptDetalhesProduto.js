function sucessoDetalhes(datas)
{
    $("#resposta").empty().html(datas);

    var img = document.getElementById("img-1");
    img.src = $("#imagem_pesquisa").html();
    $('#nome-produto').html($('#nome_pesquisa').html());
    $('#valor-produto').html($('#valor_pesquisa').html());
}
$(function()
{
    //quando o site carregar, buscar informações do produto ->
    action = 'detalhesProdutos.php'
    $.ajax({
        type:           'POST',
        beforeSend:     carregando,
        error:          erro_enviar,
        url:            action,
        data:{
            codProduto: $("#txtCodProduto").val()
        },
        success:        sucessoDetalhes  
    });



    //  javascript    window.location="http://localhost/projetos/php/arquivo/arquivo-resposta/Backup/Pizzaria-ecommerce-antigo/Pizzaria-ecommerce-antigo/Paginas/Cart/Carrinho.php";
    //  jquery        $(location).attr('href', 'http://localhost/projetos/php/arquivo/arquivo-resposta/Backup/Pizzaria-ecommerce-antigo/Pizzaria-ecommerce-antigo/Paginas/Cart/Carrinho.php');  
    //configuração botoes mais e menos
    $("#bttMais").click(function(){
        teste = $("#txtqtd").val();
        teste ++;
        $("#txtqtd").val(teste);
    });
    
    action = '../Cart/delete_carrinho.php'
    $.ajax({
        url:            action,
        data:{
            codProduto: $("#txtCodProduto").val()
        }
    });
    
    //configuração botao comprar
    $("#btt-comprar").click(function(){
        //javascript    window.location="http://localhost/projetos/php/arquivo/arquivo-resposta/Backup/Pizzaria-ecommerce-antigo/Pizzaria-ecommerce-antigo/Paginas/Cart/Carrinho.php";
        //jquery        $(location).attr('href', 'http://localhost/projetos/php/arquivo/arquivo-resposta/Backup/Pizzaria-ecommerce-antigo/Pizzaria-ecommerce-antigo/Paginas/Cart/Carrinho.php');  
        if(icone_cart.hasClass("ti-shopping-cart"))
        {
            action = 'http://localhost/n7/php/github/Pizzaria-ecommerce/Paginas/Cart/cadastrar_carrinho.php'
            $.ajax({
                type:           'POST',
                beforeSend:     carregando,
                url:            action,
                data:{
                    codProduto: $("#txtCodProduto").val(),
                    qtdProduto: $("#txtqtd").val()
                },
                success:    $(location).attr('href', 'http://localhost/n7/php/github/Pizzaria-ecommerce/Paginas/Cart/Carrinho.php'),
                error:      alert("erro botao comprar")      
            });
        }
        else if(icone_cart.hasClass("ti-shopping-cart-full"))
        {
            $(location).attr('href', 'http://localhost/n7/php/github/Pizzaria-ecommerce/Paginas/Cart/Carrinho.php');
        }
    });

    
    var icone_cart = $("#icone_carrinho");

    function carregando(datas) //$("");
    {
        $("#resposta").empty().html("Carregando..");
    }
    function sucesso(datas)
    {
        if(icone_cart.hasClass("ti-shopping-cart")) //verifica se a classe na tag '<i>' há uma classe especifica
        {
            icone_cart.removeClass("ti-shopping-cart"); //remove uma classe no DOM '<i>'
            icone_cart.addClass("ti-shopping-cart-full"); //adciona uma classe no DOM '<i>'
        }
        else if(icone_cart.hasClass("ti-shopping-cart-full")) //verifica se a classe na tag '<i>' há uma classe especifica
        {
            icone_cart.removeClass("ti-shopping-cart-full"); //remove uma classe no DOM '<i>'
            icone_cart.addClass("ti-shopping-cart"); //adciona uma classe no DOM '<i>'
        }
        $("#resposta").empty().html("</pre>"+datas+"</pre>");
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

    $("#btt-cart").click(function()     //quando o botao 'Adicionar ao carrinho' for apertado
    {

        if(icone_cart.hasClass("ti-shopping-cart"))     //se a classe do icone é de 'carrinho' ou 'carrinho-cheio'
        {
            //se o carrinho não estiver cheio então apenas cadastrar produto na lista do carrinho
            action = '../Cart/cadastrar_carrinho.php'
            $.ajax({
                url:            action,
                data:{
                    codProduto: $("#txtCodProduto").val(),
                    qtdProduto: $("#txtqtd").val()
                }
            });
        }
        else if(icone_cart.hasClass("ti-shopping-cart-full"))       //se a classe do icone é de 'carrinho' ou 'carrinho-cheio'
        {
            //se o carrinho estiver cheio então apenas deletar o produto da lista do carrinho
            action = '../Cart/delete_carrinho.php'
            $.ajax({
                url:            action,
                data:{
                    codProduto: $("#txtCodProduto").val()
                }
            });
        }
    });
});