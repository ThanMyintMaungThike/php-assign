<?php

// $num1 = "1";
// $num2 = 1;

// if($num1 === $num2) {
//     echo 'Equal';
// }else {
//     echo 'Not Equal';
// }

// $ans = 6;

// $result = $ans > 4 ? 'Correct' : 'Not Correct';
// $result = $ans <= 4 ? : '10';

// echo $result;

// $isCorrect = false;

// $result = $isCorrect ? 'false' : 'true';
// echo $result;

// $roll = rand(1, 6);
// echo 'Your roll is a ' . $roll;

// if($roll == 6) {
//     echo ' You win!';
// }

$d = date("D");
echo $d . "<br/>";
if($d == "Fri")
 echo "Have a nice weekend!";
elseif ($d == "Tue")
 echo "Today is Tuesday!";
else
 echo "Have a nice day"; echo "<br/>";
 
// switch($d) {
//     case "Mon":
//         echo "Today is Monday!";
//         break;
//     case "Tue":
//         echo "Today is Monday!";
//         break;
//     case "Wed":
//         echo "Today is Monday!";
//         break;
//     case "Thu":
//         echo "Today is Monday!";
//         break;
//     case "Fri":
//         echo "Today is Monday!";
//         break;
//     case "Sat":
//         echo "Today is Monday!";
//         break;
//     case "Sun":
//         echo "Today is Monday!";
//         break;
//     default:
//         echo "Wonder which day is this?";
//         break;
// }

$cars = ["Honda", "Toyata", "BMW", "Lexus"];
// echo "<br/>"   .$cars[0].", " .$cars[1]. " and " .$cars[3]. " are Japanese cars.";
foreach ($cars as $key=>$car) {
    echo $car;
    echo "<br/>";
}

$ages = [
    "KoPhyo"=>32,
    "KoNg"=>34,
    "KoMyo"=>30,
    "SuSu"=>null,
];
foreach($ages as $key => $age) {
    echo $key .": " . $age . "<br/>";
}
// echo "<br/> Ko Myo is ".$ages['KoMyo']. " years old.";
// Key only search for 1 dimentional arry, multidimentional array is not supported.
// To check whether a property exists in an object, property_exists() should be used.
var_dump(array_key_exists("SuSu", $ages));
echo "<br/>";

isset($ages['KoMyo']) ? print_r(true) : print_r(false);
echo "<br/>";

var_dump(isset($ages['SuSu']));
echo "<br/>";

$fruit = array_search('Banana', $fruits); // $key = 2;
print_r($fruit); 
echo $fruit;
echo"<br/>";

$people = [
    2 => [
      'name' => 'John',
      'fav_color' => 'green'
    ],
    5=> [
      'name' => 'Samuel',
      'fav_color' => 'blue'
    ],
  ];
  
  $key = array_search('blue', array_column($people, 'fav_color'));

$marks = [
    "John" => [
        "Maths" => 40,
        "Science" => 70,
        "English" => 60,
    ],
    "William" => [
        "Maths" => 53,
        "Science" => 65,
        "English" => 78,
    ],
];
foreach ($marks as $key => $student ) {

    foreach ($student as $subject => $score) {
        echo "Student ". $key." mark for ". $subject . "is " . $score . "<br/>";
        // echo $marks["John"]["Science"]. "<br/>";
    }   
}
// echo "Marks for John in Physics: ";
// echo $marks["John"]["Science"]. "<br/>";

$fruits = [
    0 => "Apple",
    2 => "Mango",
    4 => "Banana",
    5 => "Pineapple",
];

