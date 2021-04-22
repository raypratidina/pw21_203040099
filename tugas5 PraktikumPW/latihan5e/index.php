<?php
/*
ray pratidina
203040099
Shift Kamis 8.00 - 9.00
*/
?>

<?php
require 'php/functions.php';
$keyboard = query("SELECT * FROM keyboard")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c_203040099</title>
    <style>
        .container {
            width: 350px;
            padding: 10px;
            font-family: arial;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
            <?php foreach ($keyboard as $ky) : ?>
                <p class="Name">
                    <a href="php/detail.php?id=<?= $ky['id']?>">
                        <?= $ky["Name"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
    </div>
</body>
</html>
