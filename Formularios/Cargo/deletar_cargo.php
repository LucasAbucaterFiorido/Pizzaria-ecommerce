<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        // echo "<pre>";print_r($_POST);echo "</pre>";
        $codCargo = $_POST['txtcod'];

        try 
        {
            $alterarCarg = $cone->prepare("UPDATE Cargo SET
                status_cargo = :status_cargo
                WHERE codigo_cargo = $codCargo
            ");
            $alterarCarg->execute(array(
                ':status_cargo' => "Desativo"
            ));
            if($alterarCarg->rowCount() == 1)
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