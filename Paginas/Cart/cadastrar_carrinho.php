<?php
    include_once("../../conexao.php");

    $codProduto = $_POST['txtCodProduto'];
    $codVenda_sessao = $_SESSION['codVenda_sessao']; //declara variavel de sessao em variavel local para melhor utilização
    $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização

    echo "<pre>"; print_r($codProduto); echo "</pre>";
    try 
    {
        //$autenticarItem = $cone->query("SELECT codigo_produto FROM Item WHERE codigo_venda = $codVenda_sessao AND codigo_produto = $codProduto");
        $dadosI = $cone->query("SELECT * FROM Item WHERE codigo_venda = $codVenda_sessao");
        $dadosV = $cone->query("SELECT * FROM Venda WHERE codigo");

        if($aute)
        {

        }
    } 
    catch (PDOException $erro) 
    {
        echo "Erro: ".$erro->getMessage();
    }
?>