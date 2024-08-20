<?php

class Book
{

    public $name = 'Main Jo Hoon John Elia Hoon';
    public $price = 960;

    public function __construct()
    {
        $this->name = 'Main Jo Hoon John Elia Hoon';
        $this->price = 960;
    }

    public function getname()
    {
        return $this->name;
    }

    public function getprice()
    {
        return $this->price;
    }

}
$book = new Book;
echo $book->getname();
echo $book->getprice();
?>