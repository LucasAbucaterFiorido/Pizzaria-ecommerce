//  PROFESSOR ->
// $("#aba_usuario").click(function(){
//     alert("Teste");
//     $("#teste").load("../sistemarecap/Produto/form_produto.php");
// })

$(window).on("load", function()
{
    // alert('teste');  //linha de teste

    $("#aba_dados").click(function()
    {
        // alert('teste');  //linha de teste
        $("#telas").load("http://localhost/projetos/GitHub/Pizzaria-ecommerce/Paginas/Usuario/meusDados.php");

        $("#aba_dados").addClass("btt-active_perfil ");
        $("#aba_pedidos").removeClass("btt-active_perfil ");
        $("#aba_cartoes").removeClass("btt-active_perfil ");
        $("#aba_favoritos").removeClass("btt-active_perfil ");
        $("#aba_ajuda").removeClass("btt-active_perfil ");
    });

    $("#aba_pedidos").click(function()
    {
        $("#telas").load("http://localhost/projetos/GitHub/Pizzaria-ecommerce/Paginas/Usuario/meusPedidos.php");
        
        $("#aba_dados").removeClass("btt-active_perfil ");
        $("#aba_pedidos").addClass("btt-active_perfil ");
        $("#aba_cartoes").removeClass("btt-active_perfil ");
        $("#aba_favoritos").removeClass("btt-active_perfil ");
        $("#aba_ajuda").removeClass("btt-active_perfil ");
    });

    $("#aba_cartoes").click(function()
    {
        $("#telas").load("http://localhost/projetos/GitHub/Pizzaria-ecommerce/Paginas/Usuario/meusCartoes.php");
        
        $("#aba_dados").removeClass("btt-active_perfil ");
        $("#aba_pedidos").removeClass("btt-active_perfil ");
        $("#aba_cartoes").addClass("btt-active_perfil ");
        $("#aba_favoritos").removeClass("btt-active_perfil ");
        $("#aba_ajuda").removeClass("btt-active_perfil ");
    });

    $("#aba_favoritos").click(function()
    {
        $("#telas").load("http://localhost/projetos/GitHub/Pizzaria-ecommerce/Paginas/Usuario/meusFavoritos.php");
        
        $("#aba_dados").removeClass("btt-active_perfil ");
        $("#aba_pedidos").removeClass("btt-active_perfil ");
        $("#aba_cartoes").removeClass("btt-active_perfil ");
        $("#aba_favoritos").addClass("btt-active_perfil ");
        $("#aba_ajuda").removeClass("btt-active_perfil ");
    });

    $("#aba_ajuda").click(function()
    {
        $("#telas").load("http://localhost/projetos/GitHub/Pizzaria-ecommerce/Paginas/Usuario/ajuda.php");
        
        $("#aba_dados").removeClass("btt-active_perfil ");
        $("#aba_pedidos").removeClass("btt-active_perfil ");
        $("#aba_cartoes").removeClass("btt-active_perfil ");
        $("#aba_favoritos").removeClass("btt-active_perfil ");
        $("#aba_ajuda").addClass("btt-active_perfil ");
    });

});

// $(document).ready(function()
// {
//     $("#aba_usuario").click(function()
//     {
//         $("#teste").load("Usuario/form_usuario.html");
//     });

//     $("#aba_fornecedor").click(function()
//     {
//         $("#teste").load("Fornecedor/form_fornecedor.html");
//     });

//     $("#aba_categoria").click(function()
//     {
//         $("#teste").load("Categoria/form_categoria.html");
//     });

//     $("#aba_produto").click(function()
//     {
//         $("#teste").load("Produto/form_produto.php");
//     }); 
// })



// vai carregar os scripts apenas depois carregar toda tela, ação necessaria por colocar os scripts no head. Tudo dentro do head não aparece quando inspecionam a pagina no google.
// $(document).load(function()
// {

// })