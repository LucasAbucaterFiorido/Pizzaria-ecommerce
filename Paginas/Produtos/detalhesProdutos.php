<?php
    // onde irá puxar os detalhes dos produtos para 'detalhesProdutoPage'
    include_once('../../conexao.php');
    if($_POST)  //se há dados enviados via POST
    {
        session_start();    //abre a sessao
        $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização
        $codVenda_sessao = $_SESSION['codVenda_sessao']; //declara variavel de sessao em variavel local para melhor utilização
        $codProduto = $_POST['codProduto'];     //declara variavel com dados do código do produto que foi enviado via POST

        echo '<pre>';print_r($_POST);echo '</pre>';     //linha teste

        try 
        {
            //PDO::FETCH_ASSOC
            $consultaP = $cone->query("SELECT * FROM Produto WHERE codigo_produto = $codProduto AND status_produto = 'Ativo'"); //consulta todas as informaçoes do produto especifico

            if($consultaP->rowCount() == 1) //se houve algum resultado da consulta, então
            {
                foreach ($consultaP as $linhaP) 
                {
                    echo "<pre>";
                    print_r("
                        <p id='nome_pesquisa'>".$linhaP['nome_produto']."</p>
                        <p id='imagem_pesquisa'>".$linhaP['imagem_produto']."</p>
                        <p id='descricao_pesquisa'>".$linhaP['descricao_produto']."</p>
                        <p id='valor_pesquisa'>".$linhaP['valor_produto']."</p>
                        <p id='codigo_pesquisa'>".$linhaP['codigo_categoria']."</p>
                        <p id='obs_pesquisa'>".$linhaP['obs_produto']."</p>
                    ");
                    echo "</pre>";

                    
                    //echo '<pre>';print_r($linhaP);echo '</pre>';  //linha de teste
                }
            }
        } 
        catch (PDOException $erro) 
        {
            echo "Erro: ".$erro->getMessage();
        }
    }
?>