<?php
    $host = "localhost";
    $bd = "id20396865_bd_pizzaria";
    $user = "id20396865_adm";
    $pass = "z@GQLn]]6+@r}ETt";

    try 
    {
        // Conectar
        $cone = new PDO( "mysql:dbname=$bd; host=$host", $user, $pass );
        

        $cone->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $cone->exec( "set names utf8" );
    } 
    catch (PDOException $erro) 
    {
        echo 'Erro: ' .$erro->getMessage();
    }
?>