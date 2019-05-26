<?php

$zero=[];

//MEGA FUNCTIE FURATA DIN C++

function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 

$numbers = [
    [76 ,111 ,114 ,101 ,69 ,110 ,105 ,112 ,115],
    [117,109,120,100,111],
    [108 ,111, 114, 110, 115, 99, 116, 110, 97, 109, 101],
    [116, 44, 110, 99, 111, 110, 101, 101, 99, 116, 101, 116, 117],
    [114, 110, 97, 100, 108, 112, 105, 115, 99],
    [105, 110, 103, 110, 101, 101, 105, 116, 44, 110, 115],
    [101, 100, 110, 110, 111, 110, 101],
    [105, 117, 115, 109, 116, 100, 110, 116, 101],
    [109, 112, 33, 114, 110]
];

foreach($numbers as $line){
    foreach($line as $value){
        echo $value . " ";
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";
foreach($numbers as $line){
    echo $line[count($line) / 2]. " ";
    $zero[] =  $line[count($line) / 2];   
}
echo "<br>";
echo "<br>";
foreach($zero as $value){
    if(primeCheck($value) ){
        echo $value . " ";
    }  
}
echo "<br>";
echo "<br>";
foreach($zero as $value){
    if(primeCheck($value) ){
        echo chr($value);
    } 
}



?>