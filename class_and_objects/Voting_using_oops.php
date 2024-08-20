<?php

class Vote
{

    public $name;

    public $age;

    public function __construct($name, $age)
    {

        $this->name = $name;
        $this->age = $age;
    }

    public function canvote()
    {
        return $this->age >= 18;
    }
    public function name()
    {
        return $this->name;
    }
    public function Message()
    {
        if ($this->canvote()) {
            return $this->name . " you can vote.";
        } else {
            return $this->name . " you can not vote.";
        }
    }
}
$voter1 = new Vote(' Umang Bhojani : ', 25);
echo $voter1->Message();
echo "<br>";
$voter1 = new Vote(' Meet Bhojani : ', 15);
echo $voter1->Message();

?>