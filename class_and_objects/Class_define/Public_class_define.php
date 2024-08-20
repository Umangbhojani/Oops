<?php
class Bike {
 
    public  $bikename = 'continatalGT650';
    public  $price = "425000";
    public  $enginecc = '648cc';


   public function display(){
    return $this->bikename.' is '. $this->enginecc .' bike and its price is '. $this->price.'.';
   }
}
$bike = new Bike;
echo $bike->display();
?>