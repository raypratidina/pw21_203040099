<?php
/*
Ray Pratidina
203040099
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php 
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$keyboard = query("SELECT * FROM keyboard")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>keyboard</title>
</head>
<body>
<div class="container">
    <?php foreach ($keyboard as $ky) : ?>
      <p class="Name">
        <a href="php/detail.php?id=<?= $ky['id'] ?>">
            <?= $ky["Name"] ?>
        </a>
      </p>
      <?php endforeach; ?>
  </div>
</body>
</html>