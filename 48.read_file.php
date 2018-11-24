<?php
    $file = 'example.txt';

    $stream = fopen($file,'r'); // Permission must be 'r'. If it will be 'w' the all the data of the file will be cleared.

    if($stream) {
        $content = fread($stream, 25); // In the place of 25 we can write filesize($file)
        echo $content;
    }
    else {
        echo "This application can not read the content from the file";
    }
?>