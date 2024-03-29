<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    echo $target_file . '<br /><br />';
    echo $imageFileType . '<br /><br />';

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    // print_r($check);echo"hello world!";
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
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
// var_dump($_FILES);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name= "fileToUpload" id="fileToUpload">
        <input type="submit" name= "submit" value="Upload Image">
    </form> 
    <img src="<?php echo $target_file; ?>" alt="Uploaded Image">
</body>
</html>