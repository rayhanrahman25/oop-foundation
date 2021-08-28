<?php
//============================================ Parnent And Child Class Scope =================================
class ParentClass{
     protected $name;
     function __construct($name)
     {
         $this->name =$name;
         $this->sayHi();
     }
     
    function sayHi(){
        echo  "Hello From Father\n";
    }
}
 class ChildClass extends ParentClass{
     function sayHi(){
         parent::sayHi();
         echo "Hi From {$this->name}\n";
     }
 }

 $cc = new ChildClass('OwaOwa');
 