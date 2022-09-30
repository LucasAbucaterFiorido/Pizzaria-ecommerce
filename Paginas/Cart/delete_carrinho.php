<?php
    include_once("../../conexao.php");
    session_start();
    //include_once("validar_carrinho.php");

    $codVenda_sessao = $_SESSION['codVenda_sessao']; //declara variavel de sessao em variavel local para melhor utilização
    $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização

    if($_POST)
    {
        $codProduto = $_POST['codProduto'];  //declara variavel de POST armazenando o codigo de produto, dado enviado da pagina 'detalhesProdutosPage.php'
        echo "<pre> post:"; print_r($_POST); echo "</pre>";  //linha de teste

        try 
        {
            $deletarItem = $cone->prepare("DELETE from Item WHERE codigo_venda = $codVenda_sessao AND codigo_produto = $codProduto");
            $deletarItem->execute();

            if($deletarItem->rowCount() == 1)
            {
                echo "Deletado com Sucesso!";
            }
        } 
        catch (PDOException $erro) 
        {
            echo "Erro: ".$erro->getMessage();
        }
    }
?>