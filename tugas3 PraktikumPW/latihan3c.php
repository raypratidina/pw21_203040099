<?php
/// Ray Pratidina IF-C 20 //
// 203040099 //
// Kamis 08:00-09:00 //
?>
<?php 
$pemain_bola = [
    "Christiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "LiverPool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "LiverPool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3e_203040099</title>
    <style>
    .tabel {
        border: 2px solid black;
        padding: 10px;
        text-align: left;
        font-family: arial;
        width: 50%;

    }
    </style>
</head>
<body> 
<div class="tabel">
<p><b>Daftar pemain bola terkenal dan clubnya</b></p>
        <table>
            <?php foreach ($pemain_bola as $pebo => $club) : ?>
                <td><b><?= $pebo;?></b></td>
                <td>:</td>
                <td><?= $club;?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
</div>
</body>
</html>