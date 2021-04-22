<?php
/* ray pratidina
 203040099npm 
 Shift Kamis 08.00 - 09.00
 https://github.com/raypratidina/pw2021_203040099

*/
    $jawabanIsset = "Isset adalah = untuk menentukan apakah suatu variabel sudah terdevinisi nilainya atau belum. Akan menghasilkan true jika variabel terdifinisi dan false ketika variabel kosong atau tidak terdeifinisi <br><br>";
    $jawabanEmpty = "Empty adalah = untuk menentukan apakah suatu variabel itu kosong/tidak terdefinisi atau belum. Akan menghasilkan false jika variabel terdifinisi dan true ketika variabel kosong atau tidak terdeifinis";
    
    
        $GLOBALS["isset"] = $jawabanIsset;
        $GLOBALS["empty"] = $jawabanEmpty;
    
    
        function soal($style)
        {
            echo "<div class = $style>
            <h1>" . $GLOBALS['isset'] . "</h1>
            <h1>" . $GLOBALS['empty'] . "</h1>
            </div>";
        }
        ?>
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <title>Latihan-2_203040083</title>
            <style>
                .center {
                    border: 1px solid black;
                    padding-left: 10px;
                    font-size: 8px;
                    color: goldenrod;
                    font-family: monospace;
                    background-color: #222222;
                }
            </style>
        </head>
        
        <body>
            <?php
            echo soal("center");
            ?>
        </body>
        
        </html>