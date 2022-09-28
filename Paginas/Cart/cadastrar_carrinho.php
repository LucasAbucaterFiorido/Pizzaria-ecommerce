<?php
    include_once("../../conexao.php");
    session_start();
    include_once("../../Formularios/Login/validar_login.php");
    
    $codVenda_sessao = $_SESSION['codVenda_sessao']; //declara variavel de sessao em variavel local para melhor utilização
    $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização

    if($_POST)  //verifica se há algum POST
    {
        $codProduto = $_POST['txtCodProduto'];  //declara variavel de POST armazenando o codigo de produto
        $qtdProduto = $_POST['txtqtd'];  //declara variavel de POST armazenando a quantidade do produto
        echo "<pre>"; print_r($_POST); echo "</pre>";  //linha de teste

        try 
        {
            $dadosV = $cone->query("SELECT * FROM Venda WHERE codigo_usuario = $codUser_sessao and status_venda = 'Ativo'"); //se houver 1 venda ativa ele vai puxar os dados dela
            $dadosI = $cone->query("SELECT * FROM Item WHERE codigo_venda = $codVenda_sessao"); // seleciona todos os items do carrinho usando o codigo de venda vinculado ao usario
            
            foreach ($dadosV as $linha) // dados da tabela VENDA
            {
                //$codVenda = $linha['codigo_venda']; // variavel do codigo da VENDA
                $qtdVenda = $linha['qtdTotal_venda']; // variavel da quantidade de produtos da VENDA
                $valorVenda = $linha['valorTotal_venda']; //variavel do valor do produto
                
                // echo "<pre>";print_r($linha);echo "</pre>";
            }

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

        } 
        catch (PDOException $erro) 
        {
            echo "Erro: ".$erro->getMessage();
        }
    }
?>