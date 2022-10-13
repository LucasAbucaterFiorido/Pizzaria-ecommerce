<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        // echo "<pre>";print_r($_POST);echo "</pre>";
        $codCategoria = $_POST['txtcod'];

        try 
        {
            $alterarCat = $cone->prepare("UPDATE Categoria SET
                status_categoria = :status_categoria
                WHERE codigo_categoria = $codCategoria
            ");
            $alterarCat->execute(array(
                ':status_categoria' => "Desativo"
            ));
            if($alterarCat->rowCount() == 1)
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