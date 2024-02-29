<?php

   function myCallback($item) {
     return strlen($item). "\t" . "Hello" . "<br/>";
   }

   $strings = ["apple", "orange", "banana"];
   $lengths = array_map("myCallback", $strings);

   print_r($lengths);
   