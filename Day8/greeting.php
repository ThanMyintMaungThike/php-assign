<?php
class Greeting {
    public static function welcome() {
        echo "Hello World";
    }
}

// call static method 
Greeting::welcome();
?>

<?php
class PI {
    public static $value = 3.14159;
}

echo PI::$value;