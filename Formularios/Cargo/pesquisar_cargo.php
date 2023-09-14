<?php
    include_once('../../conexao.php');
    // echo 'teste';
    // echo '<pre>';print_r($_POST);echo '</pre>';  //linha de teste
    if($_POST)
    {
        $codCargo = $_POST['txtcod'];
        try 
        {
            $consultaCarg = $cone->query("SELECT * FROM Cargo WHERE codigo_cargo = $codCargo");
            if($consultaCarg->rowCount() == 1)
            {
                foreach ($consultaCarg as $linhaCarg) 
                {
                    // echo '<pre>';print_r($linhaCarg);echo '</pre>';
                    // echo '<pre>';print_r($codCargo);echo '</pre>';
                    echo "<pre>";
                    
                    print_r("<p id='cod_pesquisa'>".$linhaCarg['codigo_cargo']."</p>");
                    print_r("<p id='local_pesquisa'>".$linhaCarg['local_cargo']."</p>");
                    print_r("<p id='nome_pesquisa'>".$linhaCarg['nome_cargo']."</p>");
                    print_r("<p id='status_pesquisa'>".$linhaCarg['status_cargo']."</p>");
                    print_r("<p id='descricao_pesquisa'>".$linhaCarg['descricao_cargo']."</p>");
                    print_r("<p id='obs_pesquisa'>".substr($linhaCarg['obs_cargo'],0,10)."</p>");

                    echo "</pre>";
                }
            }
            else
            {
                print_r("<p id='resposta'>Não há cargo com este código.</p>");
            }
        } 
        catch (PDOException $erro) 
        {
            echo "Erro: ".$erro->getMessage();
        }
    }
?>