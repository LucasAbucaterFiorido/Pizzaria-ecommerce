<?php
    //  Tela de validação de conclusao da compra,onde será enviado requests com a API financeira e será retornado o callback de conclusao ou de recusa
    include_once('../../conexao.php');
    session_start();
    include_once('validar_carrinho.php');

    if($callback == 1)  //se o retorno for 1, então foi concluida com sucesso
    {
        header('location:   compraConcluida.php');
    }
    else if($callback == 0) //se o retorno for 1, então foi recusado por algum motivo
    {
        header('location:   Carrinho.php');
    }
?>