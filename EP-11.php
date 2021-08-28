<?php
//===================== when you write a function before passing argumets if you type a class name ---example
/*
if pushing thing not extends  Pshape you cant push
*/
class Pshpe{
 function sayHi(){
 }
}
class Add{
     private $shape;
    function __construct()
    {
      $this->shape = array(); 
    }

    function addShape(Pshpe $shape){
        array_push($this->shape, $shape);
    }
    function totalShape(){
        return count($this->shape);
    }
}
class TrinagleOne extends Pshpe{

}
class SquareTwo extends Pshpe{

}
class Student{

}
$addAdd = new Add();

$addAdd->addShape(new TrinagleOne());
$addAdd->addShape(new SquareTwo());
// $addAdd->addShape(new Student());
echo $addAdd->totalShape();