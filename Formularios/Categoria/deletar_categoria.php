<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        // echo "<pre>";print_r($_POST);echo "</pre>";
        $codCategoria = $_POST['txtcod'];

        try 
        {
            $alterarC = $cone->prepare("UPDATE Categoria SET
                status_categoria = :status_categoria
                WHERE codigo_categoria = $codCategoria
            ");
            $alterarC->execute(array(
                ':status_categoria' => "Desativo"
            ));
            if($alterarC->rowCount() == 1)
            {
                echo "<p>Deletado com sucesso!!</p>";
            }
        }
        catch (PDOException $erro) 
        {
            echo "Erro: " .$erro->getMessage();
        }
    }
?>