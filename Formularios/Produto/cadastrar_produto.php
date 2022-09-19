<?php
    include_once('../../conexao.php');
    
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
        $dadosP = $cone->prepare("INSERT INTO Produto(
            nome_produto,
            imagem_produto,
            descricao_produto, 
            qtd_produto,
            valor_produto,
            codigo_categoria,
            obs_produto,
            status_produto 
        ) VALUES(
            :nome_produto,
            :imagem_produto,
            :descricao_produto,
            :qtd_produto,
            :valor_produto,
            :codigo_categoria,
            :obs_produto,
            :status_produto
        )");

        $dadosP->execute(array(
            ':nome_produto' => $nome_produto,
            ':imagem_produto' => $imagem_produto,
            ':descricao_produto' => $descricao_produto,
            ':qtd_produto' => $qtd_produto,
            ':valor_produto' => $valor_produto,
            ':codigo_categoria' => $codigo_categoria,
            ':obs_produto' => $obs_produto,
            ':status_produto' => $status_produto
        ));

        if($dadosP->rowCount() == 1)
        {
            // header('location: frm_produto.php');
            echo "<p>Cadastro efetuado com sucesso!!</p>";
            echo "<p id='CodCadastrado'>".$cone->lastInsertId()."</p>";
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: " .$erro->getMessage();
    }
?>