<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        echo "<pre>";print_r($_POST);echo "</pre>";
        $codCarg = $_POST['txtcod'];
        $localC = $_POST['txtlocal'];
        $nomeC = $_POST['txtnome'];
        $statusC = $_POST['selectsts'];
        $descricaoC = $_POST['txtdesc'];
        $obsC = $_POST['txtobs'];

        try 
        {
            $alterarCarg = $cone->prepare("UPDATE Cargo SET
                local_cargo = :local_cargo,
                nome_cargo = :nome_cargo,
                descricao_cargo = :descricao_cargo,
                obs_cargo = :obs_cargo,
                status_cargo = :status_cargo
                WHERE codigo_cargo = $codCarg
            ");
            $alterarCarg->execute(array(
                ':local_cargo' => $localC,
                ':nome_cargo' => $nomeC,
                ':descricao_cargo' => $descricaoC,
                ':obs_cargo' => $obsC,
                ':status_cargo' => $statusC
            ));
            if($alterarCarg->rowCount() == 1)
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