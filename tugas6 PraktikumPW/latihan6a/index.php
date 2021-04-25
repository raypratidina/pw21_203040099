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

        body {
            background-color: #01a3a4;
        }
        .container {
            width: 350px;
            padding: 10px;
            font-family: arial;
            border: 2px solid #f7f1e3;
        }
    </style>
</head>
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
    <a href="php/login.php">
                <button type=""> Masuk ke halaman admin</button>
    </a>
</body>
</html>
