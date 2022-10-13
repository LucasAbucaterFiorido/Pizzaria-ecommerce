<?php
    include_once('../../conexao.php');

    if($_POST)
    {
        $nomeU = $_POST['txtnome'];
        $loginU = $_POST['txtlogin'];
        $senhaU = $_POST['txtsenha'];
        $imagemU = $_POST['arquivoimg'];
        $obsU = $_POST['txtobs'];
        $cargoU = $_POST['selectcargo'];
        $statusU = $_POST['selectsts'];

        try 
        {
            $cadastrarU = $cone->prepare("INSERT INTO Usuario(
                nome_usuario,
                login_usuario,
                senha_usuario,
                imagem_usuario,
                nome_cargo,
                obs_usuario,
                status_usuario
            )VALUES(
                :nome_usuario,
                :login_usuario,
                :senha_usuario,
                :imagem_usuario,
                :nome_cargo,
                :obs_usuario,
                :status_usuario
            )");
            $cadastrarU->execute(array(
                ':nome_usuario' => $nomeU,
                ':login_usuario ' => $loginU,
                ':senha_usuario ' => $senhaU,
                ':imagem_usuario ' => $imagemU,
                ':nome_cargo ' => $cargoU,
                ':obs_usuario ' => $obsU,
                ':status_usuario ' => $statusU
            ));
            if($cadastrarU->rowCount() == 1)
            {
                // header('location: ../index.html');
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