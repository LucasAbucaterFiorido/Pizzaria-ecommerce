$(window).on("load", function()
{
    // alert('teste');  //linha de teste
    var tipo;
    $("#aba_broto").click(function()
    {
        alert('teste');  //linha de teste
        $("#telas").load("http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Usuario/frm_Usuario.php");

        $("#aba_broto").addClass("btt-active_menu");
        $("#aba_media").removeClass("btt-active_menu");
        $("#aba_grande").removeClass("btt-active_menu");
    });
    $("#aba_media").click(function()
    {
        // alert('teste');  //linha de teste
        $("#telas").load("http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Usuario/frm_Usuario.php");

        $("#aba_broto").removeClass("btt-active_menu");
        $("#aba_media").addClass("btt-active_menu");
        $("#aba_grande").removeClass("btt-active_menu");
    });
    $("#aba_grande").click(function()
    {
        // alert('teste');  //linha de teste
        $("#telas").load("http://localhost/projetos/php/GitHub/Pizzaria-ecommerce/Formularios/Usuario/frm_Usuario.php");

        $("#aba_broto").removeClass("btt-active_menu");
        $("#aba_media").removeClass("btt-active_menu");
        $("#aba_grande").addClass("btt-active_menu");
    });

});