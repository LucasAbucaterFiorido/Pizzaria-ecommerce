<?php
    include_once("conexao.php");
    session_start();

    function criarVenda()
    {

    };

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

                    if($_POST)
                    {
                        echo "<pre>"; print_r($linhaV); echo "</pre>";
                        $qtdTotal = $_POST[''];
                        $valorTotal = $_POST[''];

                        if($valorTotal && $qtdTotal >= 1)
                        {
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
                            if($dadosCompra->rowCount() == 1)
                            {
                                $dadosV = $cone->prepare("INSERT INTO Venda(
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
                                $dadosV->execute(array(
                                    ':qtdTotal_venda' => 0,
                                    ':valorTotal_venda' => 0,
                                    ':status_venda' => 'Ativo',
                                    ':codigo_usuario' => $codUser_sessao
                                ));
                                //header('location: ../teste.php');
                            }
                        }
                        else
                        {
                            echo "Erro: 'Não há produtos no carrinho.'";
                        }
                    }


                }
                else if($dadosV->rowCount() > 1) //se houver mais de 1 venda ativa
                {
                    echo "Erro: 'Há mais de uma venda ativa.'";
                }
                else if(!$dadosV->rowCount()) //se  não houver 1 venda ativa, criar uma
                {
                    $dadosV = $cone->prepare("INSERT INTO Venda(
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
                    $dadosV->execute(array(
                        ':qtdTotal_venda' => 0,
                        ':valorTotal_venda' => 0,
                        ':status_venda' => 'Ativo',
                        ':codigo_usuario' => $codUser_sessao
                    ));
                }
                else
                {
                    echo "Erro desconhecido.";
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