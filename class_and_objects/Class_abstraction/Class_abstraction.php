<?php

abstract class Product{

    public $product_name = 'Oil';
    
    public $product_price = '100';
}

class Main extends Product{
     public function product(){
        return ' Product name is  '.$this->product_name.' its price is '.$this->product_price.'.';
     }
}

$main = new Main;
echo $main->product(); 
?>