<?php
    include_once('../../conexao.php');
    // echo '<pre>';print_r($_POST);echo '</pre>';  //linha de teste
    if($_POST)
    {
        $codUsuario = $_POST['txtcod'];
        try 
        {
            $consultaU = $cone->query("SELECT * FROM Usuario WHERE codigo_usuario = $codUsuario AND status_usuario = 'Ativo'");
            if($consultaU->rowCount() == 1)
            {
                foreach ($consultaU as $linhaU) 
                {
                    // echo '<pre>';print_r($linhaU);echo '</pre>';
                    
                    echo "<pre>";

                    print_r("<p id='cod_pesquisa'>".$linhaU['codigo_usuario']."</p>");
                    print_r("<p id='nome_pesquisa'>".$linhaU['nome_usuario']."</p>");
                    print_r("<p id='login_pesquisa'>".$linhaU['login_usuario']."</p>");
                    print_r("<p id='senha_pesquisa'>".$linhaU['senha_usuario']."</p>");
                    print_r("<p id='imagem_pesquisa'>".$linhaU['imagem_usuario']."</p>");
                    print_r("<p id='cadastro_pesquisa'>".substr($linhaU['cadastro_usuario'],0,10)."</p>");
                    print_r("<p id='obs_pesquisa'>".$linhaU['obs_usuario']."</p>");
                    print_r("<p id='status_pesquisa'>".$linhaU['status_usuario']."</p>");
                    print_r("<p id='cargo_pesquisa'>".$linhaU['nome_cargo']."</p>");

                    echo "</pre>";
                }
            }
            else
            {
                print_r("<p id='resposta'>Não há Usuario com este código.</p>");
            }
        } 
        catch (PDOException $erro) 
        {
            echo "Erro: ".$erro->getMessage();
        }
    }
?>