<?php
//================================== abstract =======================================
 abstract class Shape{
    abstract  function getArea(); // when you use abstrat that means you're going to use function every extends, other with code shows errors
  }
  class Triangle extends Shape{
         protected $bash;
         protected $width;
         protected $area;
        function __construct($bash, $width)
        {
         $this->bash = $bash;
         $this->width = $width;
        }
        function getArea(){
         return $this->area = $this->bash*$this->width;
        }
        function bash(){
         echo $this->bash;
        }
        function width(){
         echo $this->width;
        }
  }

  $tri = new Triangle(5,5);
  echo $tri->getArea();
  echo "\n";
  