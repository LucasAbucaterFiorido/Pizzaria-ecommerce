

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

{/*             <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </span>
                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </span>*/}


    //  javascript    window.location="http://localhost/projetos/arquivo/arquivo-resposta/Backup/Pizzaria-ecommerce-antigo/Pizzaria-ecommerce-antigo/Paginas/Cart/Carrinho.php";
    //  jquery        $(location).attr('href', 'http://localhost/projetos/arquivo/arquivo-resposta/Backup/Pizzaria-ecommerce-antigo/Pizzaria-ecommerce-antigo/Paginas/Cart/Carrinho.php');  
    //configuração botoes mais e menos
    $("#bttMais").click(function(){
        quantidade = $("#txtqtd").val();
        quantidade ++;
        $("#txtqtd").val(quantidade);
    });
    $("#bttMenos").click(function(){
        quantidade = $("#txtqtd").val();
        quantidade --;
        $("#txtqtd").val(quantidade);
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
        //javascript    window.location="http://localhost/projetos/arquivo/arquivo-resposta/Backup/Pizzaria-ecommerce-antigo/Pizzaria-ecommerce-antigo/Paginas/Cart/Carrinho.php";
        //jquery        $(location).attr('href', 'http://localhost/projetos/arquivo/arquivo-resposta/Backup/Pizzaria-ecommerce-antigo/Pizzaria-ecommerce-antigo/Paginas/Cart/Carrinho.php');  
        if(icone_cart.hasClass("ti-shopping-cart"))
        {
            action = 'http://localhost/projetos/github/Pizzaria-ecommerce/Paginas/Cart/cadastrar_carrinho.php'
            $.ajax({
                type:           'POST',
                beforeSend:     carregando,
                url:            action,
                data:{
                    codProduto: $("#txtCodProduto").val(),
                    qtdProduto: $("#txtqtd").val()
                },
                success:    $(location).attr('href', 'http://localhost/projetos/github/Pizzaria-ecommerce/Paginas/Cart/Carrinho.php'),
                error:      alert("erro botao comprar")      
            });
        }
        else if(icone_cart.hasClass("ti-shopping-cart-full"))
        {
            $(location).attr('href', 'http://localhost/projetos/github/Pizzaria-ecommerce/Paginas/Cart/Carrinho.php');
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