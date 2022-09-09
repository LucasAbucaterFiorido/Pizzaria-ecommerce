<?php
    include_once('../conexao.php');

    $cod = $_POST['txtcod'];

    try
    {
        $dados = $cone->prepare("DELETE FROM produto WHERE codigo_produto = $cod");

        $dados->execute();

        if($dados->rowCount() == 1)
        {
            header('location: form_produto.php');
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: ".$erro->getMessage();
    }
?>