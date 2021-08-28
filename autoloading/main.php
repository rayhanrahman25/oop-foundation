<?php
//this one working fine but php 7 is not recommend this funciton
// function __autoload($name){
//         include "{$name}.php";
// }

function autoload($name){
    if(strpos($name, "Planet_") !== false){
        $filename = str_replace("Planet_","",$name);
        include strtolower("planet/{$filename}.php");
    }else{
        include strtolower("{$name}.php");
    }
}
spl_autoload_register('autoload');
(new Spaceship)->spaceship();
echo "\n";
(new Bike)->capaciy();
echo "\n";
(new Planet_uranus)->getName();

