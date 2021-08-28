<?php
// ================== __construct_method() ==============


class Human{
    public $name;
    public $age;
    public $roll;
    public function __construct($personName,$personAge,$personRoll)
    {
      $this->name = $personName;
      $this->age = $personAge;
      $this->roll = $personRoll;
    }
    function myNanme(){
        echo $this->name."\n";
        echo $this->age."\n";
        echo $this->roll."\n";
    }
}
$h1 = new Human("Rayhan",22,371186);
echo $h1->myNanme();

class Humans{
   public $human1;
   public $human2;
   public $human3;
   
   function __construct($hu1,$hu2,$hu3){
       $this->human1 = $hu1;
       $this->human2 = $hu2;
       $this->human3 = $hu3;
   }
   function allHumanName(){
       echo $this->human1."\n";
       echo $this->human2."\n";
       echo $this->human3."\n";
   }
}
$humans = new Humans("Rayhan","Saikat","Rabbi/Shakil");
$humans->allHumanName();