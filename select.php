<?php

require "db.php";

$sql = "SELECT * FROM producten";
$rows = $pdo->query($sql)->fetchAll();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    td{
        padding: 10px;
    }
    th{
        padding-right:10px
    }
</style>
<body>

<table>
    <tr>
        <th>product naam</th>
        <th>prijs per stuk</th>
        <th>omschrijving</th>
    </tr>

        <?php
        foreach ($rows as $row) {?>
            <tr>
            <td><?php echo $row['product_naam']; ?>
            <td><?php echo $row['prijs_per_stuk']; ?>
            <td><?php echo $row['omschrijving']; ?> 
            <td><button>edit</button></td>
            <td><button>delete</button></td>
            </tr>
            <?php
        }?>
</table>
    
</body>
</html>
