<?php
class Fruit {
 public $name;
//   create "name" variable
 public $color;
  //   create "color" variable
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
