<?php
//================================ object compear =============================
class Planet{
  public $name;
  function __construct($name)
  {
     $this->name = $name; 
  }
}
$p = new Planet("Earth");
$p1 = new Planet("Pluto");
$p2 = new Planet("Earth");
$p3 = $p;

if($p  === $p3){
    echo "Simailar";
}else{
    echo "Not Simailar";
}