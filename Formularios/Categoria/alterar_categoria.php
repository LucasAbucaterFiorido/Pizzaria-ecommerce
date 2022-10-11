<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        echo "<pre>";print_r($_POST);echo "</pre>";
        $codCategoria = $_POST['txtcod'];
        $localC = $_POST['txtlocal'];
        $nomeC = $_POST['txtnome'];
        $statusC = $_POST['selectsts'];
        $descricaoC = $_POST['txtdesc'];
        $obsC = $_POST['txtobs'];

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
                ':localArmaz_categoria' => $localC,
                ':nome_categoria' => $nomeC,
                ':descricao_categoria' => $descricaoC,
                ':obs_categoria' => $obsC,
                ':status_categoria' => $statusC
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