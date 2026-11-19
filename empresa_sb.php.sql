require_once "conexao.php"

<?php

CREATE DATABASE IF NOT EXISTS Empresa_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
    CREATE TABLE IF NOT EXISTS Funcionarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(150) NOT NULL,
        salario DECIMAL(10,2), NOT NULL,
        tipo VARCHAR(30) NOT NULL

    );

?>



-- 3. BANCO DE DADOS MYSQL
-- Crie um banco de dados chamado empresa_db.
-- Crie uma tabela funcionarios com os campos:
-- - id — INT, chave primária e auto incremento.
-- - nome — VARCHAR(100), obrigatório.
-- - email — VARCHAR(150), obrigatório.
-- - salario — DECIMAL(10,2), obrigatório.
-- - tipo — VARCHAR(30), obrigatório.