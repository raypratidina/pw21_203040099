
<?php
/* ray pratidina
 203040099npm 
 Shift Kamis 08.00 - 09.00
 https://github.com/raypratidina/pw2021_203040099

*/  
    function changeStyle($tulisan, $style1, $style2){
        echo "
            <div style='$style1'> 
                <p  style='$style2'> $tulisan </p>
            </div>
        ";
    }
    
    
    echo changeStyle( 
        "Selamat Datang di Praktikum PW", 
        "border: 1px solid; box-shadow: 0px 1px 3px 2px;", 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>

