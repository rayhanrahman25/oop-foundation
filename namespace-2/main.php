<?php
namespace cloudstorage;
include "autoloader.php";
use \cloudstorage\mail\Mailer as mailer;
use \cloudstorage\filesystem\Filemain as filemain;
use \cloudstorage\filesystem\files\image\Jpg;
class Main{
    function __construct()
    {
       $mail = new mailer();
       $mail->sendMail();
       echo "\n";
       $filemain = new filemain();
       $filemain->fileName();
       echo "\n";
       $contract = new Jpg();
       $contract->dimension();
       echo "\n";
       $contract->something();
    }
}

new Main();