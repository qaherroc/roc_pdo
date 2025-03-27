<?php

include "db.php";

$id = $_GET['id'];

if (isset($_POST['submit'])) {
        $product_naam = $_POST['product_naam'];
        $prijsPerStuk = $_POST['prijs_per_stuk'];
        $omschrijving = $_POST['omschrijving'];


        $sql = "UPDATE producten SET product_naam = :product_naam, prijs_per_stuk = :prijs_per_stuk , omschrijving = :omschrijving WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([

        'product_naam' => $product_naam,
        'prijs_per_stuk' => $prijsPerStuk,
        'omschrijving' => $omschrijving,
        'id' => $id
        ]);
    if ($stmt) {
        echo "product aangepast";
        header("Refresh:2; url = index.php");
    } else {
        echo "Er is een fout opgetreden";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>product Editen</h1>

    <form method="post">

    <input type="text" name="product_naam" placeholder="product naam" required>
    <input type="number" name="prijs_per_stuk" id="" placeholder="prijs per stuk" required>
    <input type="text" name="omschrijving" placeholder="omschrijving" required>
    <input type="submit" value="Edit" name="submit">

    </form>
</body>
</html>
