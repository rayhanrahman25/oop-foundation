<?php
class Animal{
    protected $name;
    function __construct($name){
        $this->name = $name;
    }
    function eat(){
        echo "{$this->name} is eating\n";
    }
    function run(){
        echo "{$this->name} is running\n";
    }
    function sleep(){
        echo "{$this->name} is sleeping\n";
    }
    function geet(){}
    protected function addTitle($title){
     $this->name = $title." ".$this->name;
    }
}
class People extends Animal{
   function greet(){
       $this->addTitle('Mr');
       echo "{$this->name} says I'm Human\n";
   }
}
class Cat extends Animal{
    function greet(){
        echo "{$this->name} says Meow\n";
    }
}

$rayhan = new People('Rayhan');
$pussyCat = new Cat('Tom');
$rayhan->greet();
$rayhan->eat();
$pussyCat->greet();