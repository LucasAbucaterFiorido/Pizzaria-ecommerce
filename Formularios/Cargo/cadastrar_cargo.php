<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        $localCarg = $_POST['txtlocal'];
        $nomeCarg = $_POST['txtnome'];
        $statusCarg = $_POST['selectsts'];
        $descricaoCarg = $_POST['txtdesc'];
        $obsCarg = $_POST['txtobs'];

        try 
        {
            $cadastrarCarg = $cone->prepare("INSERT INTO Cargo(
                local_cargo,
                nome_cargo,
                descricao_cargo,
                obs_cargo,
                status_cargo
            )VALUES(
                :local_cargo,
                :nome_cargo,
                :descricao_cargo,
                :obs_cargo,
                :status_cargo
            )");
            $cadastrarCarg->execute(array(
                ':local_cargo' => $localCarg,
                ':nome_cargo' => $nomeCarg,
                ':descricao_cargo' => $descricaoCarg,
                ':obs_cargo' => $obsCarg,
                ':status_cargo' => $statusCarg
            ));
            if($cadastrarCarg->rowCount() == 1)
            {
                echo "<p>Cadastro efetuado com sucesso!!</p>";
                echo "<p id='CodCadastrado'>".$cone->lastInsertId()."</p>";
            }
        } 
        catch (PDOException $erro) 
        {
            echo "Erro: " .$erro->getMessage();
        }
    }
?>