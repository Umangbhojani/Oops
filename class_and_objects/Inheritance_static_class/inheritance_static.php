<?php

class Bike {

    public static $bikename = 'ContinentalGT650';
    public static $price = "425000";
    public static $enginecc = '648cc';

    public static function bike() {
        return self::$bikename . ' is a ' . self::$enginecc . ' bike and its price is ' . self::$price . '.';
    }
}

class Color extends Bike {

    public static $color = 'chrome';

    public static function color() {
        return ' your choies is '.self::$color .' color ';
    }
}

echo Color::color(); 
echo Color::bike(); 
?>

/*
$this:

Used to refer to the current instance of a class.
Applicable in instance methods (non-static methods).
Allows access to instance properties and methods.

self:

Used to refer to the current class itself, not an instance of the class.
Applicable in static methods or when accessing static properties.
Allows access to static properties and methods.*/