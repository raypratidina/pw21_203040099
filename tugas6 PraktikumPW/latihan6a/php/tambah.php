<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #01a3a4;
            color:#f7f1e3;
            font-family: sans-serif;
            src: url('asset/RockfordSans-light.otf');
        }
    </style>
</head>
  
<h3>Form Tambah Data keyboard</h3>
    <form action="" method="post">
    <ul>
        <li>
            <label for="picture">picture :</label><br>
            <input type="file" name="picture" id="picture" required><br><br>
        </li>
        <li>
            <label for="name">nama :</label><br>
            <input type="text" name="name" id="name" required><br><br>
        </li>
        <li>
            <label for="description">description :</label><br>
            <input type="text" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="price">price :</label><br>
            <input type="price" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="category">Category :</label><br>
            <select name="category" id="category" required>
                <option value="">------------------pilih category----------------</option>
                <option value="mouse">mouse</option>
                <option value="keyboard">keyboard</option>
            </select>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
        </ul>

        <?php
        require 'functions.php';

        if (isset($_POST['tambah'])) {
            if (tambah($_POST) > 0) {
                echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.herf = 'admin.php';
                    </script>";
            
            } else {
                echo "<script>
                        alert('Data Gagal ditambahkan!');
                        document.location.herf = 'admin.php';
                    </script>";
            }
        }
        ?>

       