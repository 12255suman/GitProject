<?php
class calculation{
    public $a,$b,$c;

    function sum(){
       $this -> c = $this->a +$this->b;
    return $this->c;     
    }
    function sub(){
       $this->c = $this->a - $this->b;
    return $this->c;     
    }
}

$c1 =new calculation();
$c1-> a=10;
$c1-> b=3;


$c2 =new calculation();
$c2-> a=100;
$c2-> b=30;

echo "sum value of C1 : " .$c1->sum() ."<br>";
echo "SUb vale of C2 : " .$c2->sub() . "<br>";

echo "SUb vale of C1 :  " .$c1->sub();


 
?>