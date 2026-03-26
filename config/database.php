<?php
// PDO MySQL configuration
try {
    $dsn = 'mysql:host=your_host;dbname=your_database;charset=utf8';
    $username = 'your_username';
    $password = 'your_password';

    // Create a new PDO instance
    $pdo = new PDO($dsn, $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}