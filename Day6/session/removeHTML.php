<?php 
    $str = "<h1>Hello World!</h1>";

    echo filter_var($str, FILTER_SANITIZE_STRING);
    // echo $str;
?>