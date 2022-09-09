<?php
    include_once('../conexao.php');

    $cod = $_POST['txtcod'];

    try
    {
        $consulta = $cone->query("SELECT * FROM produto WHERE codigo_produto = $cod");
        foreach ($consulta as $linha) {
            if($consulta->rowCount() == 1)
            {
                echo "<pre>";
                print_r($linha);
                echo "</pre>";
            }
        }
    }
    catch(PDOException $erro)
    {

    }
?>