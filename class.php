<?php
class Food{
    private $str_name;
    private $int_price;

    public function __construct($param_name, $param_price){
        $this->str_name = $param_name;
        $this->int_price = $param_price;
    }

    public function priceChanger($newprice){
        $this->int_price = $newprice;
    }

    public function fnc_print_food(){
        $str = $this->str_name." : ". $this->int_price."원";
        echo $str;
    }
}

$obj_food = new Food( "탕수육",10000);
$obj_food->priceChanger(12000);
$obj_food->fnc_print_food();

?>