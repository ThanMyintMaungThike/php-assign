<?php
// define variables and set to empty values
function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$nameErr = $emailErr = $show = $genderErr = $websiteErr = $passwordErr = $confirmPasswordErr = "";
$name = $email = $gender = $website = $comment = $fileUpload ="";


if($_SERVER['REQUEST_METHOD'] == 'POST') {


    if(empty($_POST['name'])) {
        $nameErr = "* Name is required";
    } else {
        $name = testInput($_POST['name']);
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "* Only letters and white space allowed";
        }

    }

    if(empty($_POST['email'])) {
        $emailErr = "* Email is required";
    } else {
        $email = testInput($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "* Invalid email format";
        }
    }

    if(empty($_POST['gender'])) {
        $genderErr = "* Gender is required";
    } else {
        $gender = testInput($_POST['gender']);
        // if($gender!= "Male" && $gender!= "Female" && $gender!="other") {
        //     $genderErr = "Invalid gender";
        // }
    }

    if(empty($_POST['website'])) {
        $websiteErr = "* Website is required";
    } else {
        $website = testInput($_POST['website']);
        // if(!filter_var($website, FILTER_VALIDATE_URL)) {
        //     $websiteErr = "Invalid website format";
        // }
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        $websiteErr = "* Invalid URL";
    }
      
        
    }

    if(empty($_POST['comment'])) {
        $commentErr = "";
    } else {
        $comment = testInput($_POST['comment']);
    }
    
    // if(empty($_POST['password'])) {
    //     $passwordErr = "Password is required";
    // } else {
    //     $password = ($_POST['password']);
    // }
    if (empty($_POST["password"]) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)) {
        $passwordErr = "* Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
    } else {
        $password = $_POST["password"];
    }

    if(empty($_POST["confirm-password"]) ||
    ( $_POST["confirm-password"] !== $_POST["password"])) {
        $confirmPasswordErr = "* Password does not match";
    }  

    if($nameErr || $emailErr || $websiteErr || $genderErr || $passwordErr ||$confirmPasswordErr) {
        $show = "Try again!";
    }else {
        $show = "You are logged in successfully.";

        $myfile = fopen("loginRecord.txt", "a") or die ("Unable to open file");
        $rec = $_POST['name'];
        fwrite($myfile, $rec . "\n");
        $rec = $_POST['email'];
        fwrite($myfile, $rec . "\n");
        $rec = $_POST['website'];
        fwrite($myfile, $rec . "\n");
        $rec = $_POST['gender'];
        fwrite($myfile, $rec . "\n");
        fclose($myfile);
        $fileUpload = "File uploaded successfully.";


    }

} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body class="mt-5">
    <div class="form">
        <h1 class="mb-3 text-primary">PHP Form Validation Example</h1>
    

        <div class="alert alert-info"><?= $show; ?></div>

        <form class="m-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Name: <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span> <br><br>
    
            Email: <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span> <br><br>
    
            Website: <input class="form-control" type="text" name="website" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteErr; ?></span> <br><br>
    
            Comment: <textarea class="form-control" name="comment"  cols="30" rows="5"><?php echo $comment; ?></textarea><br><br>
    
            Gender: 
            <input type="radio" name="gender" 
            <?php if(isset($gender) && $gender=="male") echo "checked";?> 
            value="male" > Male

            <input type="radio" name="gender"
            <?php if(isset($gender) && $gender=="female") echo "checked";?>
            value="female"> Female

            <input type="radio" name="gender"
            <?php if(isset($gender) && $gender=="other") echo "checked";?>
            value="other">Other <br>
            <span class="error"><?php echo $genderErr;?></span> <br><br>
    
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
            <span class="error"><?php echo $passwordErr; ?></span> <br><br>
    
            <label for="password" class="form-label">Confirm Password</label>
            <input type="password" name="confirm-password" class="form-control" id="confirmPassword">
            <span class="error"><?php echo $confirmPasswordErr; ?></span> <br><br>
    
            <input class="btn btn-primary w-100 mb-5 p-3" type="submit" name="submit" value= "Submit">
        </form>

        <div class="alert alert-info"><?= $fileUpload ?></div>
        <table class="table">
        <thead>
        <tr>
            <th scope="col">List</th>
        </tr>
        </thead>
        <tbody>
            <tr>

                <td>
                <?php
                    $myfile = fopen("loginRecord.txt", "r") or die ("Unable to open file!");
                    while(!feof($myfile)) {

                        echo fgets($myfile). "\n";
                    }
                    fclose($myfile);
                ?>
                </td>
            </tr>
        </tbody>
    </div>
    <!-- <php include 'formRecord.txt'; ?> -->
</body>
</html>