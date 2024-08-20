<?php

class Suv{

    protected $name = 'Defender';
    protected $enginecc = '2997cc';
    protected $price = '1.5cr';


    public function getSuv() {
    }

    public function Suv(){
        return $this->name.' is '. $this->enginecc .' car and its price is '. $this->price.'.';
        
    }
}
$suv = new Suv;
echo $suv->Suv();
?>