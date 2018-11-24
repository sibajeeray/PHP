<?php 
    $name= "TestCookie";
    $value = 100;
    $expiration = time() + (60*60*24*7);

    setcookie($name, $value, $expiration);

    echo "Cookie is saved to your Browser. If google chrome, go to setting->show advanced setting->content setting->All cookies and site data";
?>