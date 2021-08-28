<?php
//========================= Early vs let binding ================
class Planet{
   static function echoName(){
      static::getName();
    }
    static function getName(){
        echo "Rayhan";
    }
}

class Earth extends Planet{
    static function getName()
    {
      echo "Rahman"; 
    }
}

Planet::echoName();
echo "\n";
Earth::echoName();