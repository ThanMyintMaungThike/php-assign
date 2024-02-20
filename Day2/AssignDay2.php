<?php
// assign no.1 
function getRange($a , $b) {
    if (($a >100 && $a < 200) || ($b > 100 && $b <200)) return true;
    else return false;
}
var_dump(getRange(100 , 199)); echo"<br />";
var_dump(getRange(250 , 300)); echo"<br />";
var_dump(getRange(105 , 190)); echo"<br />";

echo "============================"; echo"<br />";

// assign no.2
function sum($a, $b) {
    if($a === $b) return ($a + $b)*3;
    else
    return $a + $b;
}
echo sum(1, 2);echo"<br />";
echo sum(3, 2);echo"<br />";
echo sum(2, 2);echo"<br />";

echo "============================"; echo"<br />";

// assign no.3

function checkInFirstFour($array, $element) {

    $firstFour = array_slice($array, 0, 4);

    if (in_array($element, $firstFour)) {
        return true;
    }return false;
}

var_dump(checkInFirstFour([1,2,9,3], 3)); echo"<br />";
var_dump(checkInFirstFour([1,2,3,4,5,6], 2)); echo"<br />";
var_dump(checkInFirstFour([1,2,3,4,5,6], 6)); echo"<br />";
var_dump(checkInFirstFour([1,2,2,3], 9)); echo"<br />";


// $numbers = [1, 2, 9, 3];
// $t = false;

// for($i=0; $i<=3; $i++) { 
//     if( $numbers[$i] == 3) {
//         var_dump(!$t); echo"<br />";
//     }
// } 

// $nums = [1, 2, 3, 4, 5, 6];
// $t = false;
// for($i=0; $i<=3; $i++) { 
//     if( $nums[$i] == 2) {
//         var_dump(!$t); echo"<br />";
//     }
// }

// $numbers = [1, 2, 3, 2, 5, 6];
// $t = false;
// for($i=0; $i<=3; $i++) { 
//     if( $numbers[$i] == 6) {
//         var_dump(!$t);
//         return;
//     }
// }var_dump($t); echo"<br />";

// $numbers = [1, 2, 2, 3];
// $t = false;
// for($i=0; $i<=3; $i++) { 
//     if( $numbers[$i] == 9) {
//         var_dump(!$t);
//         return;
//     }
// }var_dump($t);echo"<br />";

echo "============================"; echo"<br />";

// assign no.4

function subStrings($str1, $str2) {

    $len1 = strlen($str1);
    $len2 = strlen($str2);
    

    $count = 0;


    for ($i = 0; $i < $len1-1; $i++) {

        $substring1 = substr($str1, $i, 2);
        // echo $substring1; echo"<br />";
        $substring2 = substr($str2, $i, 2); 
        // echo $substring2;  echo"<br />";
        if ($substring1 === $substring2) {
            $count++;
        }
    }

    return $count;
}

echo substrings("abcdefgh", "abijsklm");echo"<br />";
echo substrings("abcde", "osucd");echo"<br />";
echo substrings("pqrstuvwx", "pqkdiewx");echo"<br />";

echo "============================"; echo"<br />";

// assign no.5   

function compute($a, $b, $c) {
    $a = ($a >= 10 && $a <= 20 && $a != 13 && $a != 17) ? 0 : $a;
    $b = ($b >= 10 && $b <= 20 && $b != 13 && $b != 17) ? 0 : $b;
    $c = ($c >= 10 && $c <= 20 && $c != 13 && $c != 17) ? 0 : $c;
    return ($a + $b + $c);
}
echo compute(4, 5 , 7);echo"<br />";
echo compute(7, 4, 12);echo"<br />";
echo compute(10, 13, 12);echo"<br />";
echo compute(17, 12, 18);echo"<br />";
