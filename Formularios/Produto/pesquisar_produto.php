<?php
    include_once ("../../conexao.php");
    // echo '<pre>';print_r($_POST);echo '</pre>';  //linha de teste
    if($_POST)
    {
        $codCategoria = $_POST['txtcod'];
    }

    try
    {
        $consultaP = $cone->query("SELECT * FROM Produto WHERE codigo_produto = $codCategoria");  //PDO::FETCH_ASSOC

        if($consultaP->rowCount() == 1)
        {
            foreach ($consultaP as $linhaP) 
            {   
                echo "<pre>";
                // print_r($linhaP[2]);
                // print_r($linhaP['login_usuario']);
                print_r("<p id='cod_pesquisa'>".$linhaP['codigo_produto']."</p>");
                print_r("<p id='nome_pesquisa'>".$linhaP['nome_produto']."</p>");
                print_r("<p id='cadastro_pesquisa'>".substr($linhaP['cadastro_produto'],0,10)."</p>");
                // print_r("<p id='cadastro_pesquisa'>".$linhaP['cadastro_usuario']."</p>");
                print_r("<p id='imagem_pesquisa'>".$linhaP['imagem_produto']."</p>");
                print_r("<p id='descricao_pesquisa'>".$linhaP['descricao_produto']."</p>");
                print_r("<p id='quantidade_pesquisa'>".$linhaP['qtd_produto']."</p>");
                print_r("<p id='valor_pesquisa'>".$linhaP['valor_produto']."</p>");
                print_r("<p id='codCategoria_pesquisa'>".$linhaP['codigo_categoria']."</p>");
                print_r("<p id='obs_pesquisa'>".$linhaP['obs_produto']."</p>");
                print_r("<p id='status_pesquisa'>".$linhaP['status_produto']."</p>");

                echo "</pre>";
            }
        }
        else
        {
            print_r("<p id='resposta'>Não há Produto com este código.</p>");
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: " .$erro->getMessage();
    }
?>