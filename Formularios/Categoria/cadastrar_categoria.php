<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        $localCat = $_POST['txtlocal'];
        $nomeCat = $_POST['txtnome'];
        $statusCat = $_POST['selectsts'];
        $descricaoCat = $_POST['txtdesc'];
        $obsCat = $_POST['txtobs'];

        try 
        {
            $cadastrarCat = $cone->prepare("INSERT INTO Categoria(
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
            $cadastrarCat->execute(array(
                ':localArmaz_categoria' => $localCat,
                ':nome_categoria' => $nomeCat,
                ':descricao_categoria' => $descricaoCat,
                ':obs_categoria' => $obsCat,
                ':status_categoria' => $statusCat
            ));
            if($cadastrarCat->rowCount() == 1)
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