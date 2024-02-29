<?php
$servername = "localhost";
$username = 'root';
$password = "";

$connect = new mysqli($servername, $username, $password);

if($connect->connect_error) {
    die("Connection failed: ". $connect->connect_error);
} echo "Connect succeeded";

// $sql = "CREATE TABLE tpp_project . nodes(
//     title VARCHAR(255) NOT NULL,
//     body VARCHAR(255) NOT NULL
//     )";

//     if($connect->query($sql) === TRUE) {
//         echo "Table created.";
//     } else {
//         echo "Error creating table!" . $connect->error;
//     }

// $connect->close();