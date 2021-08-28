<?php
//================================ interface ==========================
interface Baseanimal{
    function isAlive();
    function canEat($param);
    function breed();
}
class Aanimal implements Baseanimal{
    function isAlive(){}
    function canEat($param){}
    function breed(){}
}
interface Basehuman extends Baseanimal{
    function calTalk();
}
class Hhuman implements Basehuman{
    function isAlive(){}
    function canEat($param){}
    function breed(){}
    function calTalk(){}
}

$h = new Hhuman;
echo $h instanceof BaseAnimal;