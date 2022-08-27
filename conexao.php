<?php
    $host = "localhost";
    $bd = "bd_rafael";
    $user = "root";
    $pass = "";

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