<?php
    $file = "example.txt";

    $stream = fopen($file,'w');

    if($stream) {
        fwrite($stream, "This is the content...");
        fclose($stream);

        echo "Content is written to the file successfully";
    }
    else {
        echo "This Application is not able to write the file";
    }
?>