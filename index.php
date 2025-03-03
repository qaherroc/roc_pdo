<?php

require "db.php";

if (isset($_POST['submit'])) {
    if (!empty($_POST['product_naam']) && !empty($_POST['prijs_per_stuk']) && !empty($_POST['omschrijving'])) {
        $sql = "INSERT INTO producten (product_naam,prijs_per_stuk,omschrijving) VALUES(:product_naam,:prijs_per_stuk,:omschrijving)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([

        'product_naam' => $_POST['product_naam'],
        'prijs_per_stuk' => $_POST['prijs_per_stuk'],
        'omschrijving' => $_POST['omschrijving']
    
        ]);
        echo "toevoegen gelukt";
    } else {
        echo "vul alle velden in !";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>winkel</title>
</head>
<body>
    
    <form action="index.php" method="post">

        <input type="text" name="product_naam" placeholder="product naam">
        <input type="number" name="prijs_per_stuk" id="" placeholder="prijs per stuk">
        <input type="text" name="omschrijving" placeholder="omschrijving">
        <input type="submit" value="voeg toe" name="submit">

    </form>
</body>
</html>
