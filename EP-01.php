<?php
class Human{
    function sayHi(){
        echo "Salam\n"; 
    }
}
class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}
class Dog{
    function sayHi(){
        echo "Vow\n";
    }
}

$human = new Human;
$cat = new Cat;
$dog = new Dog;

class Rayhan{
    public $roll;
    public $institute;
      function fullBio(){
          echo "Hi I'm Rayhan Rahman\n";
          echo $this->printRoll()."\n";
          echo $this->printInstitute();
      }
      function printRoll(){
          echo "My Board Roll is : {$this->roll}";
      }
      function printInstitute(){
          echo "My Institute Name : {$this->institute}";
      }
}

$myBio = new Rayhan;
$myBio->roll = 371186;
$myBio->institute = "kishoreganj Polytechnic Institue";
echo $myBio->fullBio();
