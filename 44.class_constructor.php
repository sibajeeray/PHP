<?php

    class Vehicle {

        var $wheelsCount;
        var $color;

        function moveWheels($name){
            echo $name." Wheels started moving <br/>";
        }

        //Constructor With Arguments
        function __construct($wheel, $color){
            $this->wheelsCount = $wheel;
            $this->color = $color;
            echo "Arugumented Constructor executed<br/>";
        }
    }

    $bmw = new Vehicle(4, "white");
    $mercedes = new Vehicle(4,"red");
    $truck = new Vehicle(10, "yellow");
    
    echo "<br/>";
    echo "BMW is having ".$bmw->wheelsCount." Wheels and of ".$bmw->color." color <br/>";
    echo "Mercedes is having ".$mercedes->wheelsCount." Wheels and of ".$mercedes->color." color <br/>";
    echo "Truck is having ".$truck->wheelsCount." Wheels and of ".$truck->color." color <br/>";
    echo "<br/>";
    
    $bmw->moveWheels("BMW");
    $mercedes->moveWheels("Mercedes");
    $truck->moveWheels("Truck");

?>