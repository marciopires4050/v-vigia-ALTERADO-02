<?php

//Inicio da conexão com o banco de dados utilizando PDO
$host = "br356.hostgator.com.br";
$user = "vegasvig_2022";
$pass = "BBE7Lyhc?VSS";
$dbname = "vegasvig_2022";
//$port = 3306;

try{
    // Conexao com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    // Conexao sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com banco de dados realizado com sucesso.";
} catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}