<?php
class MyCircle {
  // Properties
  public $radius;
  public $pi= 3.1416;
  public $area;
 
  function __construct($radius)
  {
     $this->radius = $radius;
  }
 
  function __destruct() {
    echo "This is a destructor function";
  }
 
  // Methods
  function setRadius($radius) {
    $this->radius = $radius;
  }
  function getRadius() {
    return $this->radius;
  }
 
  function getArea() {
    return $this->radius*$this->radius*$this->pi;
  }
 
  function __toString(){
      return "Area is " .this->getArea();
  }
}
 
$circle = new MyCircle(10);
 
echo $circle->getArea();
echo"<br>";
S
  ?>