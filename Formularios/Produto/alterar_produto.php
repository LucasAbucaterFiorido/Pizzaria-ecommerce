<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        echo "<pre>";print_r($_POST);echo "</pre>";
        $cod = $_POST['txtcod'];
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
            $alterarP = $cone->prepare("UPDATE Categoria SET
                nome_produto = :nome_produto,
                imagem_produto = :imagem_produto,
                descricao_produto = :descricao_produto,
                qtd_produto = :qtd_produto,
                valor_produto = :valor_produto,
                codigo_categoria = :codigo_categoria,
                obs_produto = :obs_produto,
                status_produto = :status_produto
                WHERE codigo_produto = $cod
            ");
            $alterarP->execute(array(
                ':nome_produto' => $nome_produto,
                ':imagem_produto' => $imagem_produto,
                ':descricao_produto' => $descricao_produto,
                ':qtd_produto' => $qtd_produto,
                ':valor_produto' => $valor_produto,
                ':codigo_categoria' => $codigo_categoria,
                ':obs_produto' => $obs_produto,
                ':status_produto' => $status_produto
            ));
            if($alterarP->rowCount() == 1)
            {
                echo "<p>Alterado com sucesso!!</p>";
            }
        }
        catch (PDOException $erro) 
        {
            echo "Erro: " .$erro->getMessage();
        }
    }
?>