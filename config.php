<?php

    $dbHost = 'localhost';
    $dbUsername = 'epiz_30112446';
    $dbPassword = '';
    $dbName = 'root';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>
