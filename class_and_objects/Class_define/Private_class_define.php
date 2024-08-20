<?php

class Car{

    private $name = 'RANGE ROVER VELAR';
    private $enginecc = '1997cc';
    private $price = '8700000';

    public function getCar() {
    }

    public function Car(){
        return $this->name.' is '. $this->enginecc .' car and its price is '. $this->price.'.';
        
    }
}
$car = new Car;
echo $car->Car();
?>