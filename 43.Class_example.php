<?php

    class Car {

        var $no_of_wheels = 4;
        var $color = "white";

        function move_wheels() {
            echo "Wheels started Moving<br/>";
        }

    }

    if(class_exists("Car")){
        echo "Car class Exist<br/>";
    }
    else {
        echo "Car class does not exist<br/>";
    }

    if(method_exists("Car","move_wheels")) {
        echo "Method exist<br/>";
    }
    else {
        echo "Metod does not exist<br/>";
    }

    $bmw = new Car();

    echo $bmw -> no_of_wheels. "<br/>";
    echo $bmw -> color. "<br/>";

    $bmw -> move_wheels();

    $bmw->no_of_wheels = 10;
    echo $bmw -> no_of_wheels. "<br/>";

    $mercedes = new Car();
    echo $mercedes -> no_of_wheels. "<br/>";

?>