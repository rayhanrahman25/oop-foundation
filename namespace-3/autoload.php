<?php
spl_autoload_register(function($filename){
       $path = strtolower(str_replace("cloudstorage\\","",$filename)).".php" ;
       $path  = str_replace("\\","/",$path);
     include "$path";
});