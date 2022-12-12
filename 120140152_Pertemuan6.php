<?php

function IntToRomawi($Bilangan){
    $hasil='';
    while ($Bilangan>0){  
        if($Bilangan >=1000){
            $hasil=$hasil .'M';
            $Bilangan=$Bilangan-1000;
        }
        else if($Bilangan>=500){
            $hasil=$hasil .'D';
            $Bilangan=$Bilangan-500;
        }
        else if($Bilangan>=100){
            $hasil=$hasil .'C';
            $Bilangan=$Bilangan-100;
        }
        else if($Bilangan>=50){
            $hasil=$hasil .'L';
            $Bilangan=$Bilangan-50;
        }
        else if($Bilangan>=10){
            $hasil=$hasil .'X';
            $Bilangan=$Bilangan-10;
        }
        else if($Bilangan>=5){
            $hasil=$hasil .'V';
            $Bilangan=$Bilangan-5;
        }
        else if($Bilangan>=1){
            $hasil=$hasil .'I';
            $Bilangan=$Bilangan-1;
        }
    }
    return $hasil;
}

echo intTORomawi(58);

?>