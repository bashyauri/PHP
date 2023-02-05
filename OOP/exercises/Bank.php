<?php
class Bank{
    private $accno;
    private $name;
    private $balance=0;
    function __construct($accno,$name,$balance=50){
        $this->balance=$balance;
        $this->accno=$accno;
        $this->name = $name;

    }
    function depositAmount($amount):void
    {
        if ($amount <= 0){
            $amount = 0;
            echo "You cant deposit empty cash".PHP_EOL;
        } else{
            
            $this->balance += $amount;

        }
        
        
    }
    function deductAmount($amount):void
    {
        if ($amount > 0){
            echo "insufficient cash".PHP_EOL;
            $amount = 0;
        }
        else{
            $this->balance -= $amount;
        }
      
        
    }
    public function getBalance():int
    {
        return $this->balance;
    }
}
$bank = new Bank("3055160800","Bashar Umar");

$bank->depositAmount(30);
$bank->depositAmount(-5);
echo $bank->getBalance().PHP_EOL;
$bank->deductAmount(100);
echo $bank->getBalance().PHP_EOL;