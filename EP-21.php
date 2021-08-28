<?php
//================================= toString('its using for print a object ) ================================
class Color{
    public $color;
    function __construct($color)
    {
        $this->color = $color;
    }
   
    function __toString()
    {
      return "Color Object Color Is {$this->color}";
    }
}
$c = new Color("red");
echo $c;