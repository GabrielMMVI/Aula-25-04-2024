<?php
$dbhost = "localhost";
$dbname = "banco_aula";
$username = "root";
$password = "";
# Try executa o comando, Catch captura o erro e explica no terminal. Deixa mais semântico.
try {
    $con = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $password);
    echo "Connection with MySQL sucessful!" . PHP_EOL;
} catch (PDOException $e){
    echo "Failed to connect with database: ". $e->getMessage() .PHP_EOL;
}