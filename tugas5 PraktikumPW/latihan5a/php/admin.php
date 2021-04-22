<?php
/*
Ray Pratidina
203040099
SHIFT Kamis 08:00 - 09:00
*/

?>S

<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$keyboard = query("SELECT * FROM keyboard");

?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: center;
        }
        th {
            background-color: cyan;
            color: blue;
        }
        img {
            max-width: 150px;
        }
    </style>
<head>
    <title>Latihan5a</title>
</head>
    <link rel = "stylesheet" href = "css/style.css">
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            </tr>
            <?php $i = 1 ?>
    <?php foreach($keyboard as $ky) : ?>
      <tr>
        <th scope="row"><?= $i ?></th>
        <td>
            <a href=""><button>Ubah</button></a>
            <a href=""><button>Hapus</button></a>
        </td>
                        <td><img src="../asset/img/<?= $ky["Picture"]; ?>"></td>
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