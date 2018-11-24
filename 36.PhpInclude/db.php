<?php 
    $connection = mysqli_connect('localhost','root','','test');

    if($connection) {
        echo "DB Connection Established<br/>";
    } 
    else {
        die("DB Connection could not be established<br/>".mysqli_connect_error($connection));
    }
?>
