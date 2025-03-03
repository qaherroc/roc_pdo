<?php

$host = '127.0.0.1';
$db   = 'winkel';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // echo "connected to database: " . $db;
} catch (PDOException $e) {
    echo "failed to connect to database";
}


// CREATE TABLE producten(
// 	id int NOT null AUTO_INCREMENT,
// 	product_naam varchar(255),
//     prijs_per_stuk varchar(255),
//     omschrijving varchar(255),
//     PRIMARY KEY(id)

// );

?>
