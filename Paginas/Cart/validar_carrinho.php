<?php
    if($_SESSION)
    {
        $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização
        $codVenda_sessao = $_SESSION['codVenda_sessao']; //declara variavel de sessao em variavel local para melhor utilização

        if($_GET)
        {
            //echo "<pre> get:"; print_r($_GET); echo "</pre>";   //linha de teste
            $codProduto = $_GET['codigoProduto'];   //declar uma variavel com a variavel com o código do produto pelo metodo GET da pagina 'detalhesProdutosPage.php'

            if($codProduto)
            {
                $validarDadosI = $cone->query("SELECT codigo_produto FROM Item WHERE codigo_venda = $codVenda_sessao AND codigo_produto = $codProduto"); //valida se há um item do carrinho com esse código de produto
    
                    if($validarDadosI->rowCount() == 1)
                    {
                        $autenticacaoInicial = '1';
                    }
                    else if($validarDadosI->rowCount() > 1)
                    {
                        $autenticacaoInicial = '1';
                    }
                    else if($validarDadosI->rowCount() < 1)
                    {
                        $autenticacaoInicial = '0';
                    }
            }
        }
    }    
?>