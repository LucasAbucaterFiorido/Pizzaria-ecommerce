<?php

    include_once("../../conexao.php");
    session_start();
    //include_once("validar_carrinho.php");
    //include_once("../../Formularios/Login/validar_login.php");
    
    $codVenda_sessao = $_SESSION['codVenda_sessao']; //declara variavel de sessao em variavel local para melhor utilização
    $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização

    if($_POST)  //verifica se há algum POST
    {
        $codProduto = $_POST['codProduto'];  //declara variavel de POST armazenando o codigo de produto, dado enviado da pagina 'detalhesProdutosPage.php'
        $qtdProduto = $_POST['qtdProduto'];  //declara variavel de POST armazenando a quantidade do produto, dado enviado da pagina 'detalhesProdutosPage.php'
        echo "<pre> post:"; print_r($_POST); echo "</pre>";  //linha de teste

        try 
        {
            //$dadosI = $cone->query("SELECT * FROM Item WHERE codigo_venda = $codVenda_sessao"); // seleciona todos os items do carrinho usando o codigo de venda vinculado ao usario
            
            // Adcionando item ao carrinho
            $cadastroItem = $cone->prepare("INSERT INTO Item(
                qtdProd_item,
                valorProd_item,
                codigo_produto,
                codigo_venda
            ) VALUES(
                :qtdProd_item,
                :valorProd_item,
                :codigo_produto,
                :codigo_venda
            )");
            $cadastroItem->execute(array(
                ':qtdProd_item' => $qtdProduto,
                ':valorProd_item' => '0',
                ':codigo_produto' => $codProduto,
                ':codigo_venda' => $codVenda_sessao
            ));
            // FIM Adcionando item ao carrinho

            if($cadastroItem->rowCount() == 1)    //if existente apenas para manter a variavel session atualizada caso o usuario deseje fazer + de 1 compra enquanto esteja logado.
            {
                $idGerado = $cone->lastInsertId(); //atualizar variavel de sessao com o codigo de venda. codigo 'lastInsertId' chama o ultimo Id criado na tabela
                echo "Cadastro Realizado com Sucesso! Id gerado: ".$idGerado;
            }

        } 
        catch (PDOException $erro) 
        {
            echo "Erro: ".$erro->getMessage();
        }
    }
?>