<?php

    if($_SESSION)
    {
        $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização
        $codVenda_sessao = $_SESSION['codVenda_sessao']; //declara variavel de sessao em variavel local para melhor utilização
        
        // echo '<pre> codVenda '; print_r($codVenda_sessao); echo '</pre>'; 
        // echo '<pre> codUsuario '; print_r($codUser_sessao); echo '</pre>'; 

        if(isset($_GET['codigoProduto']))   // verifica se há uma variavel especifica de get
        {
            //echo "<pre> get:"; print_r($_GET); echo "</pre>";   //linha de teste
            $codProduto = $_GET['codigoProduto'];   //declara uma variavel com a variavel com o código do produto pelo metodo GET da pagina 'detalhesProdutosPage.php'

            $validarDadosI = $cone->query("SELECT codigo_produto FROM Item WHERE codigo_venda = $codVenda_sessao AND codigo_produto = $codProduto"); //valida se há um item do carrinho com esse código de produto

            if($validarDadosI->rowCount() == 1) // se há 1 produto cadastrado no carrinho
            {
                $autenticacaoInicial = '1'; 
            }
            else if($validarDadosI->rowCount() > 1) // se não há 1 produto cadastrado no carrinho
            {
                $autenticacaoInicial = '1';
            }
            else if($validarDadosI->rowCount() < 1) // se há mais de 1 produto cadastrado no carrinho
            {
                $autenticacaoInicial = '0';
            }
        }

        if(isset($_POST['txtvalorTotal']) && isset($_POST['txtqtdTotal']))
        {
            echo "<pre> post:"; print_r($_POST); echo "</pre>";   //linha de teste
            $qtdTotal = $_POST['txtqtdTotal'];     //declara variavel com os dados da quantidade total de produtos
            $valorTotal = $_POST['txtvalorTotal'];       //declara variavel com os dados da valor total de produtos

            if($valorTotal && $qtdTotal >= 1)       //se valor total e quantidade total for maior ou igual a 1 então
            {   
                // INICIO atualiazando os dados da tabela venda como CONCLUIDO
                $dadosCompra = $cone->prepare("UPDATE Venda SET
                    qtdTotal_venda = :qtdTotal_venda,
                    valorTotal_venda = :valorTotal_venda,
                    status_venda = :status_venda
                    WHERE codigo_venda = $codVenda_sessao");
                $dadosCompra->execute(array(
                    ':qtdTotal_venda' => $qtdTotal,
                    ':valorTotal_venda' => $valorTotal,
                    ':status_venda' => 'Concluido'
                ));
                // FIM atualiazando os dados da tabela venda como CONCLUIDO
                if($dadosCompra->rowCount() == 1)   //se 1 linha da tabela venda foi atualizada, então
                {
                    // INICIO após a finalização de uma venda, criar 1 venda automaticamente
                    $cadastroV = $cone->prepare("INSERT INTO Venda(
                        qtdTotal_venda,
                        valorTotal_venda,
                        status_venda,
                        codigo_usuario
                    ) VALUES(
                        :qtdTotal_venda,
                        :valorTotal_venda,
                        :status_venda,
                        :codigo_usuario
                    )");
                    $cadastroV->execute(array(
                        ':qtdTotal_venda' => 0,
                        ':valorTotal_venda' => 0,
                        ':status_venda' => 'Ativo',
                        ':codigo_usuario' => $codUser_sessao
                    ));
                    // FIM após a finalização de uma venda, criar 1 venda automaticamente

                    if($cadastroV->rowCount() == 1)    //if existente para manter a variavel session atualizada caso o usuario deseje fazer + de 1 compra enquanto esteja logado. E retornar o callback de conclusao ou reclusao da compra
                    {
                        $_SESSION['codVenda_sessao'] = $cone->lastInsertId(); //atualizar variavel de sessao com o codigo de venda. codigo 'lastInsertId' chama o ultimo Id criado na tabela
                        $callback = 1;
                    }
                    else if($cadastroV->rowCount() != 1)    //if existente para manter a variavel session atualizada caso o usuario deseje fazer + de 1 compra enquanto esteja logado. E retornar o callback de conclusao ou reclusao da compra
                    {
                        $callback = 0;
                    }
                }
            }
            else        //se houver uma tentativa de finalizar venda e não há valor ou produtos, não finalizar
            {
                echo "Erro: 'Não há produtos no carrinho.'";
            }
        }
    }
    else
    {
        //header('location:   ../../Formularios/Login/frm_login.php');
        // print_r($codUser_sessao);
        // print_r($codVenda_sessao);
    }
?>