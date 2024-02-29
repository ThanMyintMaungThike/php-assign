<?php

   function exclaim($str) {
    return $str . "!" . "<br>"; 
   }

   function ask($str) {
    return $str . "?" . "<br>" ;
   }

   function printMessage($message, $format) {
    // calling the $format callback function
    echo $format($message);

   }
    // pass "exclaim" and  "ask" a callback function to printMessage()
   printMessage("Happy New Year", "exclaim");
   printMessage("How are you", "ask");

$number = [1, 2, 4, 6] ;
$ans = array_map(function($n) {
    return $n * $n ;
}, $number);

print_r($ans);