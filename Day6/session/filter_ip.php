<?php
  //  $ip = "127.0.0.256";

  //  if(!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  //   echo("$ip is a valid IP address");
  //  } else {
  //    echo("$ip is not a valid IP address");
  //  } 

    $email = "john@example.com"; 

    // remove all illegal characters from email
    // $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    //validate e-mail
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      echo ("$email is a valid email address");
    } else {
      echo ("$email is not a valid email address");
    }
   ?>