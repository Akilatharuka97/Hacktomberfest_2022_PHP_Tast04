<?php

class Fruit {
//   creating variables
 public $name;
 public $color;
 
  //implementing functions
 function __construct($name) {
    $this->name = $name;
 }
  
 function get_name() {
    return $this->name;
 }
  
}

// function calling
$apple = new Fruit("Apple");
// displaying outputs
echo $apple->get_name();

?>

