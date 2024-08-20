<?php

interface Mobile
{

    public function samsung();
    public function google();

}

class Store implements Mobile
{


    public function samsung()
    {
        echo ' samsung : ';
    }

    public function google()
    {
        echo ' google : ';
    }

}

$obj = new Store;
$obj->samsung();
$obj->google();

?>