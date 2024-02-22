<?php
    // $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

    $txt = "Orange\n";
    fwrite($myfile, $txt);
    $txt = "Juice\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    echo "Finished writing";
    ?>