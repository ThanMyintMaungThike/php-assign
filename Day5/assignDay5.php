<?php
// define variables and set to empty values
function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$nameErr = $emailErr = $errImg = $genderErr = $websiteErr = $commentErr = $passwordErr = $confirmPasswordErr = "";
$name = $email = $gender = $website = $comment = $fileUpload = $imgOutput = $show = "";

// if(isset($fileUpload)) {
//     if (isset($_POST["submit"])) {

//         $error = $_FILES['fileToUpload'] ['error'];

//         if($error) {
//             $errImg = "Sorry, select image first.";
//             $_SERVER["PHP_SELF"];
//         } else {

//         $target_dir = "assignUploads/";
//         $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//         $uploadOk = 1;
//         $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//         if($check !== false) {
//             $imgOutput = "File is an image - " . $check["mime"] . ".";
//             $uploadOk = 1;
//         } else {
//             echo "File is not an image.";
//             $uploadOk = 0;
//         }
//         // Check if file already exists
//         if (file_exists($target_file)) {
//             echo "Sorry, file already exists.";
//             $uploadOk = 0;
//         }
//         // Check file size 
//         if($_FILES["fileToUpload"] ["size"] > 500000) {
//             echo "Sorry, your file is too large.";
//             $uploadOk = 0;
//         }
        
//         // Allow certain file formats 
//         if (
//             $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//             && $imageFileType != "gif"
//         ) {
//             echo "Sorry, only JPG, JPEG, PNG and GIF images are supported";
//             $uploadOk = 0;
//         }

//         // Check if $uploadOk is set to 0 by an error
//         if($uploadOk == 0) {
//             echo "Sorry, your file was not uploaded successfully.";
//             // if everything is ok, try to upload file 

//         }else {
//             if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//                 // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))."has been uploaded";
//             }else {
//                 echo "Sorry, there was an error uploading your file.";
//             }
//         }
//       }
//     }
// }

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

        fwrite($myfile, $_POST['name'] . "\n" . $_POST['email'] . "\n"  . $_POST['website'] . "\n". $_POST['comment'] . "\n" . $_POST['gender'] . "\n") ;
        $fileUpload = "File uploaded successfully.";


                // Open the PHP file for reading
        $fileList = fopen("loginRecord.txt", "r") or die ("Unable to open file!");
        // var_dump ($fileList);

        $files=[];
        while(!feof($fileList)) {
            $file=[]; 
            $file['name'] = fgets($fileList);
            $file['email'] = fgets($fileList);
            $file['website'] = fgets($fileList);
            $file['comment'] = fgets($fileList);
            $file['gender'] = fgets($fileList);

            $files[] = $file;
        }
        // print_r($files);
            fclose($fileList); 

 
            
                    $error = $_FILES['fileToUpload'] ['error'];
            
                    if($error) {
                        $errImg = "Sorry, select image first.";
                        $_SERVER["PHP_SELF"];
                    } else {
            
                    $target_dir = "assignUploads/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        $imgOutput = "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                    // Check if file already exists
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    }
                    // Check file size 
                    if($_FILES["fileToUpload"] ["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }
                    
                    // Allow certain file formats 
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        echo "Sorry, only JPG, JPEG, PNG and GIF images are supported";
                        $uploadOk = 0;
                    }
            
                    // Check if $uploadOk is set to 0 by an error
                    if($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded successfully.";
                        // if everything is ok, try to upload file 
            
                    }else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))."has been uploaded";
                        }else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                  }
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
        <div class="alert alert-info"><?= $errImg; ?></div>

        <form class="m-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="post">
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
            value="Male" > Male

            <input type="radio" name="gender"
            <?php if(isset($gender) && $gender=="female") echo "checked";?>
            value="Female"> Female

            <input type="radio" name="gender"
            <?php if(isset($gender) && $gender=="other") echo "checked";?>
            value="Other"> Other <br>
            <span class="error"><?php echo $genderErr;?></span> <br><br>
    
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
            <span class="error"><?php echo $passwordErr; ?></span> <br><br>
    
            <label for="password" class="form-label">Confirm Password</label>
            <input type="password" name="confirm-password" class="form-control" id="confirmPassword">
            <span class="error"><?php echo $confirmPasswordErr; ?></span> <br><br>

            <div class="input-group mb-3">
                <input type="file" name= "fileToUpload" id="fileToUpload mb-3" class="form-control">
            </div>
    
            <input class="btn btn-primary w-100 mb-5 p-3" type="submit" name="submit" value= "Submit">
        </form>

        <div class="alert alert-info"><?= $fileUpload ?></div>
    </div>

    <div class="container text-center">
        <?php if ($fileUpload): ?>
            <table class="table">
                <thead>
                <tr class="bg-secondary text-warning">
        
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Website</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Gender</th>
                </tr>
                </thead>
                <tbody>
                    <?php if($fileUpload) : ?>
                        <?php foreach ($files as $file) : ?>
                        <tr class="bg-info">
                            <td>
                                <?= $file ['name'] ?>
                            </td>
                            <td>
                                <?=  $file['email'] ;?>
                            </td>
                            <td>
                                <?=  $file['website']?>
                            </td>
                            <td>
                                <?=  $file['comment']?>
                            </td>
                            <td>
                                <?=  $file['gender'] ?>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <?php endforeach ?>
                    <?php endif  ?>
                </tbody>
            </table>

            <div> <?= $imgOutput ?> </div>
        <?php endif ?>
<!-- 
        <form class="m-auto" action="assignDay5.php" method="post" enctype="multipart/form-data" style= "width: 400px">
            <h3>Select image to upload</h3>
            <div class="input-group mb-3">
                <input type="file" name= "fileToUpload" id="fileToUpload mb-3" class="form-control">
                <input class="btn btn-primary w-100 mb-5 " type="submit" name="submit" value= "Submit">
            </div>
        </form>  -->
        <?php if($fileUpload) : ?>
            <img src="<?php echo $target_file; ?>" alt="Uploaded Image">
        <?php endif ?>
    </div>

</body>
</html>