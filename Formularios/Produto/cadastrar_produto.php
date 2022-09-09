<?php
    include_once('../conexao.php');
    
    $nome_produto = $_POST['txtnome'];
    $imagem_produto = $_POST['arquivoimg'];
    $descricao_produto = $_POST['txtdesc'];
    $qtd_produto = $_POST['txtqtd'];
    $valor_produto = $_POST['txtvalor'];
    $codigo_categoria = $_POST['selectcateg'];
    $obs_produto = $_POST['txtobs'];
    $status_produto = $_POST['selectsts'];

    try
    {
        $dados = $cone->prepare("INSERT INTO produto(
            nome_produto,
            imagem_produto,
            descricao_produto, 
            qtd_produto,
            valor_produto,
            codigo_categoria,
            obs_produto,
            status_produto 
        ) 
        VALUES(
            :nome_produto,
            :imagem_produto,
            :descricao_produto,
            :qtd_produto,
            :valor_produto,
            :codigo_categoria,
            :obs_produto,
            :status_produto
        )");

        $dados->execute(array(
            ':nome_produto' => $nome_produto,
            ':imagem_produto' => $imagem_produto,
            ':descricao_produto' => $descricao_produto,
            ':qtd_produto' => $qtd_produto,
            ':valor_produto' => $valor_produto,
            ':codigo_categoria' => $codigo_categoria,
            ':obs_produto' => $obs_produto,
            ':status_produto' => $status_produto
        ));

        if($dados->rowCount() == 1)
        {
            header('location: form_produto.php');
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: " .$erro->getMessage();
    }
?>