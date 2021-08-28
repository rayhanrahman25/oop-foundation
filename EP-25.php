<?php
//============================ __call() ==============
define("pb","\n");
class Motorcycle{
     protected $parameters;
     function __construct($capacity, $displacement, $mileage){
         $this->parameters['capacity'] = $capacity;
         $this->parameters['displacement'] = $displacement;
         $this->parameters['mileage'] = $mileage;
     }

     function __get($name){
        echo $this->parameters[$name];
     }
     function __set($name, $value)
     {
        $this->parameters[$name] = $value;
     }
     function __isset($name)
     {
         if(!isset($this->parameters[$name])){
          echo "{$name} is not found";
         }
        
     }
     function __unset($name)
     {
         unset($this->parameters[$name]);
     }

     function __call($name, $arguments)
     {
        if('run' == $name){
            echo "I'm running at {$arguments[0]}";
        } 
     }
     static function __callStatic($name, $arguments)
     {
        echo "I'm running at {$arguments[0]} again";
     }

}

$motorcycle = new Motorcycle("40ltr",'displacement',"100kmph");
$motorcycle->capacity;
echo pb;
if(isset($motorcycle->tyersize)){
    $motorcycle->tyersize;
}
echo pb;
 unset($motorcycle->capacity);
 print_r($motorcycle);
 echo pb;
 $motorcycle->ant("110kmph");
 echo pb;
 Motorcycle::runagain("115kmph");


