//  PROFESSOR ->
// $("#aba_usuario").click(function(){
//     alert("Teste");
//     $("#teste").load("../sistemarecap/Produto/form_produto.php");
// })

$(window).on("load", function()
{
    // alert('teste');  //linha de teste

    $("#aba_usuario").click(function()
    {
        // alert('teste');  //linha de teste
        $("#telas").load("http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Usuario/frm_Usuario.php");

        $("#aba_usuario").addClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").removeClass("btt-active_menu ");
        $("#aba_cargo").removeClass("btt-active_menu ");
    });

    $("#aba_produto").click(function()
    {
        $("#telas").load("http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Produto/frm_produto.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").addClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").removeClass("btt-active_menu ");
        $("#aba_cargo").removeClass("btt-active_menu ");
    });

    $("#aba_fornecedor").click(function()
    {
        $("#telas").load("http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Paginas/Usuario/meusCartoes.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").addClass("btt-active_menu ");
        $("#aba_cargo").removeClass("btt-active_menu ");
    });

    $("#aba_favoritos").click(function()
    {
        $("#telas").load("http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Paginas/Usuario/meusFavoritos.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").addClass("btt-active_menu ");
        $("#aba_cargo").removeClass("btt-active_menu ");
    });

    $("#aba_categoria").click(function()
    {
        $("#telas").load("http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Categoria/frm_categoria.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").addClass("btt-active_menu ");
        $("#aba_cargo").removeClass("btt-active_menu ");
    });

    $("#aba_cargo").click(function()
    {
        $("#telas").load("http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Cargo/frm_cargo.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").removeClass("btt-active_menu ");
        $("#aba_cargo").addClass("btt-active_menu ");
    });


    $("#aba_usuarios").click(function()
    {
        $("#telas").load("http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/Consultas/usuarios.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").removeClass("btt-active_menu ");
        $("#aba_cargo").addClass("btt-active_menu ");
    });
    $("#aba_pedidos").click(function()
    {
        $("#telas").load("http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/Consultas/pedidos.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").removeClass("btt-active_menu ");
        $("#aba_cargo").addClass("btt-active_menu ");
    });
    $("#aba_produtos").click(function()
    {
        $("#telas").load("http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/Consultas/produtos.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").removeClass("btt-active_menu ");
        $("#aba_cargo").addClass("btt-active_menu ");
    });
    $("#aba_categorias").click(function()
    {
        $("#telas").load("http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/Consultas/categorias.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").removeClass("btt-active_menu ");
        $("#aba_cargo").addClass("btt-active_menu ");
    });
    $("#aba_cargos").click(function()
    {
        $("#telas").load("http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/Consultas/cargos.php");
        
        $("#aba_usuario").removeClass("btt-active_menu ");
        $("#aba_produto").removeClass("btt-active_menu ");
        $("#aba_fornecedor").removeClass("btt-active_menu ");
        $("#aba_categoria").removeClass("btt-active_menu ");
        $("#aba_cargo").addClass("btt-active_menu ");
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