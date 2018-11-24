<?php

    include('connectDb.php');

    if(isset($_POST['create']))
    {

        //prevent sql injection
        $title=mysqli_real_escape_string($con,$_POST["title"]);

        //prevent xss
        $title = htmlspecialchars($title,ENT_COMPAT);

        //friendly URL conversion
        function to_prety_url($str){
            if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
                $str = mb_convert_encoding($str, 'UTF-8', mb_detect_encoding($str));
            $str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
            $str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\1', $str);
            $str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
            $str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
            $str = strtolower( trim($str, '-') );
            return $str;
        }
        $uri=to_prety_url($title);

        // sql query for inserting data into database
        $sql_query = "INSERT INTO event_wishers(title, uri) VALUES ('$title','$uri')";
        $result_set=mysqli_query($con,$sql_query);

        // Replace http://localhost/newyear/$str with your Greeting WEB APP URL
        header("Location: http://localhost/PhpTest/project/$uri");
        exit();
    }

?>