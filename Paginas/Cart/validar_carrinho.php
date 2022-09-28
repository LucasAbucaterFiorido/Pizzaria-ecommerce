<?php 
    session_start();

    if($_SESSION)
    {
        $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização
        $codVenda_sessao = $_SESSION['codVenda_sessao']; //declara variavel de sessao em variavel local para melhor utilização

        if($_GET)
        {
            if($codProduto)
            {
                $validarDadosI = $cone->query("SELECT codigo_produto FROM Item WHERE codigo_venda = $codVenda_sessao AND codigo_produto = $codProduto"); //valida se há um item do carrinho com esse código de produto
            }
        }



        // if($_POST)
        // {
        //     $codProduto_post = $_POST['txtAdd'];
        //     echo "<pre>"; print_r($_POST); echo "</pre>";   //linha de teste
        // }
    }
?>
