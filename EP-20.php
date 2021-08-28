<?php
//=============================== clone ==============================
class Color{
   public $color;
   function __construct($color)
   {
    $this->color = $color;   
   }
   function setColor($color){
       $this->color = $color;
   }
}

class FavColor{
    public $data;
    public $color;
    
    function __construct($data, $color)
    {
     $this->data = $data;
     $this->color = new Color($color);
    }
   
    function updateColor($color){
     $this->color->setColor($color);
    }

    function __clone()
    {
      $this->color = clone $this->color;  
    }
}

$f1 = new FavColor('some data','red');
print_r($f1);
$f2 = clone $f1;
print_r($f2);
$f2->updateColor('blue');
print_r($f1);
print_r($f2);


