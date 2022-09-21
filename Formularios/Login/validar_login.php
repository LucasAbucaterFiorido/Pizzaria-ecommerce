<?php
    include_once("conexao.php");
    session_start();

    if($_SESSION)
    {
        if(isset($_SESSION['codUser_sessao']) && isset($_SESSION['nomeUser_sessao']) && isset($_SESSION['loginUser_sessao'])) //verifica se há 3 variaveis existentes, que são criadas quando um usuario se loga
        {
            $codUser_sessao = $_SESSION['codUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização
            $nomeUser_sessao = $_SESSION['nomeUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização
            $loginUser_sessao = $_SESSION['loginUser_sessao']; //declara variavel de sessao em variavel local para melhor utilização

            try 
            {
                $dadosV = $cone->query("SELECT * FROM Venda WHERE codigo_usuario = $codUser_sessao AND status_venda = 'Ativo'"); // caso haja uma venda com o status 'Ativo' atrelado ao codigo de usuario puxar informaçoes da venda

                if($dadosV->rowCount() == 1)//se houver 1 venda ativa
                {
                    foreach ($dadosV as $linhaV) 
                    {
                        echo "<pre>"; print_r($linhaV); echo "</pre>";
                        $_SESSION['codVenda_sessao'] = $linhaV['codigo_venda'];
                        $codVenda_sessao = $_SESSION['codVenda_sessao'];
                    }


                    //parei no 'if($_POST)'


                }
            } 
            catch (PDOException $erro) 
            {
                echo "Erro: ".$erro->getMessage();
            }
        }
        else
        {
            header("location: Formularios/Login/frm_login.php");
        }
    }
    else
    {
        header("location: Formularios/Login/frm_login.php");
    }
?>

<a href="Formularios/Login/log-off.php" class="btn btn-danger">Sair</a>