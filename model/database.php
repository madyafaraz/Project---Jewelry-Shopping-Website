<?php
    $dsn = 'mysql:host=localhost;dbname=jewelrydb';
    $username = 'madiha';
    $password = 'madiha123';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>