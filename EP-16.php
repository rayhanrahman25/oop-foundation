<?php
//=======--------------------   Const ------------------------=================
/*
* when you use const you can't access const $this->const(name) this way You've to use $this::const(name) this way
* If you Want access direct const From Outside use Calassname::constName 
*/

class Hello{
    const Rayhan = "Rayhan Rahman";
    function sayMyName(){
        echo "My Full Name Is ".$this::Rayhan."\n";
    }
}

$hello = new Hello;
$hello->sayMyName();
echo Hello::Rayhan;  
