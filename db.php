<?php

$host = '127.0.0.1';
$db   = 'winkel';
$user = 'root';
$pass = '';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "connected to database: " . $db;
} catch (PDOException $e) {
    echo "failed to connect to database";
}



?>
