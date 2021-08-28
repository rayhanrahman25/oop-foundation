<?php
class A{
    static function sayHi(){
        echo "Hi From A\n";
    }
}
class B extends A{
   static function sayHi(){
       parent::sayHi();
       echo "Hi From B";
   }
}

B::sayHi();