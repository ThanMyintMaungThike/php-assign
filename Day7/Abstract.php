<?php
// Parent class

abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

//Child clases
class Audi extends Car {
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}
class Volvo extends Car {
    public function intro() : string {
        return "Choose Swedish quality! I'm an $this->name!";
    }
}
class Toyota extends Car {
    public function intro() : string {
        return "Choose Japan quality! I'm an $this->name!";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();
echo "<hr>";
$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<hr>";
$toyota = new Toyota("Toyota");
echo $toyota->intro();
echo "<hr>";

abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name, $seperator = ".", $greet = "Dear") {
        if($name == "Aung Aung") {
            $prefix = "Mr";
        } elseif ($name == "Aye Aye") {
            $prefix = "Ms";
        }else {
            $prefix = "";
        }
        return "{$greet} {$prefix} {$seperator} {$name}";
    }
}

$class = new ChildClass;
echo $class->prefixName("Aung Aung");
echo "<br>";
echo $class->prefixName("Aye Aye");