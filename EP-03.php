<?php
class Funds{
    private $funds;
    
    function __construct($fund)
    {
        $this->funds = $fund;
    }
    
    function totalFunds(){
        echo "Total Fund is {$this->funds}\n";
    }
    function addMoney($money){
        $this->funds += $money;
    }
    function withdrawMoney($money){
        $this->funds -= $money;
    }
}

$funds = new Funds(200);
$funds->totalFunds();
$funds->addMoney(100);
$funds->totalFunds();
$funds->withdrawMoney(50);
$funds->totalFunds();