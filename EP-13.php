<?php
//==================================== static =============================== 
/*
* when you use static you can't use $this you've to use slef::$var/function. 
* you can use $this but not in static function();
* when you use static you can call your funciton without set, like Mathcalculator::fiboncci(8,"something")

*/
class Mathcalculator{
    private $number;
    static $name;
   static function fibonacci($f, $namee){
       self::$name = $namee;
        echo "Now Wirte Fibonacci Of {$f}. Additional Name: {$namee}\n";
        self::doSometing();
    }
    function factorial($n, $something){
        self::$name = $something;
        $this->number = 12;
        echo "Now Write Factiorial Of {$n}. Additonal Name: {$something} Extra Number: {$this->number}\n" ;
       
    }
    static function doSometing(){
        echo "Doing Something";
    }
}

$math = new Mathcalculator;
$math->factorial(10, "Factorail");
//$math->fibonacci(8);
Mathcalculator::fibonacci(8, 'Rayhan');