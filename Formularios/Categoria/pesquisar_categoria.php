<?php
    include_once('../../conexao.php');
    // echo '<pre>';print_r($_POST);echo '</pre>';  //linha de teste
    if($_POST)
    {
        $codCategoria = $_POST['txtcod'];
        try 
        {
            $consultaCat = $cone->query("SELECT * FROM Categoria WHERE codigo_categoria = $codCategoria");
            if($consultaCat->rowCount() == 1)
            {
                foreach ($consultaCat as $linhaCat) 
                {
                    // echo '<pre>';print_r($linhaC);echo '</pre>';
                    // echo '<pre>';print_r($codCategoria);echo '</pre>';
                    echo "<pre>";
                    
                    print_r("<p id='cod_pesquisa'>".$linhaCat['codigo_categoria']."</p>");
                    print_r("<p id='local_pesquisa'>".$linhaCat['localArmaz_categoria']."</p>");
                    print_r("<p id='nome_pesquisa'>".$linhaCat['nome_categoria']."</p>");
                    print_r("<p id='status_pesquisa'>".$linhaCat['status_categoria']."</p>");
                    print_r("<p id='descricao_pesquisa'>".$linhaCat['descricao_categoria']."</p>");
                    print_r("<p id='obs_pesquisa'>".substr($linhaCat['obs_categoria'],0,10)."</p>");

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