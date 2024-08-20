<?php

namespace suv;

class Rangrover{

    public $name = 'Velar';

    public $price = '8700000';

    public function rangrover(){
        return ' This is Rang Rover '.$this->name .' its price is  '. $this->price.'.';    
    }
}

namespace offroad;
class Rangrover{

    public $name = 'Defender';

    public $price = '15000000';

    
    public function rangrover(){
        return ' This is Rang Rover '.$this->name .' its price is  '. $this->price.'.';    
    }
}


$rangrover = new \suv\Rangrover;
echo $rangrover->rangrover();
 echo "<br>";
 $rangrover = new \offroad\Rangrover;
 echo $rangrover->rangrover();
?>