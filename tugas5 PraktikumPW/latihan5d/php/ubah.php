<?php
        require 'functions.php';

        $id = $_GET['id'];
        $ky = query("SELECT * FROM keyboard WHERE id = $id")[0];
        
        if (isset($_POST['ubah'])) {
            if (ubah($_POST) > 0) {
                echo "<script>
                        alert'Data Berhasil dubah!');
                        document.location.herf = 'admin.php';
                    </script>";
            
            } else {
                echo "<script>
                        alert('Data Gagal diubah!');
                        document.location.herf = 'admin.php';
                    </script>";
            }
        }
        ?>
  
<title>Form ubah Data keyboard</title>
    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $ky['id']; ?>"> 
    <ul>
          
        <li>
            <label for="picture">picture :</label><br>
            <input type="text" name="picture" id="picture" required value="<?=$ky['Picture']; ?>"><br><br>
        </li>
        <li>
            <label for="description">Description :</label><br>
            <input type="text" name="description" id="description" required value="<?=$ky['Description']; ?>"><br><br>
        </li>
        <li>
            <label for="name">nama :</label><br>
            <input type="text" name="name" id="name" required value="<?= $ky['Name']; ?>"><br><br>
        </li>
        <li>
            <label for="price">price :</label><br>
            <input type="price" name="price" id="price" required value="<?= $ky['Price']; ?>"><br><br>
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
        <button type="submit" name="ubah">ubah Data!</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
        </ul>

       