<?php
    include_once('../conexao.php');

    $cod = $_POST['txtcod'];

    try
    {
        $dados = $cone->prepare("DELETE FROM produto WHERE codigo_produto = $cod");

        $dados->execute();

        if($dados->rowCount() == 1)
        {
            header('location: ');
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: ".$erro->getMessage();
    }
?>