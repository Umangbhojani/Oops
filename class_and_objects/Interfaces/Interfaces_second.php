<?php

interface Laptop
{

    public function mac();

    public function windows();
}

class Croma implements Laptop
{

    public function mac(){

        echo ' mac : ';
    }

    public function windows(){

        echo ' windows : ';
    }

}

$b7 = new Croma;
$b7->mac();
$b7->windows();
?>