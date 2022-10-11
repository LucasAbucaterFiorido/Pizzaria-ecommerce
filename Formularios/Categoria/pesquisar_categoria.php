<?php
    include_once('../../conexao.php');
    // echo '<pre>';print_r($_POST);echo '</pre>';  //linha de teste
    if($_POST)
    {
        $codCategoria = $_POST['txtcod'];
        try 
        {
            $consultaC = $cone->query("SELECT * FROM Categoria WHERE codigo_categoria = $codCategoria");
            if($consultaC->rowCount() == 1)
            {
                foreach ($consultaC as $linhaC) 
                {
                    // echo '<pre>';print_r($linhaC);echo '</pre>';
                    // echo '<pre>';print_r($codCategoria);echo '</pre>';
                    echo "<pre>";
                    
                    print_r("<p id='cod_pesquisa'>".$linhaC['codigo_categoria']."</p>");
                    print_r("<p id='local_pesquisa'>".$linhaC['localArmaz_categoria']."</p>");
                    print_r("<p id='nome_pesquisa'>".$linhaC['nome_categoria']."</p>");
                    print_r("<p id='status_pesquisa'>".$linhaC['status_categoria']."</p>");
                    print_r("<p id='descricao_pesquisa'>".$linhaC['descricao_categoria']."</p>");
                    print_r("<p id='obs_pesquisa'>".substr($linhaC['obs_categoria'],0,10)."</p>");

                    echo "</pre>";
                }
            }
            else
            {
                print_r("<p id='resposta'>Não há categoria com este código.</p>");
            }
        } 
        catch (PDOException $erro) 
        {
            echo "Erro: ".$erro->getMessage();
        }
    }
?>