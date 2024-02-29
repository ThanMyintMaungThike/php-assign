<?php
    $jsonObj = '{"Peter":35, "John": 37 , "Julia": 43}';
    // var_dump(json_decode($jsonObj, true));
    // true is optional for associated objects array 

    // $obj = json_decode($jsonObj);

    // echo  $obj->Peter;
    // echo  $obj->John;
    // echo  $obj->Julia;

    // $arr = json_decode($jsonObj, true);
    // echo $arr["Peter"];
    // echo $arr["John"];
    // echo $arr["Julia"];

    $obj = json_decode($jsonObj);
    
    foreach ($obj as $key => $val) {
        echo $key . " => " . $val .  "<br>";
    }