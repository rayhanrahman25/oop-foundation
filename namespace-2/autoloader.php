<?php
spl_autoload_register(function($filename){
      $path = strtolower(str_replace("cloudstorage\\","",$filename)).".php";
      $path  = str_replace("\\",DIRECTORY_SEPARATOR,$path);
      include "$path";

});