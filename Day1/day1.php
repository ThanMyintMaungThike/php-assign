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
foreach ($cars as $car) {
    echo $car;
    echo "<br/>";
}

$ages = [
    "KoPhyo"=>32,
    "KoNg"=>34,
    "KoMyo"=>30,
];
foreach($ages as $key => $age) {
    echo $key .": " . $age . "<br/>";
}
// echo "<br/> Ko Myo is ".$ages['KoMyo']. " years old.";

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
foreach ($marks as $name => $student ) {
    echo $name ;
    foreach ($student as $subject => $score) {
        echo " Marks for ". $subject . "is " . $score . "<br/>";
        // echo $marks["John"]["Science"]. "<br/>";
    }   
}
// echo "Marks for John in Physics: ";
// echo $marks["John"]["Science"]. "<br/>";