<?php

        $dbhost = 'localhost';//'localhost:3306';
        $dbname = 'wish';//'u797446556_wish';
        $dbuser = 'root';//'u797446556_siba';
        $dbpass = '';//'backEnd78@383';


        $con=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) //connect to the database server
        or die ("Could not connect to mysql because ".mysqli_error());

        mysqli_select_db($con,$dbname)  //select the database
        or die ("Could not select to mysql because ".mysqli_error());

?>