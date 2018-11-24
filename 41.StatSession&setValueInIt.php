<?php
    session_start(); //This functio will start a session if it is not there for this browser, else it will use the old session.
                        //One cookie will also be created names PHPSESSID in our browser which will be containing the session ID.
    $_SESSION["name"] = "Sibajee";
    $_SESSION["age"] = 25;
    $_SESSION["greet"] = "Hello Sibajee"; //Any number of value we can set. These will be stored in server. 
?>