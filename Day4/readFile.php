<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // readfile("webdictionary.txt");
    $myfile = fopen("webdictionary.txt", "r") or die ("Unable to open file!");
    // echo fread($myfile, filesize("webdictionary.txt"));
    // Output on line until end-of-file
    while(!feof($myfile)) {

        echo fgets($myfile) . "<br>";
        // echo fgetc($myfile) . "<br>";
    }
    fclose($myfile);

    ?>
</body>
</html>