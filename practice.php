<?php
//======================== interface with (Polymorphism) =========================

interface Banimal{
    function running();
    function eating();
    function walking();
}
interface Bhuman extends Banimal{
 function breathing();
}

class Humann implements Bhuman{
  function breathing(){
     
  }
  function running(){

  }
  function eating(){

  }
  function walking(){

  }
}
class Animall implements Banimal{
  function running(){

  }
  function eating(){

  }
  function walking(){

  }
}
// $hh = new  Humann;
// echo $hh instanceof Banimal;

$aa = new Animall;
echo $aa instanceof Bhuman;
