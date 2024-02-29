<!-- MySQLi Object-Oriented  -->
<?php
$servername = "localhost";
$username = 'root';
$password = "";

// Create con
$conn = new mysqli($servername, $username, $password);

// Check conn 
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connect succeeded";

// Create database 
// $sql = "CREATE DATABASE tpp_project";

// if($conn->query($sql) === TRUE ) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
// $conn->close();
// $sql = "CREATE TABLE tpp_project . guests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     email VARCHAR(55),
//     register_date DATETIME DEFAULT CURRENT_TIMESTAMP
//     )";

//     if($conn->query($sql) === TRUE ) {
//         echo "Database created successfully";
//     } else {
//         echo "Error creating database: " . $conn->error;
//     }

// $sql = "INSERT INTO  tpp_project . guests (name, email)
// VALUES ('John', 'john@example.com');";

// $sql .= "INSERT INTO  tpp_project . guests (name, email)
// VALUES ('David', 'David@example.com');";


// if($conn->multi_query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//     echo "New record created successfully. Last inserted id: " . $last_id;
// } else {
//     echo "Error: " .$sql . "<br>" . $conn-error; 
// }

// prepare and bind 
// $stmt = $conn->prepare("INSERT INTO tpp_project . guests (name, email) VALUES (?, ?)");
// $stmt->bind_param("ss", $username, $email);

// set parameters and execute 
// $username = "Christina";
// $email = "christina@gmail.com";
// $stmt->execute();

// $username = "Christina2";
// $email = "christina2@gmail.com";
// $stmt->execute();

// $username = "Christina3";
// $email = "christina3@gmail.com";
// $stmt->execute();

// echo "New records created.";
// $stmt->close();
// $conn->close();

$sql = "SELECT id, name, email FROM tpp_project . guests";
$result = $conn->query($sql);

if($result->num_rows > 0 ) {
    echo "<table><tr><th>ID</th><th>Name</th><th>email</th><tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row['id'] . " -Name: " . $row['name'] . "" . $row['email'] . "<br td>";
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><tr>";
    } 
} else {
    echo "0 result";
}
$conn->close();