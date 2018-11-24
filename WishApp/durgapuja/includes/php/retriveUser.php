<?php

    include('connectDb.php');

    $uri=mysqli_real_escape_string($con,$_GET["uri"]);

    //Get data's from the Table
    if(isset($uri))
    {
        $sql_query="SELECT * FROM event_wishers WHERE uri ='$uri'";
        $result_set=mysqli_query($con,$sql_query) or die('Error in Retriving Data inside Retrieve App');
        $user=mysqli_fetch_array($result_set);
    }

?>