<?php
class Fruit {
 public $name;
 public $color; //missing comma
 function __construct($name) {
 $this->name = $name;
 }
 function get_name() {
 return $this->name;
 }
}
$apple = new Fruit("Apple");
echo $apple->get_name();
?>
