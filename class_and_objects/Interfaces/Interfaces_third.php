<?php

interface Student{

    public static function student1();

    public static function student2();
}

class Std implements Student{

    public static function student1(){

        echo ' student1 : ';
    }
    public static function student2(){

        echo ' student2 : ';
    }
}
 
Std::class;
Std::student1();
Std::student2();

?>