<?php

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = "";
    $dbName = 'rpg';

    $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if($conexao -> connect_errno)
    {
        echo "Erro de conexão";
    }

?>