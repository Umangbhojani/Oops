<?php

trait Carr {
    public static $carname = 'RANG ROVER VELAR';
    public static $price = "8700000";
    
    public static function car() {
        return 'This car name is  '.self::$carname . ' price of this car is ' . self::$price . '.';
    }
}

trait Colorr {
    public static $color = 'blue';
    
    public static function color() {
        return ' your choice is ' . self::$color . ' color.';
    }
}

class Carinfo {
    use Colorr, Carr;
}

echo Carinfo::car();   
echo Carinfo::color();  

?>
