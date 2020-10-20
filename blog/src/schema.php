<?php

    function schemaGenerator(PDO $db){
        $command='
        CREATE TABLE IF NOT EXISTS users(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name VARCHAR(100) NOT NULL,
            password VARCHAR(100) NOT NULL
        )';
        try {
            $db->exec($command);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function insertSchema($db, $username, $password){
        $command = "
        INSERT INTO users(name, password)
        VALUES ('$username', '$password')";
        try {
            $db->exec($command);
            echo'Insert realizado ';
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    