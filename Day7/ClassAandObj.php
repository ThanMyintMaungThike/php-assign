<?php

// class Fruit {
//     public $name;
//     public $color;
    
//     function setName($name) {
//         $this->name = $name;
//     }
    
//     function getName() {
//         return $this->name;
//     }

//     function setColor($color) {
//         $this->color = $color;
//     }
    
//     function getColor() {
//         return $this->color;
//     }
// }

// $apple = new Fruit();
// $apple ->setName('Apple');
// $apple->setColor('Red');
// echo "Name: " . $apple->getName();
// echo "<br/>";
// echo "Color: " . $apple->getColor();
// echo "<br/>";

// $orange = new Fruit();
// $orange ->setName('Orange');
// $orange->setColor('Orange');
// echo "Name: " . $orange->getName();
// echo "<br/>";
// echo "Color: " . $orange->getColor();
// echo "<br/>";

// $banana = new Fruit();
// $banana ->setName('Banana');
// $banana->setColor('Yellow');

// echo "Name: " . $banana->getName();
// echo "<br/>";
// echo "Color: " . $banana->getColor();
// echo "<hr/>";
// var_dump($banana instanceof Fruit);


// class Fruit {
//     public $name;
//     public $color;
    
//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
    
//     function getName() {
//         return $this->name;
//     }
    
//     function getColor() {
//         return $this->color;
//     }
// }

// $apple = new Fruit("Apple", "Red");
// echo "Name is " . $apple->getName();
// echo "<br>";
// echo "Color is " . $apple->color;
// echo "<hr>";

// $orange = new Fruit("Orange", "Orange");
// echo "Name is " . $orange->getName();
// echo "<br>";
// echo "Color is " . $orange->getColor();

// class Fruit {
//     public $name;
//     public $color;
    
//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function __destruct() {
//         echo "The fruit is  {$this->name} and the color is {$this->color}. <hr/>";
//     }
// }
// $apple = new Fruit("Apple", "Red"); 
// $mango = new Fruit("Mango", "Green");
// $banana = new Fruit("Banana", "Yellow");

// **********************Fruit Class wth access modifiers

// class Fruit {
//     public $name;
//     protected $color;
//     private $weight;
// }

// $mango = new Fruit();
// $mango->name = "Mango";
// $mango->color ="Yellow";
// $mango->weight = '300';

// echo $mango ->name;

//****************

// class Fruit {
//     public $name;
//     public $color;
//     public $weight;

//     function setName($n) {
//         $this->name = $n;
//     }
//     protected function setColor($n) {
//         $this->color = $n;
//     }
//     private function setWeight($n)  {
//         $this->weight = $n;
//     }
// }

// $mango = new Fruit();
// $mango->setName("Mango"); 
// $mango->setColor("Yello");  no ok 
// $mango->setWeigh('300');  no ok

// echo $mango->name;

//************************** */
// class Fruit {
//     public $name;
//     public $color;
    
//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro() {
//         echo "The fruit is  {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit {
//     public function message() {
//         echo "Am I a fruit or berry? <br>";
//     }
// }
// $strawberry = new Strawberry("Strawberry", "Red");
// $strawberry->message();
// $strawberry->intro();

//***************************************************


// class Fruit {
//     public $name;
//     public $color;
    
//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro() {
//         echo "The fruit is  {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit {
//     public function message() {
//         echo "Am I a fruit or berry? <br>";
//     }
// }
// $strawberry = new Strawberry("Strawberry", "Red");
// $strawberry->message();
// $strawberry->intro();  

//*********************************************************** */

// class Fruit {
//     public $name;
//     public $color;
    
//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro() {
//         echo "The fruit is  {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit {
//     public function message() {
//         echo "Am I a fruit or berry? <br>";
//         $this->intro();
//     }
// }
// $strawberry = new Strawberry("Strawberry", "Red");
// $strawberry->message();

//**************************************Fruit class with overriding Inherited Methods
 
// class Fruit {
//     public $name;
//     public $color;
    
//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro() {
//         echo "The fruit is  {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit {
//     public $weight;
//     function __construct($name, $color, $weight) {
//         $this->name = $name;
//         $this->color = $color;
//         $this->weight = $weight;
//     }
//     public function intro() {
//         echo "The fruit is  {$this->name} and the color is {$this->color}, and the weight is {$this->weight}";
//     }
// }
// $strawberry = new Strawberry("Strawberry", "Red", 50);
// $strawberry->intro();

//***********************************Fruit Class with final keyword */

// final class Fruit {
//     //some code
// }

// class Strawberry extends Fruit {
//     //some code
// }

// *********************************method level final keyword 

// class Fruit {
//     final public function intro() {
//         //some code
//     }
// }

// class Strawberry extends Fruit {
//     public function intro()  {
//         //some code
//     }
// }

// *****************************Fruit Class with using constant 

// class Order {
//     const PAID = 6;
//     const PANDING = 7;
// }
// echo ORDER::PAID . "<br>";
// echo ORDER::PANDING;

class Fruit {
    const MESSAGE = "Thank you for buying fruit!";
    public function thankYou() {
        echo self::MESSAGE;
    }
}

$goodbye = new Fruit();
$goodbye->thankYou(); echo "<br>";
echo $goodbye::MESSAGE;


