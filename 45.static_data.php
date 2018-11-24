<?php
    class Car {
        static $wheels = 4;

        function changeData() {
            Car::$wheels = 10;
        }
    }

    $bmw = new Car();
    
    echo Car:: $wheels."<br/>";

    $bmw -> changeData(); // Changing the value of the static variable or class variable.

    echo Car:: $wheels;
?>