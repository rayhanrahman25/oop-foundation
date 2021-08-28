<?php
namespace cloudstorage;
include "autoload.php";


use \cloudstorage\mail\Mailer;
use \cloudstorage\filesystem\files\img\Jpeg;

class Main{
    function __construct()
    {
       $mail = new Mailer;
       $mail->sendMail();
       echo "\n";
       $something = new Jpeg;
       $something->dimension();
    }
}
new Main();