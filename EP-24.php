<?php
//========================== _get(), __set(), _isset(), __unset() ===================
define("pagebreak","\n");
class MotorCycle{
    protected $parameters;
    
    function __construct( $mileage, $displacement, $capacity){
        $this->parameters = [];
        $this->parameters['mileage'] = $mileage;
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
    }
   
    function __get($name)
    {
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
    function __unset($name){
      unset($this->parameters[$name]);
    }

}

$bike = new MotorCycle("40kmph","150cc","40ltr");
$bike->mileage;
echo pagebreak;
$bike->capacity = "42ltr";
$bike->capacity;
echo pagebreak;
if(isset($bike->tyersize)){
    $bike->tyersize;
}
print_r($bike);
unset($bike->mileage);
print_r($bike);