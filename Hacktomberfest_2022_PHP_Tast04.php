<?php
class Fruit {
 public $name;
  //declaration
 public $color;
   //declaration
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
