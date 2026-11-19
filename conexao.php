<?php
$host="localhost";
$dbname="empresa_db";
$usuario="root";
$senha="";

try {
    $dsn="mysql:host=$host;dbname=$dbname;chorset=utf8mb4";
    $pdo= new pdo($dsn, $usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}

?>