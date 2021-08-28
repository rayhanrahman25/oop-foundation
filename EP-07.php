<?php
//======================= another example with inharitance =========================
class Shape{
    protected $name;
    protected $area;

    function __construct($name)
    {
        $this->name = $name;
        $this->calCulateArea();
    }
    function getArea(){
        echo "this {$this->name}'s area is  {$this->area}";
    }
    function calCulateArea(){

    }
}
class Triangle extends Shape{
    private $a, $b, $c;
    function __construct($a,$b,$c)
    {
       $this->a = $a;
       $this->b = $b;
       $this->c = $c;
       parent::__construct('Triangle');
    }
    function calCulateArea(){
        $perimeter = ($this->a+$this->b+$this->c) / 2;
        $this->area = sqrt($perimeter*($perimeter - $this->a)*($perimeter - $this->b)*($perimeter - $this->c));
    }
}

class Rectangle extends Shape{
    private $a, $b;
    function __construct($a,$b)
    {
       $this->a = $a;
       $this->b = $b; 
       parent::__construct('Rectangle');
    }
    function calCulateArea(){
       $this->area = $this->a * $this->b;
    }
}
$rc = new Rectangle(2,2);
$rc->getArea();
