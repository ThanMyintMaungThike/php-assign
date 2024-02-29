<?php
class Form  {
    public $name;
    public $email;
    public $website;
    public $comment;
    public $gender;
    public $nameErr;
    public $emailErr;

    public static function nameCheck($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $letters = "/^[a-zA-Z-' ]*$/";
        if(!preg_match($letters, $data)) {
            
            return $nameErr = "* Only letters and white space allowed";
        }
        //  else {
        //     return $data;
        // }
    }
    public static function emailCheck($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        if(!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return $emailErr = "* Invalid email format.";
        }
    }
    public static function website($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $webSign = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
        if(!preg_match($webSign, $data)) {
            return $websiteErr = "* Invalid URL.";
        }

    }
}