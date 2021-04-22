<?php
/*
Ray Pratidina
203040099
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php 
//Menghubungkan ke server Database
$conn = mysqli_connect("localhost","root","") ;
//Memilih Database
$check = mysqli_select_db($conn, "pw_tubes_203040099") ;
//Melakukan query dari database
$result = mysqli_query($conn, "SELECT * FROM keyboard");
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
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?=$i ?></td>
                        <td><img src="asset/img/<?= $row["Picture"]; ?>"></td>
                        <td><?= $row["Name"] ?></td>
                        <td><?= $row["Description"] ?></td>
                        <td><?= $row["Price"] ?></td>
                        <td><?= $row["Category"]; ?></td>
                    </tr>
                <?php $i++; ?>
            <?php endwhile; ?>

        </table>
    </div>
</body>
</html>