<?php
/* ray pratidina
 203040099npm 
 Shift Kamis 08.00 - 09.00
 https://github.com/raypratidina/pw2021_203040099

*/
?>

<?php  
 function banyakBola($tumpukan)
    {
        for ($i =1 ; $i <= $tumpukan; $i++) {
            for ($m = 1; $m <= $i; $m++) {
              echo "<div class='bola'>" . $i . "</div>";
            }
            
          echo "<br>";
        } 
    }
?>
    
    <!doctype html>

    <html lang="eng">
    <head>
      <meta charset="utf-8">
      <title>Documents</title>
      <style>
        .bola{
            width: 50px;
            height: 50px;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            border:1px solid black;
            border-radius: 50%; 
            background: orange;
        }
      </style>
    </head>
    
    <body>
    <div class="line">
      <?php echo banyakBola(5); ?>
      </div>
    </body>
    </html>
