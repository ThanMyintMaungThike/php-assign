<?php

// echo "Today is " . date("Y/m/d") . "<br>";
// echo "Today is " . date("Y.m.d") . "<br>";
// echo "Today is " . date("Y-m-d") . "<br>";
// echo "Today is " . date("l") . "<br>";

// echo "The time is ". date("h:i:sa");

// date_default_timezone_set("Asia/Yangon"); echo "<br>";
// echo "The time is ". date("h:i:sa"). "<br>"; 

$startDate = strtotime("Friday");
$endDate = strtotime("+6 weeks", $startDate);

while ($startDate < $endDate) {
    echo date("M d", $startDate) . "<br>";
    $startDate = strtotime("+1 weeks", $startDate);
}

$d1 = strtotime("April 21");
$d2 =ceil(($d1-time())/60/60/24);
echo "There are " . $d2 . "days until 21st of April." . "<br />";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- &copy; 2010-<php echo date("Y"); ?>  -->
    <?php
    $d = strtotime("10:30pm April 15 2014");
    echo"Created date is " . date("Y-m-d h:i:sa", $d) . "<br />"; 
    ?>
</body>
</html>