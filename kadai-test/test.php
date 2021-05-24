<?php

ini_set('display_errors', "On");
class Vehicle
{
    public $velocity = 0;

    protected function setVelocity($velocity)
    {
        echo $velocity;
    }
    protected function getVelocity()
    {
        return $this->velocity;
    }
}

class Car extends Vehicle
{
    public $color;
    public $licensePlate;

    public function __construct($velocity = 0, $color = null,$licensePlate = null){
        
        $this->velocity = $velocity;
        $this->color = $color;
        $this->licensePlate = $licensePlate;
    }

    function showProperties(){

        echo 'color :'.$this->color;
        echo '<br>';
        echo 'licensePlate :'.$this->licensePlate;
        echo '<br>';
        echo 'velocity :'.$this->velocity;
    }
}


//$vehicle = new Vehicle();
$car = new Car(100,"black","あ12-34");

$car->showProperties();

//$vehicle->$velocity = 10;
//echo $vehicle->$velocity;

//$vehicle->setVelocity(50);
//$vehicle->getVelocity();



?>