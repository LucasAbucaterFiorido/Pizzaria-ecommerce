<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        $localC = $_POST['txtlocal'];
        $nomeC = $_POST['txtnome'];
        $statusC = $_POST['selectsts'];
        $descricaoC = $_POST['txtdesc'];
        $obsC = $_POST['txtobs'];

        try 
        {
            $cadastrarU = $cone->prepare("INSERT INTO Categoria(
                localArmaz_categoria,
                nome_categoria,
                descricao_categoria,
                obs_categoria,
                status_categoria
            )VALUES(
                :localArmaz_categoria,
                :nome_categoria,
                :descricao_categoria,
                :obs_categoria,
                :status_categoria
            )");
            $cadastrarU->execute(array(
                ':localArmaz_categoria' => $localC,
                ':nome_categoria ' => $nomeC,
                ':descricao_categoria ' => $statusC,
                ':obs_categoria ' => $descricaoC,
                ':status_categoria ' => $obsC
            ));
            if($cadastrarU->rowCount() == 1)
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