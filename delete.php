<?php

require "db.php";

if ($_GET['id']) {
    $sql = "DELETE FROM producten WHERE id = :id";
    $result = $pdo->prepare($sql);

    $placeholders = [
        "id" => $_GET['id']
    ];
    $result->execute($placeholders);

    if ($result) {  
        echo "product verwijderd";
        header("Refresh:3; url = index.php");
    } else {
        die();
    }
} else {
    header("Location: index.php");
    die();
}

?>
