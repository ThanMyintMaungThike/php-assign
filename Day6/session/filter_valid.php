<?php
    $int = 0; //if integer, return value. If not, return false.

    // Without 0 case
    // if(!filter_var($int, FILTER_VALIDATE_INT) === false) {
    //     echo ("Integer is valid");
    // } else {
    //     echo ("Integer is not valid");
    // }

    if( filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    } else {
        echo ("Integer is not valid");
    }
?>