<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        echo "<pre>";print_r($_POST);echo "</pre>";
        $codCategoria = $_POST['txtcod'];
        $localCat = $_POST['txtlocal'];
        $nomeCat = $_POST['txtnome'];
        $statusCat = $_POST['selectsts'];
        $descricaoCat = $_POST['txtdesc'];
        $obsCat = $_POST['txtobs'];

        try 
        {
            $alterarC = $cone->prepare("UPDATE Categoria SET
                localArmaz_categoria = :localArmaz_categoria,
                nome_categoria = :nome_categoria,
                descricao_categoria = :descricao_categoria,
                obs_categoria = :obs_categoria,
                status_categoria = :status_categoria
                WHERE codigo_categoria = $codCategoria
            ");
            $alterarC->execute(array(
                ':localArmaz_categoria' => $localCat,
                ':nome_categoria' => $nomeCat,
                ':descricao_categoria' => $descricaoCat,
                ':obs_categoria' => $obsCat,
                ':status_categoria' => $statusCat
            ));
            if($alterarC->rowCount() == 1)
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