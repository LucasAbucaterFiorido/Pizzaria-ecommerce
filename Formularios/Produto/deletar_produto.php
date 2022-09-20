<?php
    include_once('../../conexao.php');

    $cod = $_POST['txtcod'];

    try
    {
        $dados = $cone->prepare("DELETE FROM Produto WHERE codigo_produto = $cod");

        $dados->execute();

        if($dados->rowCount() == 1)
        {
            // header('location: ');
            echo "<p>Deletado com sucesso!!</p>";
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: ".$erro->getMessage();
    }
?>