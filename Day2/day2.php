<?php

// function xc(array $a) {

// }try {
//     xc(4);
// }catch (Exception $e) { // failed to catch it
//     echo $e->getMessage();
// }

// function inverse($x) {
//     if (!$x) {
//         throw new Exception('Division by zero');
//     }
//     return 1 / $x;
// }
// try {
//     echo inverse(5) . "<br/>";
//     echo inverse(-1) . "<br/>";
//     echo inverse(0) . "<br/>";
// } catch (Exception $e) {
//     echo 'Caught exception: ' , $e->getMessage(), "<br/>";
// }
// echo "Hello World\n";


// function example

function myFunction() {
    echo "This test comes from a function ";

}
//create array :
 $myArr = ["Volvo", 15, ["apples", "banana"],'myFunction'];
 // calling the function from the array item:
 
 $myArr[3]();
 echo "<br/>";
print_r( $myArr[0]);  echo "<br/>";

$cars = [
    "Volvo",
    "BMW",
    "Toyota",
    "Honda",
];
// var_dump($cars); echo "<br/>";
// print_r($cars);
// array_splice($cars, 1, 1);
// var_dump($cars);

// array_push($cars, "Ford"); echo "<br/>";
// var_dump($cars);echo "<br/>";

// associated array 

$cars = [
    "brand" => "Ford",
    "model" => "Mustang",
];

$cars += ["color" =>"red", "year" => 2013];

var_dump($cars);

$fruits = [
    "Apple",
    "Mango",
    "Banana",
    "Pineapple",
];

array_push($fruits, "Watermelon", "Orange"); echo "<br/>";
var_dump($fruits); echo "<br/>";



$cars = [
    "Volvo",
    "BMW",
    "Toyota",
    "Honda",
];

// array_splice($cars, 1, 2);  //Delete
// var_dump($cars);
// unset($cars[0],$cars[1]); // Delete
// var_dump($cars); echo "<br/>";echo "<br/>";
// array_push($cars, "BYD","Mazada");
// var_dump($cars);echo "<br/>";echo "<br/>";

$cars = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1998,
];
// unset($cars["model"]);
// var_dump($cars);

// $newarray = array_diff($cars, ["Mustang","1998"]);
// var_dump($newarray);

$cars = [
    "Volvo",
    "BMW",
    "Toyota",
    "Honda",

];

// array_pop($cars);
// var_dump($cars);

// array_shift($cars);
// var_dump($cars);

// Sort Array in Assendign order sort() 
sort($cars);
var_dump($cars); 
echo "<br/>";echo "<br/>";

$number = [3, 5, 6, 7 ,3, 2];
rsort($number);
var_dump($number);

$ages = [
    "Peter"=> "35",
    "John"=> "34",
    "Alice"=> "42",
];
// asort($ages);
// var_dump($ages);
// ksort($ages);
// var_dump($ages);
arsort($ages); //associated value desending order
var_dump($ages);  echo "<br/>";echo "<br/>";

function add($a , $b) {
    $c = $a + $b;
    if($c<10 || $c>20) return $c;
    else return 30;
    // if( $c > 10 && $c < 20) return 30;
    // else return $c;  
}
echo add(12, 17); echo "<br/>";echo "<br/>";
echo add(2, 17);echo "<br/>";echo "<br/>";
echo add(2, 7);echo "<br/>";echo "<br/>";
echo add(22, 17);echo "<br/>";echo "<br/>";
echo add(20, 0);echo "<br/>";echo "<br/>";