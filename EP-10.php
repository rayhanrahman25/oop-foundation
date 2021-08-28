<?php
//=================================== Final =============================
  class Manhu{
      final function sayhi(){
          echo "Hello I'm Human";
      }
  }
  class Hullo extends Manhu{
      
  }

  $cat = new Hullo;
  $cat->sayhi();
