<?php

if (isset($_POST['verzenden'])) {
    $totaalBedrag = $_POST['totaalBedrag'];
    $aantalPersonen = $_POST['aantalPersonen'];
    $fooi = $_POST['fooi'];

    if ($totaalBedrag > 0 && $aantalPersonen > 0 && $fooi >= 0) {
        $result = ($totaalBedrag + $fooi) / $aantalPersonen;
        echo 'Het totaal bedrag dat ieder persoon moet betalen is ' . PHP_EOL . $result;
    } else {
        echo "Vul positieve getallen in";
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
    <form action="" method="POST">
        <input type="number" name="totaalBedrag" placeholder="totaalBedrag">
        <input type="number" name="aantalPersonen" placeholder="aantalPersonen">
        <input type="number" name="fooi" placeholder="fooi">
        <input type="submit" name="verzenden">
    </form>
</body>
</html>
