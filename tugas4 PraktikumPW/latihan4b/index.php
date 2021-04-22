<?php
/*
Ray Pratidina
203040099
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php 
//Menghubungkan ke server Database
require 'php/functions.php'; 
//Memilih Database

//Melakukan query dari database
$keyboard = query("SELECT * FROM keyboard")
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan4a</title>
</head>
    <link rel = "stylesheet" href = "css/style.css">
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
            <th>No</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($keyboard as $ky) : ?> 
                    <tr>
                        <td><?=$i ?></td>
                        <td><img src="asset/img/<?= $ky["Picture"]; ?>"></td>
                        <td><?= $ky["Name"] ?></td>
                        <td><?= $ky["Description"] ?></td>
                        <td><?= $ky["Price"] ?></td>
                        <td><?= $ky["Category"]; ?></td>
                    </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>
</body>
</html>