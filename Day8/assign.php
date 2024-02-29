<?php
include 'databaseConn.php';

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$titleErr =  "";
$nameErr =  "";
$title = $txt_area = "";


if($_SERVER['REQUEST_METHOD'] == 'POST') {


    if(empty($_POST['title'])) {
        $titleErr = "* title is required";
    } else {
        $title = testInput($_POST['title']);
        if(!preg_match("/^[a-zA-Z-' ]*$/", $title)) {
            $titleErr = "* Only letters and white space allowed";
        }

    }
    if(empty($_POST['txt_area'])) {
        $txt_Err = "";
    } else {
        $txt_area = testInput($_POST['txt_area']);
    }
}

$stmt = $connect->prepare("INSERT INTO tpp_project . nodes (title, body) VALUES (?, ?)");
$stmt->bind_param("ss", $titleName, $txtArea);

$titleName = $title;
$txtArea = $txt_area;
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .form {
            width: 600px;
            margin: 0 auto;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
<body class="mt-5">
    <div class="form">
        <form class="m-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Title: <input class="form-control" type="text" name="title" value="<?php echo $title; ?>">
            <span class="error"><?php echo $nameErr; ?></span> <br><br>
            Txt Area: <textarea class="form-control" name="txt_area"  cols="30" rows="5"><?php echo $txt_area; ?></textarea><br><br>
            <input class="btn btn-primary w-100 mb-5 p-3" type="submit" name="submit" value= "Submit">
        </form> 
    </div>
<?php 
$sql = "SELECT * FROM tpp_project . nodes";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Titles</th><th>Body</th><tr>";
    while($row = $result->fetch_assoc()) {
        echo"<tr><td>".$row['title']."</td><td>".$row['body']."</td><tr>";
    }
}
?>
</body>
</html>