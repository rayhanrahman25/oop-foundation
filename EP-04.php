<?php
class RGB{
    public $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }
    
     function getRgbColor(){
        return array($this->red,$this->green,$this->blue);
    }
    function getRed(){
        echo $this->red;
    }
    function getGreen(){
        echo $this->green;
    }
    function getBlue(){
        echo $this->blue;
    }
   function readRgbColor(){
      
       echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
   }
    private function parseColor(){
     if($this->color){
     list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
      return  $this->red;
      return  $this->green;
      return  $this->blue; 
    }else{
        list($this->red, $this->green, $this->blue) = array(0,0,0);
    }
    }
}
$myColor = new RGB("ddbe40");
echo "\n";
$myColor->readRgbColor();
echo "\n";
$myColor->getRed();