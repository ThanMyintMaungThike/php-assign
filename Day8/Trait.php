<?php
// trait Message {
//     public function msg() {
//         echo "OOP is fun!";
//     }
// }

// class Welcome {
//     use Message;
// }

// $obj = new Welcome();
// $obj->msg();

// **********Multiple traits*********


trait Message1 {
    public function msg1() {
        echo "OOP is fun!";
    }
}
trait Message2 {
    public function msg2() {
        echo "OOP reduce code duplication!";
    }
}

class Welcome {
    use Message1;
}
class Welcome2 {
    use Message1, Message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";
$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();