<?php 
require 'functions.php';

if (isset($_POST["register"])) {
    
    if(registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi berhasil');
            document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi gagal');
                document.location.href = 'login.php';
            </script>";
    }
}
?>

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
            padding: 20px;
            font-family: sans-serif;
            src: url('asset/RockfordSans-light.otf');
        }
    </style>
</head>
    <form action="" method="post">
    <table>
        <tr>
            <td><label for ="username">username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for ="password">password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <button style="background-color: cyan; color: blue;" type="submit" name="register"> REGSISTRASI</button>
</form>
